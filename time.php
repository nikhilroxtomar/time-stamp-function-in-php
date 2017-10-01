<?php

function timestamp($given_time){
  $current_time = time();

  if($current_time >= $given_time){
    $time_diff = $current_time - $given_time;
    $seconds = $time_diff;
    $minutes = round($time_diff / 60);
    $hours = round($time_diff / (60*60));
    $days = round($time_diff / (60*60*24));
    $weeks   = round($time_diff / (60*60*24*7));
    $months = round($time_diff / (60*60*24*30));
    $years = round($time_diff / (60*60*24*30*12));

    if($seconds <= 60){
      $ret = $seconds . ' seconds ago';
    }else if($minutes <= 60){
      $ret = $minutes . ' minutes ago';
    }else if($hours <= 24){
      $ret = $hours . ' hours ago';
    }else if($days <= 7){
      $ret = $days . ' days ago';
    }else if($weeks <= 4){
      $ret = $weeks . ' weeks ago';
    }else if($months <= 12){
      $ret = $months . ' months ago';
    }else{
      $ret = $years . ' years ago';
    }

    return $ret;

  }else{
    return 'Given time is greater than the current time.';
  }
}

?>
