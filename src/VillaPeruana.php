<?php

namespace App;

class VillaPeruana
{
    public $name;

    public $quality;

    public $sellIn;

    private $pisco;
    private $ticket;
    private $tumi;
    private $normal;
    private $cafe;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name     = $name;
        $this->quality  = $quality;
        $this->sellIn   = $sellIn;

        $this->normal   = new Normal();
        $this->pisco    = new Pisco();
        $this->ticket   = new Ticket();
        $this->tumi     = new Tumi();
        $this->cafe     = new Cafe();
    }

    public static function of($name, $quality, $sellIn) {
        return new static($name, $quality, $sellIn);
    }

    public function tick()
    {
        if ($this->quality >= 50) {
            $this->quality = 49;
        }else if ($this->quality < 0) {
            $this->quality = 0;
        }
        
       switch ($this->name) {
        case 'Pisco Peruano':
            $this->pisco->validar($this);
            break;
        case 'Tumi de Oro Moche':
            $this->tumi->validar($this);
            break;
        case 'Ticket VIP al concierto de Pick Floid':
            $this->ticket->validar($this);
            break;
        case 'Café Altocusco':
            $this->cafe->validar($this);
            break;
        default:
            $this->normal->validar($this);
            break;
       }

    }
}
