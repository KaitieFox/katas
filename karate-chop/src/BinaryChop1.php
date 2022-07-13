<?php

namespace Karate;

class BinaryChop1
{
    public function yay()
    {
        return "yay!";
    }

    public function halveArray(array $arr)
    {
        return array_chunk($arr, count($arr) / 2);
    }

    // great this works but we need to cut the array in half, and search the halfs.
    public function search($arr, $search)
    {
        return array_search($search, $arr);
    }
}
