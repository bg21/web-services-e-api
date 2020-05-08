<?php
    if(isset($_POST['busca'])){
        $urlPost = urlencode($_POST['busca']);  
        $url = 'http://pt.wikipedia.org/w/api.php?action=query&prop=extracts|info|pageimages&piprop=thumbnail&pithumbsize=600&exintro&titles='.$urlPost.'&format=json&explaintext&redirects=1&inprop=url&indexpageids&utf8';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $data = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($data);
        
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        $pageid = $data->query->pageids[0];

        echo '<h2>Título:</h2> '. $data->query->pages->$pageid->title; //para pegar o título
        echo '<h2>Descrição</h2>'. $data->query->pages->$pageid->extract; //para pegar a descrição
        echo '<h2>Imagem</h2> <img src="'. $data->query->pages->$pageid->thumbnail->source.'">'; //para pegar a imagem
    }
?>
<form method="POST">
	<input type="text" name="busca">
	<input type="submit" value="Enviar">
</form>

<p>
    Fontes: 
    https://en.wikipedia.org/w/api.php?action=help&modules=query%2Bextracts
    https://www.mediawiki.org/wiki/API:Tutorial
    https://vegibit.com/php-url-encode/
</p>
