<form action="" method="post">
  <input name="num1" type="text" placeholder="Numero 1"> <br/>

  <input name="num2" type="text" placeholder="Numero 2"> <br/>

  <button name="soma">Somar</button>
  <button name="subtracao">Subtrair</button>
  <button name="multiplicacao">Multiplicar</button>
  <button name="divisao">Dividir</button>

</form>

<?php

  if( $_POST) {
      if(isset($POST['soma'])) {
          echo $_POST['num1'] + $POST['num2'];
      }
      if(isset($POST['subtracao'])) {
          echo $_POST['num1'] - $POST['num2'];
      }
      if(isset($POST['multiplicacao'])) {
          echo $_POST['num1'] * $POST['num2'];
      }
      if(isset($POST['divisao'])) {
          echo $_POST['num1'] / $POST['num2'];
      }


    var_dump($_POST);
  }
?>


