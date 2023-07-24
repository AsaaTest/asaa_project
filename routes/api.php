<?php

use Asaa\Routing\Route;

Route::get('/api', fn () => json(["messaje" => "Asaa API"]));