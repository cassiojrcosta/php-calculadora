<?php

  include('calculadora.php');
  
  $calculadora = new Calculadora();

  $operador = $_POST['op'];

      echo 'Soma: ' . $calculadora->soma(1, 8);

?>
