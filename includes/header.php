<?php
$base = $base ?? './';
$current = basename($_SERVER['SCRIPT_NAME']);
?>
<header class="site-header">
    <div class="header-inner">
        <h1 class="logo">
            <a href="<?= $base ?>index.php">
                <img src="<?= $base ?>images/common/nexa-logo.svg" alt="NEXA Partners">
            </a>
        </h1>

        <button class="menu-toggle" type="button" aria-label="メニューを開く" aria-expanded="false" aria-controls="global-nav">
            <span></span><span></span><span></span>
        </button>

        <nav id="global-nav" class="global-nav" aria-label="グローバルナビゲーション">
            <ul class="gnav">
                <li><a class="<?= $current === 'service.php' ? 'is-current' : '' ?>" href="<?= $base ?>service.php">SERVICE</a></li>
                <li><a class="<?= $current === 'about.php' ? 'is-current' : '' ?>" href="<?= $base ?>about.php">ABOUT</a></li>
                <li><a class="<?= $current === 'case.php' ? 'is-current' : '' ?>" href="<?= $base ?>case.php">CASE</a></li>
                <li><a class="<?= $current === 'contact.php' ? 'is-current' : '' ?>" href="<?= $base ?>contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</header>
