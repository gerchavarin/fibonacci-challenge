<?php

namespace App\Services;
 
class FibonacciService
{
    public function calculate($n)
    {
        return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
    }
}