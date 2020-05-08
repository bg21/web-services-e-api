<?php
    require 'vendor/autoload.php';
    include('Conexao.php');

    use FlyingLuscas\Correios\Client;
    use FlyingLuscas\Correios\Service;

    $correios = new Client;   
    
    if(isset($_POST['acao'])){
        $cep = $_POST['cep'];
        $sql = Conexao::conectar()->prepare("SELECT * FROM tb_painel_produtos WHERE id = ?");
        $sql->execute([$_GET['id']]);
        $sql = $sql->fetch();

        $frete = $correios->freight()
        ->origin('01001-000')
        ->destination($cep)
        ->services(Service::SEDEX, Service::PAC)
        ->item($sql['largura'], $sql['altura'], $sql['comprimento'], $sql['peso'], $sql['quantidade']) // largura, altura, comprimento, peso e quantidade
        ->calculate();
        echo '<pre>';
        print_r($frete);
        echo '</pre>';
        
    }
?>

<form method="post">
    <input type="text" name="cep" placeholder="Seu cep">
    <input type="submit" value="Calcular" name="acao">
</form>
