<?php

class elementos{
    public function getMenu(){
        $menu = '
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Decimal a Binario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./hexadecimal.php">Decimal a Hexadecimal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./octal.php">Decimal a Octal</a>
            </li>
        ';

        return $menu;
    }
}

?>