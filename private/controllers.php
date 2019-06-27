<?php

function historypage(){
    $content = get_all_content();
    include __DIR__ . '/views/historypage.php';
  }

  function homepage(){
    $plantjes = get_latest_plants();
    include __DIR__ . '/views/homepage.php';
  }

  function contactpage(){
    $history = get_all_contact();
    include __DIR__ . '/views/contactpage.php';
  }
  function searchpage(){
    $history = get_all_search();
    include __DIR__ . '/views/searchpage.php';
  }

  function video(){
    $videos = get_all_video();
    include __DIR__ . '/views/video.php';
  }

  function login(){
    $history = get_all_login();
    include __DIR__ . '/views/login.php';
  }

  function signup(){
    $history = get_all_signup();
    include __DIR__ . '/views/signup.php';
  }

?>
