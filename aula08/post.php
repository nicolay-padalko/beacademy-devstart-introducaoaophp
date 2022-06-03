<form action="" method="post">
    <input type="text" name="nome" placholder="Digite aqui"/>
    <button>Enviar</button>
</form>

<?php
    if ($_POST) {
        echo $_POST['nome'];
    }
?>