<?php
$base = $base ?? './';
$page_css = $page_css ?? '';
$title = $title ?? 'NEXA Partners';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base ?>css/reset.css">
    <link rel="stylesheet" href="<?= $base ?>css/common.css">
    <?php if ($page_css): ?>
        <link rel="stylesheet" href="<?= $base ?>css/<?= htmlspecialchars($page_css, ENT_QUOTES, 'UTF-8') ?>.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?= $base ?>css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="icon" href="<?= $base ?>images/common/nexa-favicon.svg" type="image/svg+xml">
</head>
<body>
