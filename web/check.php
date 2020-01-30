<?
include("./db.php");

$query = "select * from count order by no asc";
$result = mysqli_query($mysqli, $query);

$query2 = "select * from count order by count desc";
$result2 = mysqli_query($mysqli, $query2);

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="main.css">
<style type="text/css">
body {
  ul{
    list-style:none;
    list-style-type:none;
    } 
  background-image: url('./bg.PNG');
}
</style>
<center>
  <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: white">
     <a class="navbar-brand" href="#">JYP</a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="./index.php" style="color: black;">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./check.php">통계 보기<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
  </nav>


<div style="border: 1px solid black; float: left; width: 22%;"></div>

<div style="border: 1px solid black; float: left; width: 10%; margin-top: 120px;">

    <table style="table; float: right;">
      <tr>
        <td>순위</td>
      </tr>
      <?php
      while($row = mysqli_fetch_row($result))
      {
        ?>
        <tr>
          <td width="50"><?=$row[2]?></td>
        </tr>
        <?
      }
      ?>
    </table>
    </div>

    <div style="border: 1px solid black; float: left; width: 40%; margin-top: 120px;">
    <table style="table; float: left;">
      <tr>
        <td>host</td>
        <td>count</td>
      </tr>
      <?php
      while($row2 = mysqli_fetch_row($result2))
      {
        ?>
        <tr>
          <td width="400"><?=$row2[0]?></td>
          <td width="200"><?=$row2[1]?></td>
        </tr>
        <?
      }
      ?>
    </table>
    </div>

<div style="border: 1px solid black; float: left; width: 25%;"></div>


  </body>
</center>
</html>
