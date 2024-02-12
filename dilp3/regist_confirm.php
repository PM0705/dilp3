<?php
session_start();
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
    <link rel="stylesheet" type="text/css" href="css/6-1-7.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@700;900&family=M+PLUS+1p:wght@400;700&family=Montserrat:wght@600&family=Noto+Sans+JP:wght@200;500;700&family=Zen+Kaku+Gothic+New:wght@400;700&family=Zen+Maru+Gothic:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="htmlstyle.css">
</head>

<body>
    <div class="wrapper">
        <main class="regist">
            <div class="confirm form">
                <h3>登録フォーム</h3>
                <!-- 今のページの場所 -->
                <div class="uistep">
                    <ol>
                        <li class="is-done"><span class="label">入力</span></li>
                        <li aria-current="step"><em class="label">確認</em></li>
                        <li><span class="label">完了</span></li>
                    </ol>
                    <!-- /.uistep -->
                </div>
                <p class="confirm-text">こちらの内容でお間違いなければ送信するボタンを押してください。</p>
                <table>
                    <tbody>
                        <tr>
                            <th>
                                <span>御社名</span>
                            </th>
                            <td>
                                <div class="textfield">
                                    <p><?php
                                        echo   $_POST["family_name"] . ":&nbsp;" . $_POST["last_name"];
                                        ?>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span>ご担当者様名</span>
                            </th>
                            <td>
                                <div class="textfield">
                                    <p><?php
                                        echo   $_POST["family_name_kana"] . ":&nbsp;" . $_POST["last_name_kana"];
                                        ?>
                                    </p>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span>電話番号</span>
                            </th>
                            <td>
                                <div class="textfield">
                                    <p><?php
                                        echo $_POST['tel1'] . "-" . $_POST['tel2'] . "- " . $_POST['tel3'];
                                        ?>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span>メールアドレス</span>
                            </th>
                            <td>
                                <div class="textfield">
                                    <p><?php
                                        echo $_POST['mail'];
                                        ?>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <th>
                                <span>ご住所</span>
                            </th>
                            <td>
                                <div class="textfield">
                                    <p><?php
                                        echo $_POST["prefecture"];
                                        echo $_POST["address"];
                                        ?>
                                    </p>
                                </div>
                            </td>
                        </tr>

                        <th>
                            <span>ご相談内容</span>
                        </th>
                        <td>
                            <div class="textfield">
                                <p><?php
                                    echo $_POST["workday"];
                                    ?>
                                </p>
                            </div>
                        </td>
                        </tr>
                        <tr>
                            <th>
                                <span>内容</span>
                            </th>
                            <td>
                                <div class="textfield">
                                    <p><?php
                                        echo $_POST['comments'];
                                        ?>
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="bottombtn">
                    <form action="regist.php" method="post" class="bottombtn-position">
                        <input type="submit" class="btn btn--blue position btn--radius" value="前に戻る" onclick="window.history.back()">
                        <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                        <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                        <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                        <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                        <input type="hidden" value="<?php echo $_POST['tel1']; ?>" name="tel1">
                        <input type="hidden" value="<?php echo $_POST['tel2']; ?>" name="tel2">
                        <input type="hidden" value="<?php echo $_POST['tel3']; ?>" name="tel3">
                        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                        <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                        <input type="hidden" value="<?php echo $_POST['address']; ?>" name="address">
                        <input type="hidden" value="<?php echo $_POST['workday']; ?>" name="workday">
                        <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                    </form>

                    <form action="regist_complete.php" method="post" class="bottombtn-position">
                        <input type="submit" class="btn btn--orange position btn--radius submit" value="送信する" onclick="window.history.back()">
                        <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                        <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                        <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                        <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                        <input type="hidden" value="<?php echo $_POST['tel1']; ?>" name="tel1">
                        <input type="hidden" value="<?php echo $_POST['tel2']; ?>" name="tel2">
                        <input type="hidden" value="<?php echo $_POST['tel3']; ?>" name="tel3">
                        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                        <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                        <input type="hidden" value="<?php echo $_POST['address']; ?>" name="address">
                        <input type="hidden" value="<?php echo $_POST['workday']; ?>" name="workday">
                        <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">

                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>