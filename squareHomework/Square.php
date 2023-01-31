<?php

namespace squareHomework;

class Square extends Rectangle
{
    public function __construct(int $side)
    {
        parent::__construct($side, $side);
    }
}