<?php

namespace Xiaoguai\Microservice\ServiceA;

interface CalculatorServiceInterface
{
    /**
     * 两数相加
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b): int;
}