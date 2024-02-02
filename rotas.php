<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('sistema\Controlador');

SimpleRouter::get('http://localhost:3000/blog', 'SiteControlador@index');

SimpleRouter::start();

