<?php
    require('vendor/autoload.php');
    use FlyingLuscas\Correios\Client;
    $correios = new Client;   

    if(isset($_POST['acao'])){
        $cep = $_POST['cep'];
        $resultado = $correios->zipcode()->find($cep);

        print_r($resultado);
    }
    
?>
<form method="post">
    <input type="text" name="cep" placeholder="Seu cep">
    <input type="submit" value="Achar" name="acao">
</form>
