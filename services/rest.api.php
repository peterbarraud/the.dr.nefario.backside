<?php
  require 'chotarest/app.php';
  $restapp = new RestfulApp();
  $restapp->run();

  function validateuser($username, $password){
    $getsomeback = file_put_contents('validateuser.log', $username . "\n");
    file_put_contents('validateuser.log', $password, FILE_APPEND);
    echo "all done" . $getsomeback;
  }

 ?>
