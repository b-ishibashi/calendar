<?php

require_once __DIR__ . '/../config/app.php';

use App\Http\Controllers\CalendarController;

$app = new CalendarController();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $app->store();
} else {
    $app->index();
}
