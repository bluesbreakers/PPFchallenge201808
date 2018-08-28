<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>入力フォーム</title>
</head>
<body>
<h1>たばさメーカー<br></h1>
<?php
if(isset($_GET['comment'])){
$comment = $_GET['comment'];
echo $comment;
}
echo "たばさ！<br/>";
echo "<br/>";
echo "<a href='form.php'>診断へ戻る</a>";
?>

</form>
</body>
</html>