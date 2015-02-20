<?php

$mysqli = new mysqli(
  "localhost",
  "homestead",
  "secret",
  "bootcamp"
);

$mysqli->query("
  INSERT INTO `comments` (`author`, `comment`)
    VALUES ('{$_REQUEST['user']}', '{$_REQUEST['comment']}');
");

// $comments = json_decode(file_get_contents('comments.json'), true);
//
// $newComment = [
//     'author'  => $_REQUEST['user'],
//     'content' => $_REQUEST['comment'],
// ];
//
// $comments[] = $newComment;
//
// file_put_contents('comments.json', json_encode($comments));

header('Location: /');
