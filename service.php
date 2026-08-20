<?php
$page_css = 'service';
$title = 'NEXA Partners / SERVICE';
$base = './';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main>
        <div class="service">
            <div class="service-top">
                <h1>SERVICE</h1>
                <p>-  サービス紹介 -</p>
                <p>
                    企業の課題に合わせた<br>
                    最適なソリューションを提供します
                </p>
            </div>
            <section class="service-web">
                <img src="./images/service/web.png" alt="webサイト制作のイメージ">
                <div class="service-content">
                    <h2 class="halfround-title">WEB制作支援</h2>
                    <p>
                        企業の価値や魅力を伝えるWeb
                        サイト制作を提供します。
                    </p>
                    <ul>
                        <li>コーポレートサイト制作</li>
                        <li>LP制作</li>
                        <li>SEO対策</li>
                    </ul>
                </div>
            </section>
            <section class="service-dx">
                <img src="./images/service/dx.png" alt="DXコンサルティングのイメージ">                
                <div class="service-content">
                    <h2 class="halfround-title">DXコンサルティング</h2>
                    <p>
                        業務効率化に向けた課題を整理し
                        最適な改善方法をご提案します。
                    </p>
                    <ul>
                        <li>業務改善</li>
                        <li>クラウド導入</li>
                        <li>データ管理</li>
                    </ul>
                </div>
            </section>
            <section class="service-subsidy">
                <img src="./images/service/subsidy.png" alt="補助金申請支援のイメージ">
                <div class="service-content">
                    <h2 class="halfround-title">補助金支援</h2>
                    <p>
                        IT導入に必要な補助金申請ま
                        で丁寧にサポートします。
                    </p>
                    <ul>
                        <li>IT導入補助金</li>
                        <li>申請代行</li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
<?php include __DIR__ . '/includes/footer.php'; ?>
