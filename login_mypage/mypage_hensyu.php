<?php
mb_internal_encoding("utf8");

//mypage.phpからの導線以外は、「login_error.php」へリダイレクト
if (empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}

session_start();
?>

<!DOCTYPE HTML>
<html lang="ja"> 
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>    
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="out"><a href="log_out.php">ログアウト</a></div>
        </header>

        <main>
            <div class="box">
                <h2>会員情報</h2>
        　　   
                    <div class="he">
                        <?php echo "こんにちは！  ".$_SESSION['name']."さん"; ?>
                    </div>

                    <form action="mypage_update.php" method="post">
                        <div class="pic">
                            <img src="<?php echo $_SESSION['picture']; ?>">
                        </div>    

                        <div class="basic">
                            <p>氏名:<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name">
                            </p>

                            <p>メール:<input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail">
                            </p>

                            <P>パスワード:<input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password">
                            </p>
                        </div>

                        <div class="come">
                            <textarea rows="3" cols="75" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                        </div>
                        <div class="button">
                            <input type="submit" class="submit_button" size="35" value="この内容に変更する">
                        </div>
                    </form>
            </div>
        </main>
        <footer>
            © 2018 InterNous.inc. All right reserved
        </footer>
    </body>
</html>