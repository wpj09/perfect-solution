<?php

namespace App\Http\Controllers;

use App\Facades\ApiResolveAi;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $response = ApiResolveAi::get('/problems')->json();

        foreach ($response as $item) {
            $i[] = $item['title'];
        }

        return view('teste', [
            'dados' => $i
        ]);
    }
}
