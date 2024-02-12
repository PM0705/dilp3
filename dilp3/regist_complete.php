<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");
$param = "-fadmin@www.pkstore77.shop";
$email = 'admin@www.pkstore77.shop'; //送り先の受信名アドレス
$subject = "これはテスト"; // 題名 
$to = "information@diworks.co.jp"; //送り先
$header = "From: $email\nReply-To: $email\n"; //nは改行で.は結合
$body = "以下の通りに会員登録がありました。" . "\n" . "\n" .
    "御社名｜" . $_POST["family_name"] . "\n" .
    "御社名（フリガナ）｜" . $_POST["last_name"] . "\n" .
    "担当者氏名｜" . $_POST["family_name_kana"] . "\n" .
    "担当者氏名（フリガナ）｜" . $_POST["last_name_kana"] . "\n" .
    "電話番号｜" . $_POST["tel1"] . "-" . $_POST["tel2"] . "-" . $_POST["tel3"] . "\n" .
    "メールアドレス｜" . $_POST["mail"] . "\n" .
    "都道府県｜" . $_POST["prefecture"] . "\n" .
    "住所｜" . $_POST["address"] . "\n" .
    "ご相談内容｜" . $_POST["workday"] . "\n" .
    "内容｜" . $_POST["comments"] . "\n" .
    "------------------------------------------" . "\n" .
    "このメールはDIWorksLPの申し込みテスト用です" . "\n" .
    "------------------------------------------" . "\n" .
    "このメールへの返信はできませんのでご了承ください。";


if (mb_send_mail($to, $subject, $body, $header, $param)) {
    $message = '登録が完了しました。' . "\n" . '担当者からの連絡をお待ちください。';
} else {
    $message = "エラーが発生したため登録できません。" . "\n" .
        "お手数ですが再度登録していただくか、お急ぎの方は03-6258-0901までご連絡ください。";
}
?>

<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録フォーム</title>
    <link rel="icon" href="img/favicon.ico" id="favicon">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@700;900&family=M+PLUS+1p:wght@400;700&family=Montserrat:wght@600&family=Noto+Sans+JP:wght@200;500;700&family=Zen+Kaku+Gothic+New:wght@400;700&family=Zen+Maru+Gothic:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="htmlstyle.css">
</head>

<body>

    <div class="wrapper">
        <main class="regist">
            <div class="confirm">
                <h3>登録フォーム</h3>
                <!-- 今のページの場所 -->
                <div class="uistep">
                    <ol>
                        <li class="is-done"><span class="label">入力</span></li>
                        <li class="is-done"><span class="label">確認</span></li>
                        <li aria-current="step"><em class="label">完了</em></li>
                    </ol>
                    <!-- /.uistep -->
                </div>
                <div class="completemsg"><?php echo nl2br(htmlspecialchars($message));; ?></div>
                <div class="completebtn">
                    <a href="index.php" class="btn btn--orange btn--radius submit ">TOPへ戻る</a>
                </div>
            </div>
        </main>

    </div>

</body>

</html>