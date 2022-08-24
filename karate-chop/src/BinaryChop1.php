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
        if (count($arr) > 1) {
            return array_chunk($arr, count($arr) / 2);
        } else {
            return $arr;
        }
    }

    // great this works but we need to cut the array in half, and search the halfs.
    public function search($arr, $search)
    {
        return array_search($search, $arr);
    }

    public function chop(array $arr, $search)
    {
        [$arr1, $arr2] = $this->halveArray($arr);
        //for loop according to how many times it need to half
        for ($i = 0; $i < count($arr) / 2; $i++) {
            if ($this->search($arr1, $search) !== -1) {
                [$arr1, $arr2] = $this->halveArray($arr1);
            } else {
                [$arr1, $arr2] = $this->halveArray($arr2);
            }
        }
    }
}
