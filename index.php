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
        $a = [rand(0,255),rand(0,255),rand(0,255)];
        $rgb = $a[rand(0,2)];
        return new $rgb;
    }
    public function mix(string $color,int $value)
    {
        if ($color === 'red'){
            $mixRed = ($this->red + $value)/2;
            return new $mixRed;
        }elseif ($color === 'green'){
            $mixGreen = ($this->green + $value)/2;
            return new $mixGreen;
        }elseif ($color === 'blue'){
            $mixGreen = ($this->blue + $value)/2;
            return new $mixGreen;
        }else{
            echo 'Нет такого цвета';
        }
    }
}
$new = new Color(260, 10, 50);
echo $new->getGreen().PHP_EOL;
echo $new->equals('bluegfgf');
echo false;