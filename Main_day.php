<?php
  date_default_timezone_set('Asia/Tokyo');
  if(isset($_GET['Ymd'])){
    $ymd = $_GET['Ymd'];   
  }else{
    $ymd =date('Y-m');
  }

  $timestamp = strtotime($ymd.'-01');
  if($timestamp === false){
    $ymd = date('Y-m');
    $timestamp = strtotime($ymd.'-01');
  }
  $today = date('Y-m-d');

  $html_title = date('Y月n月d日',$timestamp);

  $prev =date('Y-m-d',mktime(0,0,0,date('m',$timestamp),date('d',$timestamp)-1,date('Y',$timestamp)));
  $next =date('Y-m-d',mktime(0,0,0,date('m',$timestamp),date('d',$timestamp)+1,date('Y',$timestamp)));

  $days = [];
  $day ='';

  $day='<td></td><td>'.$html_title.'</td>';
  $days[] ='<tr>'.$day.'</tr>';
  for($hour=1;$hour<24;$hour++){
    $day ='<td>'.$hour.':00～'.($hour+1).':00</td><td></td>';
    $days[]='<tr>'.$day.'</tr>';
  }
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>カレンダー仕事管理表トップ</title>
  </head>
  <body>
    <div class ="container">
      <h3><a href="?ymd=<?php echo $prev; ?>">&lt;</a><?php echo $html_title; ?><a href="?ymd=<?php echo $next ; ?>">&gt;</a></h3>
     <p class="new"> <a href="new.html">新規登録</a></p>
     <table  border="1">
        <?php
          foreach($days as $day){
            echo $day;
          }
        ?>
      </table>
    </div>
  </body>
</html>
