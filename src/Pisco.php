<?php

namespace App;

class Pisco
{
    public function validar(VillaPeruana $item)
    {
        $item->quality++;
        
        $item->sellIn--;

        if ($item->sellIn < 0 && $item->quality < 50) {
            
            $item->quality++;
            
        }
    }
}