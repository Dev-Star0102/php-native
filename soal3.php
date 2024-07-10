<?php

class dragonBall{
private $ballCount;

public function __construct(){
$this->ballCount=0;
}

public function iFoundaBall(){
$this->ballCount++;
if($this->ballCount===7){
echo "You can ask for your wish.";
$this->ballCount=0;
}
}
}
?>
