<?php
declare(strict_types=1);

class Clock
{

    public int $hora;
    public int $minuto;

    public function __construct($hora, $minuto){
        $this->hora = $hora;

        $this->minuto = $minuto;
    }


    public function add(int $minuto):self{
        $totalMinutes = $this->hora * 60 + $this->minuto + $minuto;
        $this->hora = intdiv($totalMinutes, 60) % 24;
        $this->minuto = $totalMinutes % 60;

        return $this;
    }

    public function sub(int $minuto): self{
        $totalMinutes = $this->hora * 60 + $this->minuto - $minuto;
        $totalMinutes = ($totalMinutes % 1440 + 1440) % 1440;
        $this->hora = intdiv($totalMinutes, 60);
        $this->minuto = $totalMinutes % 60;

        return $this;
    }



    public function __toString(): string
    {
        return sprintf("%02d:%02d", $this->hora, $this->minuto);
    }
}