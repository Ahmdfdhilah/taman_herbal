<?php

namespace App\Http\Controllers\Client;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DokumentasiController extends Controller
{
    public function __invoke()
    {
        $dokumentasi = Dokumentasi::all();

        $perPage = 8; 
        $currentPage = \Illuminate\Pagination\Paginator::resolveCurrentPage() ?? 1;
        $paginatedData = new \Illuminate\Pagination\LengthAwarePaginator($dokumentasi, count($dokumentasi), $perPage, $currentPage);
 
        $paginatedData->withPath(route('dokumentasi'));
        
        return view('client.dokumentasi', compact('paginatedData'));
    }
}
