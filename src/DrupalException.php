<?php

namespace DrupalException;

use Exception;

class DrupalException extends Exception{
  public $_data;
  
  public function __construct($message = "", $code = 0, $data = null, $previous = null){
    $this->setData($data);
    parent::__construct($message, $code, $previous);
  }
  
  public function setData($data){
    $this->_data = $data;
  }
  
  public function getData(){
    return $this->_data;
  }
}


