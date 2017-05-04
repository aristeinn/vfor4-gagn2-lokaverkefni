<?php
class Session
{
  
  public static function write($key, $value)
  {
    if ( !is_string($key) )
      throw new InvalidArgumentTypeException('Session key must be string value');
    // self::_init();
    $_SESSION[$key] = $value;
    
    return $value;
  }
  
  public static function read($key)
  {
    if ( !is_string($key) )
      throw new InvalidArgumentTypeException('Session key has to be string');
    
    // self::_init();
    
    if(isset($_SESSION[$key]))
    {
      return $_SESSION[$key];
    }
    return false;
  }
  
  public static function delete($key)
  {
    if ( !is_string($key) )
      throw new InvalidArgumentTypeException('Session key must be string value');
    // self::_init();
    unset($_SESSION[$key]);
  }

  public static function get($key)
  {
    if( !is_string($key) )
    {
      throw new Exception("session key must be a string");
    }

    if (isset($_SESSION[$key])) 
    {
      return $_SESSION[$key];
    }
    else
    {
      return false;
    }
  }
  
  public static function start()
  {
    return self::_init();
  }
  public static function _init()
  {
    session_start();
  }
}