<?php
namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;

class StatistikController extends Controller
{
    public function __invoke()
    {
        return view(
            'client.statistik'
        );
    }
}
