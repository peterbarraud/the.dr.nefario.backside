<?php
  require 'chotarest/app.php';
  $restapp = new RestfulApp();
  $restapp->run();

  function testrest($param) {
    echo json_encode($param);
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
