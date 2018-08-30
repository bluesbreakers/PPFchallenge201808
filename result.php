
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>入力フォーム</title>
</head>
<body>
<h1>御神籤<br></h1>
<?php
if(isset($_GET['comment'])){
$comment = $_GET['comment'];
echo $comment;
}
echo " 殿の本日の運勢は...<br/>";
echo "<br/>";
$arr = array("「めっちゃ大吉」","「やや大吉」","「それなりに大吉」",
"「だいたい中吉」","「どっちかといえば中吉」","「けっこう小吉」","「まぁまぁ吉」","「やっぱり凶」");
echo $arr[array_rand($arr)];
echo "<br/>";
echo "<br/>";
echo "にて御座候！！！<br/>";
echo "<br/>";
echo "<a href='form.html'>再試行</a>";
?>

</form>
</body>
</html>