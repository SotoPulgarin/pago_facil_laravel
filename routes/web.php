<?php

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });


// //Primera ruta: mensaje
// Route::get('hola', function () {

//     $ficha = 1753443;
//     echo 'hola madrugadores', $ficha;
// });


// //Ruta tratar arreglos

// Route::get('arreglo', function () {

//     //Crear arreglo:

//     $estudiantes = [
//         "A" => "ali",
//         "N" => "ana",
//         "L" => "lola"


//     ];
//     //var_dump : analiza una variable
//     //Para imprimir cada valor del arreglo:
//     // echo "<pre>";
//     // echo $estudiantes["A"];
//     // // echo "<hr />";
//     // echo $estudiantes["N"];
//     // // echo "<hr />";
//     // echo $estudiantes["L"];
//     // // echo "<hr />";
//     // // var_dump($estudiantes);
//     // echo "</pre>";

//     //Accedo al elemento del arreglo
//     // echo $estudiantes ["A"];

//     // //Asignar valor a un elemento del arreglo
//     // $estudiantes ["L"] = "Laura";

//     //Ciclo For each=especifico para recorrer arreglos, desde el primer elemento hasta el ultimo, de uno en uno

//     $estudiantes[] = "hassan";

//     foreach($estudiantes as $clave => $estudiantes){

//         echo "$clave - $estudiantes";
//         echo "<hr /r>";

//     };


// });
//Arreglos Multidimensionales
Route::get('arreglosm',function(){

    $paises =["Colombia"=>["capital"=>"Bogota",
                          "moneda"=>"peso",
                          "poblacion"=>50,
                        "ciudades" => ["cali", "medellin"
                        ]
                    ],
              "Peru"=>["capital"=>"Lima",
                       "moneda"=>"sol",
                       "poblacion"=>32,
                        "ciudades" => ["Uancayo", "trujillo"
                        ]
                    ],
              "Bolivia"=>["capital"=>"La paz",
                          "moneda"=>"peso Boliviano",
                          "poblacion"=>11,
                          "ciudades" =>  ["cochabamba", "santacruz"
                          ]
                ],

            ];

//     echo"<pre>";
//     var_dump($paises);
//     echo"</pre>";
// //recorrer simple
// foreach($paises as $pais => $informacion){
//     echo"<h1> $pais</h1>";
//     echo $informacion["capital"];
//     echo "<hr/>";





// }
// //recorrer con doble foreach
// foreach($paises as $pais => $informacion){
//     echo"<h1> $pais</h1>";
//     foreach ($informacion as $clave =>$valor){
//         echo "$clave: $valor";
//     echo "<hr/>";
//     }






// }

    //Mostrar la vista:
    //A la vista se le pueden pasar o adjuntar datos:
    return view('paises')
            ->with('paises' , $paises);

});
