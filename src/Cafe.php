<?php

namespace App;

class Cafe
{
    public function validar(VillaPeruana $item)
    {
        if ($item->quality > 1) {
            $item->quality-=2;
        }

        $item->sellIn--;

        if ($item->sellIn < 0 && $item->quality > 0) {
            $item->quality-=2;
        }
    }
}