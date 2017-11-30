<?php

/**
 *
 */
class math
{
  protected $getallen;
  protected $answer;
  protected $sum;

  function getgetallen() {
    return $this->getallen;
  }
}

class plus extends math
{
  protected $getallen = array(1, 2, 3);

    function plus() {
      return array_sum($this->getgetallen());
    }
}

class multiply extends math
{
  protected $getallen = array(1, 2, 3);

    function multiply() {
      return 
    }
}

$plus = new plus();
echo $plus->plus();

$multiply = new multiply();
echo $multiply->multiply();
?>
