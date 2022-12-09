<?php

namespace App\Http\Controllers;

use App\Http\Requests\FibonacciRequest;
use App\Services\FibonacciService;
use App\Models\RequestLog;


class FibonacciController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  FibonacciRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FibonacciRequest $request, FibonacciService $fibonacciService)
    {
        $requestLog = RequestLog::create($request->validated());
        $number = $fibonacciService->calculate($requestLog->posicion);
        return "Numero: {$number} Nombre: {$requestLog->nombre}";
    }

}
