<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/confirm.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="images/common/favicon.ico">
    <title>NEXA Partners / 入力確認</title>
</head>
<body>
    <header>
        <div class="header-inner">
            <h1 class="logo">
            <a href="index.html">
                <img src="images/common/logo.svg" alt="NEXA Partners">
            </a>
            </h1>
            <nav>
            <ul class="gnav">
                <li><a href="service.html">SERVICE</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="case.html">CASE</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="confirm-top">
            <h1>お問い合わせ</h1>
            <hr>
            <p>以下の内容で送信します。</p>
            <p>よろしければ、「送信する」ボタンを押してください。</p>
        </section>

        <section class="confirm-content">
            <form action="send.php" method="post">
                <dl class="confirm-list">
                    <dt>会社名</dt>
                    <dd>
                        <?php
                            if (isset($_POST['company'])) {
                                echo htmlspecialchars($_POST['company'], ENT_QUOTES, 'UTF-8');
                            }
                        ?>
                        <!-- 次の画面へ渡す -->
                        <input type="hidden" name="company"
                            value="<?= htmlspecialchars($_POST['company'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">                        
                    </dd>
                    <dt>担当者名</dt>
                    <dd>
                        <?php
                            if (isset($_POST['username'])) {
                                echo htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
                            }
                        ?>
                        <!-- 次の画面へ渡す -->
                        <input type="hidden" name="username"
                            value="<?= htmlspecialchars($_POST['username'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">                            
                    </dd>
                    <dt>メールアドレス</dt>
                    <dd>
                        <?php
                            if (isset($_POST['email'])) {
                                echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
                            }
                        ?>
                        <!-- 次の画面へ渡す -->
                        <input type="hidden" name="email"
                            value="<?= htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">                            
                    </dd>
                    <dt>電話番号</dt>
                    <dd>
                        <?php
                            if (isset($_POST['tel'])) {
                                echo htmlspecialchars($_POST['tel'], ENT_QUOTES, 'UTF-8');
                            }
                        ?>
                        <!-- 次の画面へ渡す -->
                        <input type="hidden" name="tel"
                            value="<?= htmlspecialchars($_POST['tel'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">                            
                    </dd>                
                    <dt>相談したい内容</dt>
                    <dd>
                        <?php
                            $categoryList = [
                                'web' => 'Webサイト制作',
                                'dx' => '業務効率化',
                                'subsidy' => '補助金サポート',
                                'other' => 'その他',
                            ];

                            if (isset($_POST['category'])) {
                                foreach ($_POST['category'] as $value) {
                                    echo htmlspecialchars($categoryList[$value], ENT_QUOTES, 'UTF-8');
                                    echo '<br>';
                                    //次の画面へ渡す
                                    echo '<input type="hidden" name="category[]" value="'
                                        . htmlspecialchars($value, ENT_QUOTES, 'UTF-8')
                                        . '">';                                    
                                }
                            }               
                        ?>                      
                    </dd>                
                    <dt>ご相談内容</dt>
                    <dd>
                        <?php
                            if (isset($_POST['content'])) {
                                echo nl2br(htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8'));
                            }
                        ?>
                        <!-- 次の画面へ渡す -->
                        <input type="hidden" name="content"
                            value="<?= htmlspecialchars($_POST['content'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">                            
                    </dd>                
                </dl>

                <div class="confirm-button">
                    <button type="button" onclick="history.back()">
                        入力内容を修正する
                    </button>
                    <input type="submit" value="送信する">
                </div>
            </form>
        </section>
    </main>

    <footer>
        <div class="footer-inner">
            <div class="footer-left">
                <img src="images/common/logo_white.svg" alt="NEXA Partners">
                <p>
                    NEXA Partners株式会社<br>
                    鹿児島県鹿児島市○○町1-23
                </p>
            </div>
            <div class="footer-right">
                <p>TEL 000-000-0000</p>
                <p>info@nexa-partners.com</p>
            </div>
        </div>
        <div class="copyright">
            <small>
                ©2026 NEXA Partners
            </small>
        </div>
    </footer>
</body>
</html>