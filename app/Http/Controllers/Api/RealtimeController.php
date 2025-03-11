<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RealtimeController extends Controller
{
    public function search(Request $request, string $header)
    {
        $value = $request->input('q');

        $column = mb_strtoupper($header);

        $json = Http::get('https://ogienurdiana.com/career/ecc694ce4e7f6e45a5a7912cde9fe131')->json();

        $service = new \App\Services\RealtimeService($json['DATA']);

        return response()->json(collect($json)->merge(["DATA" => $service->filterBy($column, $value)]));
    }
}
