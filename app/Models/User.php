<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'documento', 'name' ,'email', 'password', 'rol_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $menu = [
        "ADMIN"=>[
            ["nombre"=>"Home", "url"=>"/home", "icono"=>"fas fa-home"],

            [
                "nombre"=>"Categoria", 
                "url"=>"#", 
                "icono"=>"fa fa-list-alt",
                "hijos"=> [
                    ["nombre" => "Crear", "url" => "/categorias/create"],
                    ["nombre" => "Listar", "url" => "/categorias"]
                ]
            ],

            [
                "nombre"=>"Persona", 
                "url"=>"#", 
                "icono"=>"fas fa-users",
                "hijos"=> [
                    ["nombre" => "Crear", "url" => "/personas/create"],
                    ["nombre" => "Listar", "url" => "/personas"]
                ]
            ],

            [
                "nombre"=>"Productos", 
                "url"=>"#", 
                "icono"=>"fa fa-cart-plus",
                "hijos"=> [
                    ["nombre" => "Crear", "url" => "/producto/crear"],
                    ["nombre" => "Listar", "url" => "/producto"]
                ]
            ],

            [
                "nombre"=>"Agenda", 
                "url"=>"#", 
                "icono"=>"fa fa-calendar-alt",
                "hijos"=> [
                    ["nombre" => "Crear", "url" => "/agenda/crear"],
                    ["nombre" => "Listar", "url" => "/agenda"]
                ]
            ],

        ],
        "USER"=>[

            ["nombre"=>"Home", "url"=>"/home", "icono"=>"fas fa-home"],
            
            [
                "nombre"=>"Categoria", 
                "url"=>"#", 
                "icono"=>"fa fa-list-alt",
                "hijos"=> [
                    ["nombre" => "Listar", "url" => "/categorias"]
                ]
            ],

            [
                "nombre"=>"Persona", 
                "url"=>"#", 
                "icono"=>"fas fa-users",
                "hijos"=> [
                    ["nombre" => "Listar", "url" => "/personas"]
                ]
            ],

            [
                "nombre"=>"Productos", 
                "url"=>"#", 
                "icono"=>"fa fa-cart-plus",
                "hijos"=> [
                    ["nombre" => "Listar", "url" => "/producto"]
                ]
            ],

            [
                "nombre"=>"Agenda", 
                "url"=>"#", 
                "icono"=>"fa fa-calendar-alt",
                    ["nombre" => "Listar", "url" => "/agenda"]
            ]

        ],
    ];

    public static $permisos = [
        "ADMIN"=>[
            ["url" => "/home", "method"=>"GET", "identifica"=>true],
            ["url" => "/categorias", "method"=>"GET", "identifica"=>true],
            ["url" => "/categorias/create", "method"=>"GET", "identifica"=>true],
            ["url" => "/categorias", "method"=>"POST", "identifica"=>true],
            ["url" => "/personas", "method"=>"GET", "identifica"=>true],
            ["url" => "/personas/create", "method"=>"GET", "identifica"=>true],
            ["url" => "/personas", "method"=>"POST", "identifica"=>true],
            ["url" => "/producto", "method"=>"GET", "identifica"=>true],
            ["url" => "/producto/listar", "method"=>"GET", "identifica"=>true],
            ["url" => "/producto/crear", "method"=>"GET", "identifica"=>true],
            ["url" => "/producto/guardar", "method"=>"POST", "identifica"=>true],
            ["url" => "/producto/editar/", "method"=>"GET", "identifica"=>false],
            ["url" => "/producto/actualizar", "method"=>"POST", "identifica"=>true],
            ["url" => "/producto/cambiar/estado/", "method"=>"POST", "identifica"=>false],
            ["url" => "/agenda", "method"=>"GET", "identifica"=>true],
            ["url" => "/agenda/listar", "method"=>"GET", "identifica"=>true],
            ["url" => "/agenda/crear", "method"=>"GET", "identifica"=>true],
            ["url" => "/agenda/guardar", "method"=>"POST", "identifica"=>true],
            ["url" => "/agenda/editar/", "method"=>"GET", "identifica"=>false],
            ["url" => "/agenda/actualizar", "method"=>"POST", "identifica"=>true],
            ["url" => "/agenda/cambiar/estado/", "method"=>"POST", "identifica"=>false],
            ["url" => "/pdfProductos", "method"=>"GET", "identifica"=>true]
        ],

        "USER"=>[
            ["url" => "/home", "method"=>"GET", "identifica"=>true],
            ["url" => "/categoras", "method"=>"GET", "identifica"=>true],
            ["url" => "/personas", "method"=>"GET", "identifica"=>true],
            ["url" => "/producto", "method"=>"GET", "identifica"=>true],
            ["url" => "/producto/listar", "method"=>"GET", "identifica"=>true],
            ["url" => "/agenda", "method"=>"GET", "identifica"=>true],
            ["url" => "/agenda/listar", "method"=>"GET", "identifica"=>true],
            ["url" => "/pdfProductos", "method"=>"GET", "identifica"=>true]
        ],

    ];

}
