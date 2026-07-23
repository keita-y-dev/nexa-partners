<?php

// POST以外からのアクセスを防止
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.html');
    exit;
}


// =====================
// 入力値取得
// =====================

$company  = trim($_POST['company'] ?? '');
$username = trim($_POST['username'] ?? '');
$email    = trim($_POST['email'] ?? '');
$tel      = trim($_POST['tel'] ?? '');
$content  = trim($_POST['content'] ?? '');

// メールヘッダーインジェクション対策
$email = str_replace(["\r", "\n"], '', $email);

// メールアドレスチェック
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('メールアドレスが正しくありません');
}


// =====================
// カテゴリー取得
// =====================

$categoryList = [
    'web'     => 'Webサイト制作',
    'dx'      => '業務効率化',
    'subsidy' => '補助金サポート',
    'other'   => 'その他',
];


$categories = [];

if (!empty($_POST['category']) && is_array($_POST['category'])) {

    foreach ($_POST['category'] as $value) {

        if (isset($categoryList[$value])) {
            $categories[] = $categoryList[$value];
        }

    }

}


// =====================
// メール本文作成
// =====================

$categoryText = '';

if (!empty($categories)) {
    $categoryText = implode("\n", $categories);
} else {
    $categoryText = 'なし';
}



$body = <<<EOT
お問い合わせがありました。

会社名：
{$company}

担当者名：
{$username}

メールアドレス：
{$email}

電話番号：
{$tel}

お問い合わせ項目：
{$categoryText}

ご相談内容：
{$content}

EOT;



// =====================
// メール設定
// =====================

mb_language("Japanese");
mb_internal_encoding("UTF-8");



// =====================
// 管理者宛メール
// =====================

// ポートフォリオ公開用のため、メール送信処理はコメントアウトしています。
// 実運用時はコメントを外すことで送信可能です。

/*

$adminMail = "info@nexa-partners.com";

$adminSubject = "お問い合わせがありました";


$adminHeaders  = "From: info@nexa-partners.com\r\n";
$adminHeaders .= "Reply-To: {$email}\r\n";
$adminHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";


if (!mb_send_mail(
    $adminMail,
    $adminSubject,
    $body,
    $adminHeaders
)) {
    exit('メール送信に失敗しました');
}

*/

// =====================
// お客様宛 自動返信メール
// =====================

$userSubject = "お問い合わせありがとうございます";


$userBody = <<<EOT
{$username} 様

お問い合わせいただきありがとうございます。

以下の内容でお問い合わせを受け付けました。


会社名：
{$company}

担当者名：
{$username}

メールアドレス：
{$email}

電話番号：
{$tel}

お問い合わせ項目：
{$categoryText}

ご相談内容：
{$content}


内容を確認のうえ、
担当者より改めてご連絡いたします。

※このメールは自動送信されています。

EOT;



$userHeaders  = "From: NEXA Partners <info@nexa-partners.com>\r\n";
$userHeaders .= "Reply-To: info@nexa-partners.com\r\n";
$userHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";

/*

if (!mb_send_mail(
    $email,
    $userSubject,
    $userBody,
    $userHeaders
)) {
    exit('メール送信に失敗しました');
}

*/

// =====================
// 完了ページへ
// =====================

header('Location: ../thanks.html');
exit;

?>