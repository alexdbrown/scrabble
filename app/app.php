<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Scrabble.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider (), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/score", function() use ($app) {
        $my_Score = new Scrabble;
        $your_score = $my_Score->scrabbleScore($_GET['input']);
        return $app['twig']->render('score.html.twig', array('score' => $your_score));
    });

    return $app;

 ?>
