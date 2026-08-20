<?php
$page_css = 'contact';
$title = 'NEXA Partners / お問い合わせ';
$base = './';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main>
        <section class="contact-top">
            <h1>お問い合わせ</h1>
            <hr>
            <p>まずはお気軽にご相談ください。</p>
            <p>業務改善やDX導入について、専門スタッフがご相談を承ります。</p>
        </section>
        <section class="contact-content">
            <div class="stat-container">
                <div class="stat-card">
                    <p>累計支援実績<br>300社以上</p>
                </div>
                <div class="stat-card">
                    <p>相談実績<br>8年間</p>
                </div>
                <div class="stat-card">
                    <p>初回<br>相談無料</p>
                </div>
                <div class="stat-card">
                    <p>オンライン<br>対応可</p>
                </div>
            </div>
            <div class="contact-form">
                <form action="php/confirm.php" method="post">
                    <div class="form-item">
                        <p>
                            <label for="company">
                                会社名
                            </label>
                            <input id="company" type="text" name="company" required>
                        </p>
                    </div>
                    <div class="form-item">
                        <p>
                            <label for="contact-person">
                                担当者名
                            </label> 
                            <input id="contact-person" type="text" name="username" required>
                        </p>
                    </div>
                    <div class="form-item">
                        <p>
                            <label for="email">
                                メールアドレス
                            </label>
                            <input id="email" type="email" name="email" required>
                        </p>
                    </div>
                    <div class="form-item">
                        <p>
                            <label for="tel">
                                電話番号
                            </label>
                            <input id="tel" type="tel" name="tel" required>
                        </p>
                    </div>
                    <div class="form-item">
                        <fieldset>
                            <legend>
                                相談したい内容
                            </legend>
                            <div class="checkbox-list">
                                <label>
                                    <input type="checkbox" name="category[]" value="web">Webサイト制作
                                </label>
                                <label>
                                    <input type="checkbox" name="category[]" value="dx">業務効率化
                                </label>
                                <label>
                                    <input type="checkbox" name="category[]" value="subsidy">補助金サポート
                                </label>
                                <label>
                                    <input type="checkbox" name="category[]" value="other">その他
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-item">
                        <p>
                            <label for="content">
                                ご相談内容
                            </label>
                            <textarea id="content" name="content" rows="5" cols="40" required></textarea>
                        </p>
                    </div>
                    <input type="submit" value="確認画面へ進む">
                </form>
            </div>
        </section>
    </main>
<?php include __DIR__ . '/includes/footer.php'; ?>
