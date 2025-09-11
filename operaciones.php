<?php

class operaciones{

    public function convertiraBinario(int $decimal){
        $binario = "";

    do {
        $binario = ($decimal % 2) . $binario;
        $decimal = intdiv($decimal, 2);
    } while ($decimal > 0);

    return $binario;

    }

    public function convertiraHexadecimal(int $decimal){
        $hexadecimal = "";

        if($decimal == 0){
            
            return 0;
        }

    do {
        $residuo = ($decimal % 16);
        
        switch($residuo){
            case 10:
                $residuo = 'A';
                $hexadecimal = $residuo . $hexadecimal;
                break;
            case 11:
                $residuo = 'B';
                $hexadecimal = $residuo . $hexadecimal;
                break;
            case 12:
                $residuo = 'C';
                $hexadecimal = $residuo . $hexadecimal;
                break;
            case 13:
                $residuo = 'D';
                $hexadecimal = $residuo . $hexadecimal;
                break;
            case 14:
                $residuo = 'E';
                $hexadecimal = $residuo . $hexadecimal;
                break;
            case 15:
                $residuo = 'F';
                $hexadecimal = $residuo . $hexadecimal;
                break;
            default: 
                $hexadecimal = $residuo . $hexadecimal;
        }
        $decimal = intdiv($decimal, 16);
    } while ($decimal > 0);

    return $hexadecimal;

    }

    public function convertiraOctal(int $decimal){
        $octal = "";

    do {
        $octal = ($decimal % 8) . $octal;
        $decimal = intdiv($decimal, 8);
    } while ($decimal > 0);

    return $octal;

    }
}

?>