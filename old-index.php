<?php
$mysqli = new mysqli(
  "localhost",
  "homestead",
  "secret",
  "bootcamp"
);
$result = $mysqli->query("SELECT * FROM comments;");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Comments app</h1>
    <form action="saveComment.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" class="form-control" placeholder="Your Name" name="user">
      <label for="comment">Comment:</label>
      <textarea class="form-control" id="comment" name="comment" placeholder="Your comment goes here..."></textarea>
      <br/>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <hr/>
    <?php
      while($comment = $result->fetch_assoc()) {
        echo '<div class="well">';
        echo 'Author: ' . $comment['author'] . '<br>';
        echo 'Comment: ' . $comment['comment'] . '<br>';
        echo '</div>';
      }
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
