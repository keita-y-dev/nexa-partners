<?php
$page_css = 'confirm';
$title = 'NEXA Partners / 入力確認';
$base = '../';
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>
<main>
        <section class="confirm-top">
            <h1>お問い合わせ</h1>
            <hr>
            <p>以下の内容で送信します。</p>
            <p>よろしければ、「送信する」ボタンを押してください。</p>
        </section>

        <section class="confirm-content">
            <form action="send.php" method="post">
                <?php
                $fields = [
                    'company' => '会社名',
                    'username' => '担当者名',
                    'email' => 'メールアドレス',
                    'tel' => '電話番号',
                ];
                $categoryList = [
                    'web' => 'Webサイト制作',
                    'dx' => '業務効率化',
                    'subsidy' => '補助金サポート',
                    'other' => 'その他',
                ];
                ?>
                <dl class="confirm-list">
                    <?php foreach ($fields as $name => $label): ?>
                        <dt><?= $label ?></dt>
                        <dd>
                            <?= htmlspecialchars($_POST[$name] ?? '', ENT_QUOTES, 'UTF-8') ?>
                            <input type="hidden" name="<?= $name ?>" value="<?= htmlspecialchars($_POST[$name] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                        </dd>
                    <?php endforeach; ?>
                    <dt>相談したい内容</dt>
                    <dd>
                        <?php foreach ((array) ($_POST['category'] ?? []) as $value): ?>
                            <?php if (isset($categoryList[$value])): ?>
                                <?= htmlspecialchars($categoryList[$value], ENT_QUOTES, 'UTF-8') ?><br>
                                <input type="hidden" name="category[]" value="<?= htmlspecialchars($value, ENT_QUOTES, 'UTF-8') ?>">
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </dd>
                    <dt>ご相談内容</dt>
                    <dd>
                        <?= nl2br(htmlspecialchars($_POST['content'] ?? '', ENT_QUOTES, 'UTF-8')) ?>
                        <input type="hidden" name="content" value="<?= htmlspecialchars($_POST['content'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    </dd>
                </dl>

                <div class="confirm-button">
                    <button type="button" onclick="history.back()">
                        入力内容を修正する
                    </button>
                    <button type="submit">送信する</button>
                </div>
            </form>
        </section>
    </main>
<?php include __DIR__ . '/../includes/footer.php'; ?>
