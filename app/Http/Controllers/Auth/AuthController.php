<?php

namespace empleaDos\Http\Controllers\Auth;

use empleaDos\Entities\Country;
use empleaDos\Http\Requests\ChangePasswordRequest;
use empleaDos\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Support\Facades\Auth;
use empleaDos\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Redirect;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['getLogout','updatepass']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'a_paterno' => 'required',
            'a_materno' => 'required',
            'genero' => 'required',
            'date_birth' => '',
            'month_birth' => '',
            'year_birth' => '',
            'email' => 'required|email|confirmed|max:255|unique:users',
            'password' => 'required|confirmed',
            'acepto' => 'required',
            
        ]);

    }


    public function getRegisterCom()
    {
        $pais = Country::lists('pais','id');
        return view('auth.register_com', compact('pais'));
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $birthdate = $data['year_birth'].'-'.$data['month_birth'].'-'.$data['date_birth'];
        $user = new User([
            'name' => $data['name'],
            'a_paterno' => $data['a_paterno'],
            'a_materno' => $data['a_materno'],
            'genero' => $data['genero'],
            'birthdate' => $birthdate,
            'email' => $data['email'],
            'password' => $data['password'],
            'remember_token' => $data['_token'],
           
        ]);

          //AQUI SE VAN A CREAR LAS FUNCIONES DE LAS DEMAS PAGINAS DE REGISTROR
        $user->type = 'user';
        $user->registration_token = str_random(40);
        $user->save();

        $url = route('confirmation',['token'=>$user->registration_token]);

        Mail::send('emails.registration',compact('user','url'), function ($m) use ($user){
            $m->to($user->email, $user->name)->subject('Activa tu cuenta!');
        });

        return $user;
    }
    protected function createCom(array $data)
    {
        $user = new User([
            'name' => $data['name'],
            'a_paterno' => $data['a_paterno'],
            'a_materno' => $data['a_materno'],
            'genero' => $data['genero'],
            'birthdate' => $data['birthdate'],
            'email' => $data['email'],
            'password' => $data['password'],
            'remember_token' => $data['_token'],
        ]);
        $user->type = 'company';
        $user->registration_token = str_random(40);
        $user->save();

        $url = route('confirmation',['token'=>$user->registration_token]);

        Mail::send('emails.registration',compact('user','url'), function ($m) use ($user){
            $m->to($user->email, $user->name)->subject('Activa tu cuenta!');
        });

        return $user;
    }

    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($request->all());

        return redirect()->route('login')
            ->with('status','Por favor confirma tu email: '.$user->email);
    }

    public function postRegisterPersonal(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->create($request->all());

        return redirect()->route('login')
            ->with('status','Por favor confirma tu email y llena los datos necesarios para tu curriculum: '.$user->email);
    }


    public function infoRegisterGeneral()
    {
        return view ('auth.info');
    }

    

    public function infoPersonal()
    {
        return view ('auth.registerp');
    }

    public function rPersonal()
    {
        return view ('auth.register_personal');
    }


    public function postRegisterCom(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user = $this->createCom($request->all());

        return redirect()->route('login')
            ->with('status','Por favor confirma tu email: '.$user->email);
    }

    public function getCredentials(Request $request){
        return [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'registration_token' => null
        ];
    }

    public function getConfirmation($token)
    {
        $user =User::where('registration_token', $token)->firstOrFail();
        $user->registration_token = null;
        $user->save();

        return redirect()->route('login')
            ->with('status','Email confirmado, ahora puedes iniciar sesión y llenar los datos de tu curriculum!');
    }

    public function loginPath()
    {
        return route('frontend.index');
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
    */
    public function redirectPath()
    {
        if( Auth::user()->type == 'root'){
            return route('admin.home');
        }elseif (Auth::user()->type == 'company' ) {
            return route('company.edit_cuenta');
            }elseif (Auth::user()->type == 'user' ) {
            return route('curriculum.edit');
        }else{
            return route('curriulum.show');
        }
        
        
    }

    public function updatepass(ChangePasswordRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user->password = $request->password;
        $user->save();

        Mail::send('emails.updatepassword',['user' => $user],function ($m) use ($user){
            $m->subject('Cambio de contraseña');
            $m->to($user->email);
        });
        Session::flash('message', 'Tu Contraseña ha sido cambiada correctamente!!');
        return redirect()->back();
    }
}
