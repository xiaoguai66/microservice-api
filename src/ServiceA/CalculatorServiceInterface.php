<?php

namespace Xiaoguai\Microservice\ServiceA;

interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;
}