<?php
$a = new Exception();


class Color
{

    private $red;
    private $green;
    private $blue;
    public function __construct( ?int $red,  ?int $green,  ?int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }
    private function valid($value)
    {
        if (($value > 0) && ($value < 255)){
            return true;
        }else{
            return false;
        }
    }
    private function setRed( ?int $value)
    {
        if ($this->valid($value))
        {
            $this->red = $value;
        }else{
            throw Exception('not a valid number');
        }

    }
    private function setGreen(?int $value)
    {
        if ($this->valid($value)) {
            $this->green = $value;
        }else{
            throw Exception('not a valid number');
        }
    }
    private  function  setBlue(?int $value)
    {
        if ($this->valid($value)) {
            $this->blue = $value;
        }else{
            throw Exception('not a valid number');
        }
    }
    public function getRed()
    {
        return $this->red;
    }
    public function getGreen()
    {
        return $this->green;
    }
    public function  getBlue()
    {
        return $this->blue;
    }
    public function equals(Color $color)
    {
            if ($color->getRed() == $this->getRed()){
                if ($color->getGreen() == $this->getGreen()){
                    if ($color->getBlue() == $this->getBlue()){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }else{
                return false;
            }
    }
    static function random()
    {
        return  new Color(rand(0, 255), rand(0, 255), rand(0, 255));
    }
    public function mix(Color $color)
    {
       $newRed = ($this->getRed() + $color->getRed())/2;
       $newGreen = ($this->getGreen() + $color->getGreen())/2;
       $newBlue = ($this->getBlue() + $color->getBlue())/2;
       return new Color($newRed, $newGreen, $newBlue);
    }
}
//$new = new Color(260, 10, 50);
//echo $new->getGreen().PHP_EOL;
//echo $new->equals('bluegfgf');
$rgb = Color::random();
var_dump($rgb);
