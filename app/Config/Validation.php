<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $personal = [

        'persona.dni'              => 'required|min_length[7]|max_length[8]',
        'persona.apellidos'        => 'required',
        'persona.nombres'          => 'required',
        'persona.cuil'             => 'required', 
        'persona.domicilio'        => 'required', 
        'persona.ciudad'           => 'required', 
        'persona.fechanac'         => 'required|valid_date', 
        'persona.edad'             => 'required|integer', 
        'persona.lugarnac'         => 'required', 

        'personal.nrolegajo'       => 'required',
        'personal.tipodesignacion' => 'required|alpha',
        'personal.fechaingreso'    => 'required|valid_date',
        'personal.fechauddjj'      => 'required|valid_date'

    ];

    public $producto = [

        'codigooriginal'  => 'required',
        'codigoalfa'      => 'required',
        'descripcion'     => 'required',
        'idcategoriaprod' => 'required',
        'preciocontado'   => 'required',
        'preciolista'     => 'required',
        'stock'           => 'required|integer'
    ];

    public $createuser = [

        'username'          => 'required',
        'userlastname'      => 'required',
        'email'             => 'required|valid_email',
        'category'          => 'required',
        'userpassword'      => 'required|min_length[5]',
        'userpassconfirm'   => 'required|matches[userpassword]'

    ];

    public $user = [

        'user.username'        => 'required|alpha_space',
        'user.userlastname'    => 'required|alpha_space',
        'user.email'           => 'required|valid_email',
        'user.category'        => 'required'

    ];

    public $login = [

        'email'         => 'required|valid_email',
        'userpassword'  => 'required'
        
    ];

    public $categoria = [

        'nombrecategoria' => 'required'
    ];
}
