<?php
   $user ='jobtest1';
   $pass ='sakiyama0910';
 
   try{
     $dbh = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', $user,$pass);
     $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
   } catch(PDOException $e){
     echo '接続エラー' . $e->getMessage();
   }
  $sql ="DELETE FROM job WHERE id=:id";
  $stmt =$dbh->prepare($sql);
  $stmt ->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
  $stmt->execute();
  if($sql){
    echo '削除しました';
  }
  $dbh =null;
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>新規登録結果</title>
  </head>
  <body><a href="main.php">戻る</a></body>
</html>
