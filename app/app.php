<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/FoShizzle.php";

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
  ));

  $app->get("/", function() use ($app) {
      return $app['twig']->render('form.twig');
  });

  $app->get("/foshizzle", function() use ($app) {
      $fo_shizzle = new FoShizzle;
      $the_answer = $fo_shizzle->changeLetters($_GET['user_input']);
      return $app['twig']->render('foshizzle_output.twig', array('result' => $the_answer));
  });
  
  return $app;
?>
