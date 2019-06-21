<?php

function get_latest_plants() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud` WHERE `video` = ""';
    $statement = $pdo->query( $query );

    return $statement;

 }

 function get_all_content() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud` WHERE `video`=""';
    $statement = $pdo->query( $query );

    return $statement;

 }

 function get_all_contact() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud`';
    $statement = $pdo->query( $query );

    return $statement;

 }

 function get_all_search() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud`';
    $statement = $pdo->query( $query );

    return $statement;

 }
 function get_all_video() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud` WHERE `video` NOT LIKE ""';
    $statement = $pdo->query( $query );

    return $statement;

 }
 function get_all_login() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud`';
    $statement = $pdo->query( $query );

    return $statement;

 }
 function get_all_signup() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud`';
    $statement = $pdo->query( $query );

    return $statement;

 }
?>
