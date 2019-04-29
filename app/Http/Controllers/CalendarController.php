<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use DateTimeImmutable;

class CalendarController extends Controllers
{
    public function store()
    {
        echo 's';
        exit;
    }

    public function index()
    {
        $month = $this->createCalendar();
        include __DIR__ . '/../../../resources/views/index.php';
    }

    private function createCalendar()
    {
        // param
        $date = new DateTimeImmutable();
        $before = (int)$date->format('w');
        $max = (int)$date->format('t');
        $after = (7 - ($before + $max) % 7) % 7;

        $rows = array_chunk(array_merge(
            array_fill(0, $before, ''),
            range(1, $max),
            array_fill(0, $after, '')
        ), 7);

        return $rows;
    }
}

