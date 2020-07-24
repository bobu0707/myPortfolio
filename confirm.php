<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ内容 送信確認</title>
    <link rel="stylesheet" type="text/css" href="https://github.com/nobu6326/myPortfolio/blob/master/stylesheet.css">
    <style>
    h3{
        margin-top: 16px;
        margin-bottom: 16px;
        position: relative;
        display: inline-block;
    }
    h3::after{
        position: absolute;
        top: 20px;
        left: 0;
        z-index: -1;
        content: "";
        display: block;
        height: 8px;
        width: 100%;
        background-color: orange;
        transform: rotate(1deg);
    }
    #submut{
        border-color: 1px solid gray;
        border-radius: 5px;
    }
    </style>
</head>
<body>
    
<?php
// データの受け取り
$name = $_POST["name"];
$company = $_POST["company"];
$mailAddress = $_POST["mailAddress"];
$tel = $_POST["tel"];
$category = $_POST["category"];
$comment = $_POST["comment"];

// 危険な文字列を入力された場合に利用しない
$name = htmlspecialchars($name,ENT_QUOTES);
$company = htmlspecialchars($company,ENT_QUOTES);
$mailAddress = htmlspecialchars($mailAddress,ENT_QUOTES);
$tel = htmlspecialchars($tel,ENT_QUOTES);
$category = htmlspecialchars($category,ENT_QUOTES);
$comment = htmlspecialchars($comment,ENT_QUOTES);

// 入力内容の確認
echo '<h3>入力内容を確認します。</h3>';
echo '<dl>';
echo '<dt>【お名前】</dt><dd>'.$name.'</dd>';
echo '<dt>【御社名】</dt><dd>'.$company.'</dd>';
echo '<dt>【メールアドレス】</dt><dd>'.$mailAddress.'</dd>';
echo '<dt>【電話番号】</dt><dd>'.$tel.'</dd>';
echo '<dt>【種類】</dt><dd>'.$category.'</dd>';
echo '<dt>【お問い合わせ内容】</dt><dd>'.nl2br($comment).'</dd>';
echo '</dl>';

// 上記内容で送信するを表示する
echo '<form method="post" action="mailpost.php">';
echo '<input type="hidden" name="name" value="'.$name.'">';
echo '<input type="hidden" name="company" value="'.$company.'">';
echo '<input type="hidden" name="mailaddress" value="'.$mailAddress.'">';
echo '<input type="hidden" name="tel" value="'.$tel.'">';
echo '<input type="hidden" name="category" value="'.$category.'">';
echo '<input type="hidden" name="comment" value="'.$comment.'">';
echo '<input id="submit" type="submit" name="okbtn" value="上記内容で送信する">';
echo '</form>';

?>
</body>
</html>