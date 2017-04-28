<?php

class Hashing
{
  
  public static function make($value)
  {
  	return password_hash($value, PASSWORD_DEFAULT);
  }

  public static function compare($value, $hashValue)
  {
  	return password_verify($value, $hashValue);
  }

}