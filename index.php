<?php
include_once('time.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Time Stamp Function in PHP </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <style>
  .form{
    width: 350px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
  }
  input[type="text"]{
    border:1px solid #ccc;
    padding: 5px 15px;
  }
  input[type="submit"]{
    background: #333;
    color: #fff;
    border:1px solid #333;
    padding: 5px 15px;
    cursor: pointer;
  }
  .alert{
    background: #f2f2f2;
    border:1px solid #ccc;
    border-radius:5px;
    padding: 10px;
    color: #333;
  }
  </style>
</head>

<body>

<div align="left" class="form">
<h2>Time Stamp Function in PHP</h2>
Current Time Stamp - <?php echo time(); ?><br/>
1 October 2017 - <?php echo strtotime('10/1/2017')?><br/>
23 September 2017 - <?php echo strtotime('9/23/2017')?><br/>
1 September 2017 - <?php echo strtotime('9/1/2017')?><br/>
1 January 2017 - <?php echo strtotime('1/1/2017')?><br/>
1 January 2010 - <?php echo strtotime('1/1/2010')?><br/>
<br/>
<b>NOTE</b>: If you leave the input parameter empty, then current timestamp will be taken by default.
<br/><br/>
<form action="index.php" method="POST">
<label for="time">Enter Date: </label><br/>
<input type="text" name="time" placeholder="Enter UNIX Time Stamp"><br/>
<input type="submit" value="SUBMIT">
</form>

<p>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $time = $_POST['time'];
    if($time == ''){
      $time = time();
    }
    $val = timestamp($time);
    echo '<div class="alert">' . $val . '</div>';
  }
?>
</p>
</div>

</body>
