<?php
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
    private function setRed( ?int $value)
    {
        if (($value > 0) && ($value < 255))
        {
            $this->red = $value;
        }else{
            echo 'Лимит числа';
        }

    }
    private function setGreen(?int $value)
    {
        if (($value > 0) && ($value < 255)) {
            $this->green = $value;
        }else{
            echo 'Лимит числа';
        }
    }
    private  function  setBlue(?int $value)
    {
        if (($value > 0) && ($value < 255)) {
            $this->blue = $value;
        }else{
            echo 'Лимит числа';
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
    public function equals(string $color)
    {
        if ($color === 'red'){
            if (($this->red > $this->green) && ($this->red > $this->blue)){
                return true;
            } else{
                return false;
            }
        }elseif ($color === 'green'){
            if (($this->green > $this->red) && ($this->green > $this->blue)){
                return true;
            } else{
                return false;
            }
        }elseif ($color === 'blue'){
            if (($this->blue > $this->red) && ($this->blue > $this->green)){
                return true;
            } else{
                return false;
            }
        }else{
           echo 'Нет такого цвета';
        }
    }
    static function random()
    {
        return  new Color(rand(0, 255), rand(0, 255), rand(0, 255));
    }
    public function mix(int $colorRed,int $colorGreen,int $colorBlue)
    {
        if ($this->valid($colorRed)){
            $newRed = ($this->red + $colorRed)/2;
        }else{
            echo 'Число сильно большое($red)';
            $newRed = $this->red;
        }
        if ($this->valid($colorGreen)){
            $newGreen = ($this->green + $colorGreen)/2;
        }else{
            echo 'Число сильно большое($green)';
            $newGreen = $this->green;
        }
        if ($this->valid($colorBlue)){
            $newBlue = ($this->blue + $colorBlue)/2;
        }else{
            echo 'Число сильно большое($blue)';
            $newBlue = $this->blue;
        }
        return new Color($newRed,$newGreen,$newBlue);
    }
}
//$new = new Color(260, 10, 50);
//echo $new->getGreen().PHP_EOL;
//echo $new->equals('bluegfgf');
$rgb = Color::random();
var_dump($rgb);