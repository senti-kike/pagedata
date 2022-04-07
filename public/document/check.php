<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <title>苦情・問い合わせ -location</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <h1>お問い合わせ内容の確認</h1>
            <div class="ck">
                <?php
                echo'入力内容の確認';
                ?>
                <table class="check">
                    <?php
                        if (isset($_POST['your-name'])){
                            $your_name = $_POST['your-name'];
                        }
                        if (isset($_POST['your-mail'])){
                            $your_mail = $_POST['your-mail'];
                        }
                        if (isset($_POST['your-message'])){
                            $your_message = $_POST['your-message'];
                        }
                        if (isset($_POST['gender'])){
                            $gender = $_POST['gender'];
                        }
                        if (isset($_POST['know']) && is_array($_POST['know'])) {
                            $know = implode(', ', $_POST['know']);
                        }
                    ?>
                        <tr>
                            <th>お名前</th>
                            <td>
                            <?php
                            if (empty($your_name)) {
                                echo 'お名前が入力されていません';
                            }
                            else {
                                echo htmlspecialchars($your_name);
                            }
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td>
                            <?php
                            if (empty($your_mail)) {
                                echo 'メールアドレスが入力されていません';
                            }
                                else {
                                echo htmlspecialchars($your_mail);
                            }
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <th>性別</th>
                            <td>
                            <?php
                            if (isset($gender)) {
                                echo htmlspecialchars($gender);
                            }
                            else {
                                echo '性別がチェックされていません';
                            }
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <th>このサイトを知ったきっかけ</th>
                            <td>
                            <?php
                            if (isset($know)) {
                                echo htmlspecialchars($know);
                            }
                            else {
                                echo 'このサイトを知ったきっかけがチェックされていません';
                            }
                            ?>
                            </td>
                        </tr>
                </table>
                <?php
                echo'<div class="check_button">';
                echo'<input class="check_btn" type="button" onclick="history.back()" name="button" value="お問い合わせフォームに戻る">';
                echo'</div>';
                ?>
            </div>
        </div>
        <a href="index.html">ホーム</a>
        <!-- フッター -->
        <div id="footer">
                <small>&copy;Copyright @takakike_ All rights reserved.</small>
        </div>
    </body>
</html>