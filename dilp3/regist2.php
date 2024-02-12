<?php

include 'vars.php';
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録フォーム</title>
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
            <!-- フォームSP用 -->
            <form method="post" action="regist_confirm.php" name="form">
                <h3>登録フォーム</h3>
                <!-- 今のページの場所 -->
                <div class="uistep">
                    <ol>
                        <li aria-current="step"><em class="label">入力</em></li>
                        <li><span class="label">確認</span></li>
                        <li><span class="label">完了</span></li>
                    </ol>
                    <!-- /.uistep -->
                </div>
                <table>
                    <tbody>
                        <tr>
                            <th>
                                <span>御社名</span>
                                <span class="required">必須</span>
                            </th>
                            <td>
                                <div class="textfield">
                                    <div>
                                        <p>御社名</p>
                                        <input type="text" class="form-control family_name" placeholder="D.I.Works" name="family_name" id="family_name" maxlength="10" value="<?= getPostValue('family_name') ?>">
                                        <span class="err-msg-family_name"></span>
                                    </div>
                                    <div>
                                        <p>フリガナ</p>
                                        <input type="text" class="form-control last_name" name="last_name" pattern="^[\u30A0-\u30FF]+$" placeholder="ディー・アイワークス" title="全角カタカナのみでご入力ください" id="last_name" maxlength="10" value="<?= getPostValue('last_name') ?>">
                                        <span class="err-msg-last_name"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span>
                                    ご担当者様名</span>
                                <span class="required">必須</span>
                            </th>
                            <td>
                                <div class="textfield">
                                    <div>
                                        <p>ご担当者様名</p>
                                        <input type="text" class="form-control family_name_kana" placeholder="台場花子" name="family_name_kana" id="family_name_kana" maxlength="10" value="<?= getPostValue('family_name_kana') ?>">
                                        <span class="err-msg-family_name_kana"></span>
                                    </div>
                                    <div>
                                        <p>フリガナ</p>
                                        <input type="text" class="form-control last_name_kana" pattern="^[\u30A0-\u30FF]+$" title="全角カタカナのみでご入力ください" placeholder="ダイバハナコ" name="last_name_kana" id="last_name_kana" maxlength="10" value="<?= getPostValue('last_name_kana') ?>">
                                        <span class="err-msg-last_name_kana"></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span>電話番号</span>
                                <span class="required">必須</span>
                            </th>
                            <td>

                                <div class="textfield telfield">
                                    <input type="text" class="form-control tel" placeholder="080" size="10" name="tel1" id="tel" size="15" pattern="^\d{1,4}" value="<?= getPostValue('tel1') ?>" title="070,080,090,市外局番でご入力ください">
                                    <p>ー</p>
                                    <input type="text" class="form-control tel2" placeholder="1234" size="10" name="tel2" id="tel" size="15" pattern="\d{1,4}" value="<?= getPostValue('tel2') ?>" title="半角数字4桁以内でご入力ください">
                                    <p>ー</p>
                                    <input type="text" class="form-control tel3" placeholder="5678" size="10" name="tel3" id="tel" size="15" pattern="\d{1,4})$" value="<?= getPostValue('tel3') ?>" title="半角数字4桁以内でご入力ください">
                                </div>
                                <span class="err-msg-tel"></span>
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th>
                                <span>メールアドレス</span>
                                <span class="required">必須</span>
                            </th>
                            <td>
                                <div class="textfield">
                                    <input type="text" class="form-control mail" placeholder="example@works.jp" name="mail" id="mail" maxlength="100" size="45" title="@や[.]の入力漏れがないかご確認ください" pattern="^[a-zA-Z0-9\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-]+$" value="<?= getPostValue('mail') ?>">
                                </div>
                                <span class="err-msg-mail"></span>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <span>ご住所</span>
                                <span class="required">必須</span>
                            </th>
                            <td>
                                <div class="textfield prefecturefield">
                                    <div>
                                        <p>都道府県</p>
                                        <select name="prefecture" id="prefecture" class="form-select prefecture">

                                            <?php

                                            $prefs = array(
                                                '北海道', '青森県', '岩手県', '宮城県', '秋田県', '山形県',
                                                '福島県', '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県',
                                                '東京都', '神奈川県', '山梨県', '新潟県', '富山県', '石川県',
                                                '福井県', '長野県', '岐阜県', '静岡県', '愛知県', '三重県',
                                                '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県',
                                                '鳥取県', '島根県', '岡山県', '広島県', '山口県', '徳島県',
                                                '香川県', '愛媛県', '高知県', '福岡県', '佐賀県', '長崎県',
                                                '熊本県', '大分県', '宮崎県', '鹿児島県', '沖縄県'
                                            );
                                            if (!empty($_POST["prefecture"])) : ?>


                                                <option value='<?= $_POST["prefecture"] ?>' selected><?php echo $_POST["prefecture"] ?></option>
                                                <?php

                                                foreach ($prefs as $pref) {


                                                    print('<option value="' . $pref . '">' . $pref . '</option>');
                                                }
                                                ?>

                                            <?php else : ?>
                                                <?php

                                                print('<option value=""></option>');
                                                foreach ($prefs as $pref) {


                                                    print('<option value="' . $pref . '">' . $pref . '</option>');
                                                }
                                                ?>
                                            <?php endif; ?>

                                        </select>
                                        <span class="err-msg-prefecture"></span>

                                    </div>

                                    <div>
                                        <p>市区町村番地/建物名</p>
                                        <input type="text" class="form-control address" placeholder="○○市○○町1-2-3シティ302" name="address" id="address" maxlength="10" size="45" value="<?= getPostValue('address') ?>">
                                        <span class="err-msg-address"></span>
                                    </div>
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <th>
                                <span>ご相談内容</span>
                                <span class="required">必須</span>
                            </th>
                            <td>
                                <div class="textfield workday">
                                    <select name="workday" required class="form-select workday" id="workday">
                                        <option selected value="資料請求">資料請求</option>
                                        <option value="無料お見積り" <?php if (!empty($_POST['workday']) && $_POST['workday'] === "無料お見積り") {
                                                                    echo 'selected';
                                                                } ?>>無料お見積り</option>
                                        <option value="資料請求" <?php if (!empty($_POST['workday']) && $_POST['workday'] === "資料請求") {
                                                                    echo 'selected';
                                                                } ?>>資料請求</option>
                                        <option value="人材派遣" <?php if (!empty($_POST['workday']) && $_POST['workday'] === "人材派遣") {
                                                                    echo 'selected';
                                                                } ?>>人材派遣</option>
                                        <option value="業務委託" <?php if (!empty($_POST['workday']) && $_POST['workday'] === "業務委託") {
                                                                    echo 'selected';
                                                                } ?>>業務委託</option>
                                        <option value="人材紹介" <?php if (!empty($_POST['workday']) && $_POST['workday'] === "人材紹介") {
                                                                    echo 'selected';
                                                                } ?>>人材紹介</option>
                                        <option value="その他" <?php if (!empty($_POST['workday']) && $_POST['workday'] === "その他") {
                                                                echo 'selected';
                                                            } ?>>その他</option>
                                    </select>
                                </div>

                                <p class="err-msg-workday"></p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span>内容</span>
                            </th>
                            <td>
                                <textarea name="comments" cols="300" rows="10" class="form-control" placeholder="ご相談内容の詳細やご希望がある場合はこちらにご記入ください。（例）連絡は平日でお願いします。コールセンターの人材派遣希望など"><?= getPostValue('comments') ?></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="formbtn">
                    <div class="formbtn-clear">
                        <input type="reset" value="リセット" class="btn btn--blue btn--radius">
                    </div>
                    <!-- チェックボックス -->
                    <div class="err-msg-checkBoxes"></div>
                    <div class="form-check">
                        <input class="orange size2" type="checkbox" value="" id="hobby1" required>
                        <label>
                            <a href="https://diworks.co.jp/privacy/" class="personallink" target="_blank"><span>個人情報の取り扱い</span></a>に同意する
                        </label>
                    </div>

                    <!-- 送信ボタン -->
                    <div class="bottombtn">
                        <a href="index.php" class="btn btn--blue btn--radius">戻る</a>
                        <input type="submit" class="btn btn--orange btn--radius submit" value="確認画面へ">
                    </div>
                </div>
            </form>
        </main>
        <script type="text/javascript" src="app2.js"></script>
    </div>
</body>

</html>