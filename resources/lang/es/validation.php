<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    "accepted"         => ":attribute debe ser aceptado.",
    "active_url"       => ":attribute no es una URL válida.",
    "after"            => ":attribute debe ser una fecha posterior a :date.",
    "alpha"            => ":attribute solo debe contener letras.",
    "alpha_dash"       => ":attribute solo debe contener letras, números y guiones.",
    "alpha_num"        => ":attribute solo debe contener letras y números.",
    "array"            => ":attribute debe ser un conjunto.",
    "before"           => ":attribute debe ser una fecha anterior a :date.",
    "between"          => [
        "numeric" => ":attribute tiene que estar entre :min - :max.",
        "file"    => ":attribute debe pesar entre :min - :max kilobytes.",
        "string"  => ":attribute tiene que tener entre :min - :max caracteres.",
        "array"   => ":attribute tiene que tener entre :min - :max ítems.",
    ],
    "boolean"          => "El campo :attribute debe tener un valor verdadero o falso.",
    "confirmed"        => "La confirmación de :attribute no coincide.",
    "date"             => ":attribute no es una fecha válida.",
    "date_format"      => ":attribute no corresponde al formato :format.",
    "different"        => ":attribute y :other deben ser diferentes.",
    "digits"           => ":attribute debe tener :digits dígitos.",
    "digits_between"   => ":attribute debe tener entre :min y :max dígitos.",
    "email"            => ":attribute no es un correo válido",
    "exists"           => ":attribute es inválido.",
    "filled"           => "El campo :attribute es obligatorio.",
    "image"            => ":attribute debe ser una imagen.",
    "in"               => ":attribute es inválido.",
    "integer"          => ":attribute debe ser un número entero.",
    "ip"               => ":attribute debe ser una dirección IP válida.",
    "max"              => [
        "numeric" => ":attribute no debe ser mayor a :max.",
        "file"    => ":attribute no debe ser mayor que :max kilobytes.",
        "string"  => ":attribute no debe ser mayor que :max caracteres.",
        "array"   => ":attribute no debe tener más de :max elementos.",
    ],
    "mimes"            => ":attribute debe ser un archivo con formato: :values.",
    "min"              => [
        "numeric" => "El tamaño de :attribute debe ser de al menos :min.",
        "file"    => "El tamaño de :attribute debe ser de al menos :min kilobytes.",
        "string"  => ":attribute debe contener al menos :min caracteres.",
        "array"   => ":attribute debe tener al menos :min elementos.",
    ],
    "not_in"           => ":attribute es inválido.",
    "numeric"          => ":attribute debe ser numérico.",
    "regex"            => "El formato de :attribute es inválido.",
    "required"         => "El campo :attribute es obligatorio.",
    "required_if"      => "El campo :attribute es obligatorio cuando :other es :value.",
    "required_with"    => "El campo :attribute es obligatorio cuando :values está presente.",
    "required_with_all" => "El campo :attribute es obligatorio cuando :values está presente.",
    "required_without" => "El campo :attribute es obligatorio cuando :values no está presente.",
    "required_without_all" => "El campo :attribute es obligatorio cuando ninguno de :values estén presentes.",
    "same"             => ":attribute y :other deben coincidir.",
    "size"             => [
        "numeric" => "El tamaño de :attribute debe ser :size.",
        "file"    => "El tamaño de :attribute debe ser :size kilobytes.",
        "string"  => ":attribute debe contener :size caracteres.",
        "array"   => ":attribute debe contener :size elementos.",
    ],
    "string"           => "The :attribute must be a string.",
    "timezone"         => "El :attribute debe ser una zona válida.",
    "unique"           => ":attribute ya ha sido registrado.",
    "url"              => "El formato :attribute es inválido.",
    "current_password"  => "El campo :attribute no coincide con nuestros registros.",
    'captcha' =>        'El captcha ingresado es incorrecto.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'acepto' =>[
            'required' => 'El :attribute debe ser leído y aceptado.'
        ]
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [
        'email'         => 'Email',
        'password'      => 'Password',
        'name'          => 'Nombre',
        'a_paterno'     => 'Apellido Paterno',
        'a_materno'     => 'Apellido Materno',
        'birthdate'     => 'Fecha de Nacimiento',
        'genero'        => 'Genero',
        'acepto'        => 'Aviso de Privacidad',
        "estado_civil"  => "Estado Civil",
        "curp"          => "CURP",
        "rfc"           => "RFC",
        "pais_id"       => "País",
        "state_id"      => "Estado",
        "mpio_id"       => "Municipio",
        "calle"         => "Calle",
        "no_ext"        => "No. Ext.",
        "colonia"       => "Colonia",
        "codigo_postal" => "Código Postal",
        "telefono1"     => "Tipo de Telefono",
        "txt_telefono1" => "Número Telefónico",
        "licencia"      => "Licencia de Conducir",
        "dipone_veiculo" => "Dispone de Vehículo propio",
        "discapacidad"  => "Discapacidad",
        "disp_viajar"   => "Disponibilidad para viajar",
        "disp_cam_res"  => "Disponibilidad para cambiar de Residencia",
        
        "max_studio"    => "Máximo Nivel de Estudios",
        "institucion"   => "Nombre de Institución",
        "titulo-estudios" => "¿Que estudiaste?",
        "ac_estudia"    => "¿Estudias Actualmente?",
        "estudiano" => "NO",
        "estudiasi" => "SI",
        "mes_start"     => "Mes de Inicio",
        "year_start"    => "Año de Inicio",
        "mes_fin"     => "Mes de Termino",
        "year_fin"    => "Año de Terino",
        "title_prof"    => "Cargo o título breve del currículum",
        "specialty"     => "Especialidad",
        "descrip_prof"  => "Descripción breve de su perfil profesional",
        "situcacion_ac"     => "Situación Actual" ,
        "puesto_des"        => "Puesto de Trabajo Deseado",
        "req_salary"        => "Sueldo Requerido",
        "salary_type"       => "Periodo de Sueldo Requerido",
        "des_salary"        => "Sueldo Deseado",
        "salary_type_des"   => "Periodo de Sueldo Deseado",
        "cvfile"        => "El Archivo seleccionado",
        'old_password'  => "Contraseña Actual ",
        'user_id'       => "El Usuario ",
        'razon_social'       => "Razon social",
        'domicilio'         => "Domicilio",
        'no_exterior'         => "No. Exterior",
        'ciudad'            => "Ciudad",
        'category_id'            => "Categoría",
        'ciudad'            => "Ciudad",
        'tipo_contrata_emp' => "Tipo de Empresa",
        'title' => "Titulo de Vacante",
        'description' => "Descripción",
        'public_min_pay' => 'Publicar Sueldo mínimo',
        'public_max_pay' => 'Publicar Sueldo máximo',
        'min_salary' => 'Sueldo Mínimo',
        'max_salary' => 'Sueldo Máximo'
    ],
];