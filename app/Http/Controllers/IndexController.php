<?php

namespace empleaDos\Http\Controllers;

use Illuminate\Http\Request;

use empleaDos\Http\Requests;
use empleaDos\Http\Controllers\Controller;
use empleaDos\Entities\Category;
use empleaDos\Entities\Country;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pais = Country::lists('pais','id');
        $catego = Category::lists('category','id');
        return view('index1', compact('pais','catego'));
    }

    public function preguntasUser(){

        return view('frontend.pruguntas_usuario');
    }
    public function help1(){

        return view('frontend.help');
    }
     public function help2(){

        return view('frontend.help-company');
    }

    public function help3(){

        return view('frontend.help-servicios');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */


    public function getCuenta()
    {
        return view('frontend.recuperar_cuenta');
    }

    public function changeCuenta()
    {
        return view('aspirantes.content.change_cuenta');
    }

    public function anunciosCompany()
    {
        return view('frontend.anuncios');
    }
}
