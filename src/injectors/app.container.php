<?php

$container->set('WelcomeController', function($container) {
    return new \SleekwaredbApi\controllers\WelcomeController($container);
});