<?php
  require( "library/sso/Authentication.php" );
  if ( session_status() === PHP_SESSION_NONE ){ session_start(); }
  
  if( isset( $_SESSION['AuthHandler'] ) ){
    
    $AuthHandler = unserialize( $_SESSION['AuthHandler'] );
    
  }else{
  
    $http = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) ? 'https://' : 'http://';
    $AuthHandler = new Authentication( $http.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'] );
    
  }
  if( $AuthHandler->shouldCheckLogin() ){
    
    $AuthHandler->checkLogin();
    
  }
  if( !$AuthHandler->isLoggedIn() ){
    
    $_SESSION["AuthHandler"] = serialize( $AuthHandler );
    $AuthHandler->Login();
    
  }
?>