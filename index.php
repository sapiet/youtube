<?php
    require 'app.php';
    $videos = Youtube::getVideos();
?><!doctype html>
<html>
    <head>
        <title>My Uploads</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="app.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-3">
                    <div class="player"></div>
                </div>
            </div>
            <div class="row list">
                <?php foreach ($videos->items as $video): ?>
                    <div class="col-sm-4">
                        <a href="https://www.youtube.com/embed/<?= $video->id->videoId ?>" class="card mt-4">
                            <img class="card-img-top" src="<?= $video->snippet->thumbnails->high->url ?>" alt="<?= $video->snippet->title ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $video->snippet->title ?></h5>
                                <p class="card-text"><?= $video->snippet->description ?></p>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="app.js"></script>
        <script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>
    </body>
</html>
