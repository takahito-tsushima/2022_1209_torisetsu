<?php

// #1 ファイルの読み込み
$openFile = fopen('./data/torisetsu_data.txt', 'r');


//【1】
// #2 テーブルのHTMLを生成

echo "<h1>私のトリセツ（あなたを伝える10の質問）/ 10 Magic Questions!</h1>";


while($str = fgetcsv($openFile)) {
    echo "<p>回答日時</p>";
    echo "<p>" . $str[0] . "</p>";


    echo "<h2>【1】チームの皆さんへ / for My Colleague</h2>
    <table>
    <tr>
    <th>1.初対面は？</th>
    <th>2.誰かに話しかけられるのは？</th>
    <th>3.自分から話しかけるのは？</th>
    <th>4.誰かに教わるのは？</th>
    <th>5.自分が教えるのは？</th>
    <th>6.自分が仕事で困ったら？</th>
    <th>7.誰かが仕事で困ったら？</th>
    <th>8.ランチの誘いは？</th>
    <th>9.飲み会の誘いは？</th>
    <th>10.プライベートの話は？</th>
    </tr>";

    echo "<tr>";    
    for ($i=1;$i<11;$i++) {
    // for ($i=0;$i<count($str1);$i++) {   
        echo "<td>" . $str[$i] . "</td>";
    }
    echo "</tr></table>";


    echo "<h2>【2】上司の方へ / for My Boss</h2>
    <table>
    <tr>
    <th>1.仕事の内容は？</th>
    <th>2.仕事のペースは？</th>
    <th>3.仕事の進め方は？</th>
    <th>4.指示の頻度は？</th>
    <th>5.指示の細かさは？</th>
    <th>6.指示の伝え方は？</th>
    <th>7.報告・連絡・相談は？</th>
    <th>8.困ったときには？</th>
    <th>9.誤りや失敗は？</th>
    <th>10.大きな成功は？</th>
    </tr>";

    echo "<tr>";    
    for ($i=11;$i<21;$i++) {
    // for ($i=0;$i<count($str1);$i++) {   
        echo "<td>" . $str[$i] . "</td>";
    }
    echo "</tr></table>";


    echo "<h2>【3】部下の皆さんへ / for My Team</h2>
    <table>
    <tr>
    <th>1.仕事の内容は？</th>
    <th>2.仕事のペースは？</th>
    <th>3.仕事の進め方は？</th>
    <th>4.報告や相談の頻度は？</th>
    <th>5.報告や相談の細かさは？</th>
    <th>6.報告や相談の伝え方は？</th>
    <th>7.業務の指示は？</th>
    <th>8.困ったときには？</th>
    <th>9.不安や不満は？</th>
    <th>10.うれしいことは？</th>
    </tr>";

    echo "<tr>";    
    for ($i=21;$i<31;$i++) {
    // for ($i=0;$i<count($str1);$i++) {   
        echo "<td>" . $str[$i] . "</td>";
    }
    echo "</tr></table>";

}






// //【1】
// // #2 テーブルのHTMLを生成

// echo "<h2>【1】チームの皆さんへ</h2>
// <table>
// <tr>
// <th>1.初対面は？</th>
// <th>2.誰かに話しかけられるのは？</th>
// <th>3.自分から話しかけるのは？</th>
// <th>4.誰かに教わるのは？</th>
// <th>5.自分が教えるのは？</th>
// <th>6.自分が仕事で困ったら？</th>
// <th>7.誰かが仕事で困ったら？</th>
// <th>8.ランチの誘いは？</th>
// <th>9.飲み会の誘いは？</th>
// <th>10.プライベートの話は？</th>
// </tr>";

// // #3 csvデータを配列に変換し、HTMLに埋め込み
// while($str = fgetcsv($openFile)) {
//     echo "<tr>";
//     for ($i=1;$i<11;$i++) {
//     // for ($i=0;$i<count($str1);$i++) {   
//         echo "<td>" . $str[$i] . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";



// //【2】
// // #2 テーブルのHTMLを生成

// echo "<h2>【1】チームの皆さんへ</h2>
// <table>
// <tr>
// <th>1.初対面は？</th>
// <th>2.誰かに話しかけられるのは？</th>
// <th>3.自分から話しかけるのは？</th>
// <th>4.誰かに教わるのは？</th>
// <th>5.自分が教えるのは？</th>
// <th>6.自分が仕事で困ったら？</th>
// <th>7.誰かが仕事で困ったら？</th>
// <th>8.ランチの誘いは？</th>
// <th>9.飲み会の誘いは？</th>
// <th>10.プライベートの話は？</th>
// </tr>";

// // #3 csvデータを配列に変換し、HTMLに埋め込み
// while($str = fgetcsv($openFile)) {
//     echo "<tr>";
//     for ($i=11;$i<21;$i++) {   
//     // for ($i=0;$i<count($str2);$i++) {   
//         echo "<td>" . $str[$i] . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";



// //【3】
// // #2 テーブルのHTMLを生成

// echo "<h2>【1】チームの皆さんへ</h2>
// <table>
// <tr>
// <th>1.初対面は？</th>
// <th>2.誰かに話しかけられるのは？</th>
// <th>3.自分から話しかけるのは？</th>
// <th>4.誰かに教わるのは？</th>
// <th>5.自分が教えるのは？</th>
// <th>6.自分が仕事で困ったら？</th>
// <th>7.誰かが仕事で困ったら？</th>
// <th>8.ランチの誘いは？</th>
// <th>9.飲み会の誘いは？</th>
// <th>10.プライベートの話は？</th>
// </tr>";


// // #3 csvデータを配列に変換し、HTMLに埋め込み
// while($str = fgetcsv($openFile)) {
//     echo "<tr>";
//     for ($i=21;$i<31;$i++) {
//     // for ($i=0;$i<count($str3);$i++) {   

//         echo "<td>" . $str[$i] . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";




// #4 ファイルを閉じる
fclose($openFile);
?>