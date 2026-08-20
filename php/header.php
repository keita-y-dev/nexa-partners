<?php $base = $base ?? "../"; ?>
<?php
$base = $base ?? '';
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<header class="site-header">
    <div class="header-inner">
        <h1 class="logo">
            <a href="<?= $base ?>index.php">
                <img src="<?= $base ?>images/common/logo.svg" alt="NEXA Partners">
            </a>
        </h1>

        <button class="menu-toggle" type="button"
                aria-label="メニューを開く"
                aria-expanded="false"
                aria-controls="global-nav">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav id="global-nav" class="global-nav" aria-label="グローバルナビゲーション">
            <ul class="gnav">
                <li><a class="<?= $currentPage === 'service.php' ? 'is-current' : '' ?>" href="<?= $base ?>service.php">SERVICE</a></li>
                <li><a class="<?= $currentPage === 'about.php' ? 'is-current' : '' ?>" href="<?= $base ?>about.php">ABOUT</a></li>
                <li><a class="<?= $currentPage === 'case.php' ? 'is-current' : '' ?>" href="<?= $base ?>case.php">CASE</a></li>
                <li><a class="<?= $currentPage === 'contact.php' ? 'is-current' : '' ?>" href="<?= $base ?>contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</header>
