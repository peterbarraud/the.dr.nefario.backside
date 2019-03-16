<?php
  class RestfulApp {
    function run(){
      // first remove the leading / at the start of the PATH_INFO server variable
      // credit: https://stackoverflow.com/a/1252710/4672179
      $pos = strpos($_SERVER['PATH_INFO'],'/');
      $clean_path_info = substr_replace($_SERVER['PATH_INFO'], '', $pos, strlen('/'));
      $callback_parts = explode("/",$clean_path_info);
      $callback = $callback_parts[0];
      array_shift($callback_parts);
      call_user_func_array($callback, $callback_parts);
    }
  }
 ?>
