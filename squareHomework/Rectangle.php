<?php

namespace squareHomework;

//•題目：在數學領域中，正方形是長方形一種，也都有計算面積的方法，請設計物件與類別？
class Rectangle
{
    protected int $length;
    protected int $width;

    public function __construct(int $length, int $width)
    {
        $this->$length = $length;
        $this->$width = $width;
    }

    public function area(): int
    {
        return $this->length * $this->width;
    }

}