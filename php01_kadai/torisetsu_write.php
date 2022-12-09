<?php


// 時間の変数を用意
$time = date('Y-m-d H:i') ;


// Inputファイルより受け取り
$forMyColleague01 = $_POST['forMyColleague01'] ;
$forMyColleague02 = $_POST['forMyColleague02'] ;
$forMyColleague03 = $_POST['forMyColleague03'] ;    
$forMyColleague04 = $_POST['forMyColleague04'] ;
$forMyColleague05 = $_POST['forMyColleague05'] ;
$forMyColleague06 = $_POST['forMyColleague06'] ;
$forMyColleague07 = $_POST['forMyColleague07'] ;
$forMyColleague08 = $_POST['forMyColleague08'] ;
$forMyColleague09 = $_POST['forMyColleague09'] ;
$forMyColleague10 = $_POST['forMyColleague10'] ;

$forMyBoss01 = $_POST['forMyBoss01'] ;
$forMyBoss02 = $_POST['forMyBoss02'] ;
$forMyBoss03 = $_POST['forMyBoss03'] ;
$forMyBoss04 = $_POST['forMyBoss04'] ;
$forMyBoss05 = $_POST['forMyBoss05'] ;
$forMyBoss06 = $_POST['forMyBoss06'] ;
$forMyBoss07 = $_POST['forMyBoss07'] ;
$forMyBoss08 = $_POST['forMyBoss08'] ;
$forMyBoss09 = $_POST['forMyBoss09'] ;
$forMyBoss10 = $_POST['forMyBoss10'] ;

$forMyTeam01 = $_POST['forMyTeam01'] ;
$forMyTeam02 = $_POST['forMyTeam02'] ;
$forMyTeam03 = $_POST['forMyTeam03'] ;
$forMyTeam04 = $_POST['forMyTeam04'] ;
$forMyTeam05 = $_POST['forMyTeam05'] ;
$forMyTeam06 = $_POST['forMyTeam06'] ;
$forMyTeam07 = $_POST['forMyTeam07'] ;
$forMyTeam08 = $_POST['forMyTeam08'] ;
$forMyTeam09 = $_POST['forMyTeam09'] ;
$forMyTeam10 = $_POST['forMyTeam10'] ;


// 書き込み内容をカンマ区切りでCSV化
$str = $time . ',' . $forMyColleague01 . ',' . $forMyColleague02 . ',' . $forMyColleague03 . ',' . $forMyColleague04 . ',' . $forMyColleague05 . ',' . $forMyColleague06 . ',' . $forMyColleague07 . ',' . $forMyColleague08 . ',' . $forMyColleague09 . ',' . $forMyColleague10 . ',' . $forMyBoss01 . ',' . $forMyBoss02 . ',' . $forMyBoss03 . ',' . $forMyBoss04 . ',' . $forMyBoss05 . ',' . $forMyBoss06 . ',' . $forMyBoss07 . ',' . $forMyBoss08 . ',' . $forMyBoss09 . ',' . $forMyBoss10 . ',' . $forMyTeam01 . ',' . $forMyTeam02 . ',' . $forMyTeam03 . ',' . $forMyTeam04 . ',' . $forMyTeam05 . ',' . $forMyTeam06 . ',' . $forMyTeam07 . ',' . $forMyTeam08 . ',' . $forMyTeam09 . ',' . $forMyTeam10;

    
// ファイルに書き込み →  1 開く  2 書く  3 閉じる

$file = fopen('data/torisetsu_data.txt','w');  // 1 開く

fwrite($file, $str."\n");           // 2 書く

fclose($file);                       // 3 閉じる



?>




<html>

<head>
    <meta charset="utf-8">
    <title>回答データの書き込み完了</title>
</head>

<body>

    <h1>回答データを書き込みしました。</h1>
    <h2>回答内容を確認しましょう！</h2>

    <ul>
        <li><a href="torisetsu_read.php">確認する</a></li>
        <li><a href="torisetsu_input.php">戻る</a></li>
    </ul>
</body>

</html>
