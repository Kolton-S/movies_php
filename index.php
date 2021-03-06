<?php
  // ini_set('display_errors', 1);
  // error_reporting(E_ALL);

  require_once("admin/phpscripts/config.php");
  $tbl = "tbl_movies";
  $getMovies = getAll($tbl);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to the Finest Selection of Blu-rays on the internets!</title>
</head>
<body>
  <?php
  include('includes/nav.html');

  if(!is_string($getMovies)){
      while($row = mysqli_fetch_array($getMovies)){
        echo "<img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\">
        <h2>{$row['movies_title']}</h2>
        <p>{$row['movies_year']}</p>
        <a href=\"details.php?id={$row['movies_id']}\">More Details</a>
        <br><br>
        ";
      }
  }else{
    echo "<p class=\"error\">{$getMovies}</p>";
  };

  include('includes/footer.html');
  ?>
</body>
</html>
