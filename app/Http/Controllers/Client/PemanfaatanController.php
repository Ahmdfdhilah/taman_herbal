<?php
namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use App\Models\Pengelolaan;

class PemanfaatanController extends Controller
{
    public function __invoke()
    {
        $pengelolaan = Pengelolaan::all();       
        return view('client.pemanfaatan', compact('pengelolaan'));
    }
}
