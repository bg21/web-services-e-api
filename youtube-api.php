<?php
    require 'vendor/autoload.php';   
    
    $youtube = new Madcoda\Youtube\Youtube(array('key' => 'AIzaSyAU5RVS7yToa8s3LvbZY3UChl6CHbJA61E'));
    
    //Pegando informações da url do vídeo.
    $video = $youtube->getVideoInfo('0rM-2aKDMXo');
    //Pegando informações da url do vídeo.
   
    echo '<pre>';
    print_r($video);
    echo '</pre>';
/*
    //Somente alguns campos
    echo 'Nome do Canal: '. $video->{'snippet'}->{'channelTitle'};
    echo '<br>';
    echo 'Título do Vídeo: '.$video->{'snippet'}->{'title'};
    echo '<br>';
    echo 'Visualizações: '.$video->{'statistics'}->{'viewCount'}; 
    echo '<br>';
    echo 'Likes: '.$video->{'statistics'}->{'likeCount'}; 
    */

    //Pegando informações do Canal pelo nome do canal.
    $channel = $youtube->getChannelByName('fcbarcelona');
    echo '<pre>';
    print_r($channel);
    echo '</pre>';


    $videoList = $youtube->searchVideos('Barcelona');
    echo '<pre>';
    print_r($videoList);
    echo '</pre>';
?>  
