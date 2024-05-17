<?php 
$monto = 454;
$lista_monto_previo = [
    [
        "monto" => 15.33,
        "pago" => "mediweb",
    ],
    [
        "monto" => 87.33,
        "pago" => "mediweb",
    ],
    [
        "monto" => 1567.33,
        "pago" => "mediweb",
    ],
   
];
$total = array_sum(array_column($lista_monto_previo, 'monto'));

if($total > $monto){
    echo "monto disponible";
}
$monto_actual = 0;
foreach ($lista_monto_previo as $key => $value) {

    $monto_actual = (float)$value['monto'] - $monto;
    if($monto_actual < 0){
        echo "esta billetera esta sin saldo<br>";
    }
    $monto = abs($monto_actual);
}
var_dump(number_format($monto, 2));


?>