<?php
  class RestfulApp {
    function run(){
      // first remove the leading / at the start of the PATH_INFO server variable
      // credit: https://stackoverflow.com/a/1252710/4672179
      $pos = strpos($_SERVER['PATH_INFO'],'/');
      $clean_path_info = substr_replace($_SERVER['PATH_INFO'], '', $pos, strlen('/'));
      // split the path into its pieces
      $callback_parts = explode("/",$clean_path_info);
      // the first piece is the rest call
      $callback = $callback_parts[0];
      // remove that off the array and what we're left with is the parameters
      array_shift($callback_parts);
      // just to keep things nice 'n graceful, let's make sure that the rest call is accounted for
      if (is_callable($callback)){
        call_user_func_array($callback, $callback_parts);
      } else {
        echo "<div style='background-color:#9baedd;color:#723014;font-size:30px;padding:20px;border:5px solid #723014;'>Error: We don't have any such RestFUL API. Please try something else or let us know.</div>";
      }      
    }
  }
 ?>
