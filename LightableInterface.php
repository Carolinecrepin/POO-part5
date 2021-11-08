<?php
// interface pour vehicle possédant une lumière
interface LightableInterface             
{
    public function switchOn();         //fonction allumer
    public function switchOff();       //fonction eteindre
}