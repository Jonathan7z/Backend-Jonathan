<?php 

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET'){
$clientes = [[
    "Cedula"=>32666861,
    "Nombre"=>"Margarita Cárdenas",
    "Direccion"=>"kra 49c # 96a-16",
    "Telefono"=>"3738673",
    "Edad"=>55
],[
    "Cedula"=>832691,
    "Nombre"=>"Isidoro Cárdenas",
    "Direccion"=>"kra 49c # 96a-16",
    "Telefono"=>"3738673",
    "Edad"=>90
],[
    "Cedula"=>1140876080,
    "Nombre"=>"Jonathan Ponce",
    "Direccion"=>"kra 49c # 96a-16",
    "Telefono"=>"3738673",
    "Edad"=>25
],[
    "Cedula"=>1150698750,
    "Nombre"=>"Julio Cárdenas",
    "Direccion"=>"kra 65c # 68-50",
    "Telefono"=>"3206578",
    "Edad"=>35
]

];
$json= json_encode($clientes);

header('content-type: application/json; charset=utf-8');
echo $json;
}else{

    $clientes = ["messge"=>"Metodo $method no permitido" ];
    $json= json_encode($clientes);

header('content-type: application/json; charset=utf-8');
echo $json;
}
?>