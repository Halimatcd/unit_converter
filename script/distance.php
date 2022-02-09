<?php
class distance
{
    public $CM;
    public $M;

    public function CMtoM(int $CM)
    {
        $answer = $CM / 100 . "m";
        return $answer;
    }
    public function MtoCM(int $M)
    {
        $answer = $M * 100 . "cm";
        return $answer;
    }
}
