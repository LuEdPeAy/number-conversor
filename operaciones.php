<?php

class operaciones{

    public function convertir(int $decimal){
        $binario = "";

    do {
        $binario = ($decimal % 2) . $binario;
        $decimal = intdiv($decimal, 2);
    } while ($decimal > 0);

    return $binario;

    }
}

?>