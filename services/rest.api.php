<?php
  require 'chotarest/app.php';
  $restapp = new RestfulApp();
  $restapp->run();

  function testrest($param){
    echo "<div style='background-color:#9baedd;color:#723014;font-size:30px;padding:20px;border:5px solid #723014;'>If you called the <code>testrest</code> API and passed <code>" . $param . "</code> as the parameter, then your <b>Rest server</b> is set up good!</div>";
  }
  function validateuser($username, $password){
    require_once('objectlayer/appusercollection.php');
    $filter = array('username' => $username, 'password' => $password);
    $users = new appusercollection($filter);
    echo json_encode($users);
  }

  function getappuserbyid($id) {
    require_once('objectlayer/appuser.php');
    $user = new appuser($id);
    echo json_encode($user);
  }


 ?>
