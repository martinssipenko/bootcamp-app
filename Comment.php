<?php

class Comment
{
    private $author;
    private $text;

    public function __construct($name, $comment)
    {
        $this->author = $name;
        $this->text   = $comment;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}

$comment = new Comment('John', 'Hello');
$comment2 = new Comment('Jane', 'World');

var_dump($comment->getAuthor());
// $comment2->author = 'Jane';





var_dump($comment, $comment2);
