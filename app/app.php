<?php
        require_once __DIR__."/../vendor/autoload.php";
        require_once __DIR__."/../src/places.php";

        session_start();

        if (empty($_SESSION['list_of_cities'])) {
            $_SESSION['list_of_cities'] = array();
        }

        $app= new Silex\Application();

        $app->register(new Silex\Provider\TwigServiceProvider(), array(
            'twig.path' => __DIR__.'/../views'
        ));

        $app->get("/", function() use ($app) {
            return $app['twig']->render('cityname.php', array('cities' => Place::getAll()));
        });

        $app->post("/cityname", function() use ($app) {
            $city = new Place($_POST['city'], ($_POST['time']));
            $city->save();
            return $app['twig']->render('list_city.php', array('newcity' => $city));

        });

        $app->post("/delete_cities", function() use ($app) {
            Place::deleteAll();
            return $app['twig']->render('delete_cities.php');

        });

        $app->get("/", function() use ($app) {
            return $app['twig']->render('cityname', array('cities' => Place::getAll()));
        });


        return $app;

?>
