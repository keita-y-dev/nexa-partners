<?php
$page_css = 'top';
$title = 'NEXA Partners / TOPページ';
$base = './';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>
<main>

    <section class="hero">
        <div class="hero-copy">
            <h2>地方企業の成長をデジタルで加速させる</h2>
        </div>
    </section>

    <section class="problem">
        <div class="inner problem-inner">
            <div class="problem-top">
                <div class="problem-img">
                    <img src="images/top/problem.png" alt="悩んでいるビジネスマンのイラスト">
                </div>
                <div class="problem-text">
                    <h2 class="section-title">こんなお悩みありませんか？</h2>
                    <ul class="problem-list">
                        <li>紙で業務管理している</li>
                        <li>IT担当がいない</li>
                        <li>集客できない</li>
                        <li>ホームページが古い</li>
                    </ul>
                </div>
            </div>
            <p class="problem-copy">
                <span>ITが苦手でも大丈夫。</span><br>
                DX導入から運用まで伴走します。
            </p>
            <div class="problem-btns">
                <a href="contact.php" class="btn">無料相談はこちら</a>
                <a href="case.php" class="btn">導入事例を見る</a>
            </div>
        </div>
    </section>

    <section class="trust">
        <h2 class="arrow-title">
            TRUST <span>- 実績 -</span>
        </h2>

        <div class="inner trust-inner">
            <div class="trust-item">
                <div class="trust-circle">
                    <p><strong>300</strong><span>社+</span></p>
                </div>
                <h3>支援企業</h3>
            </div>

            <div class="trust-item trust-item-center">
                <div class="trust-circle">
                    <p><strong>95</strong><span>%</span></p>
                </div>
            <h3>導入継続率</h3>
            </div>

            <div class="trust-item">
                <div class="trust-circle">
                    <p><strong>92</strong><span>%</span></p>
                </div>
                <h3>顧客満足度</h3>
            </div>
        </div>
    </section>

    <section class="top-service">
        <h2 class="arrow-title">
            SERVICE <span>- サービス紹介 -</span>
        </h2>

        <div class="inner top-service-inner">
            <div class="top-service-item">
                <img src="images/top/service-web.png" alt="Web制作">
                <h3>WEB制作</h3>
            </div>

            <div class="top-service-item">
                <img src="images/top/service-dx.png" alt="DXコンサルティング">
                <h3>DXコンサルティング</h3>
            </div>

            <div class="top-service-item">
                <img src="images/top/service-subsidy.png" alt="補助金サポート">
                <h3>補助金サポート</h3>
            </div>
        </div>
    </section>

    <section class="reason">
        <h2 class="arrow-title reason-title">
            REASON <span>- NEXAが選ばれる理由 -</span>
        </h2>

        <div class="inner reason-inner">
            <div class="reason-item">
                <h3>地方企業専門</h3>
                <p>
                    地方企業ならではの人材不足や業務課題に寄り添い、
                    最適なDX支援を実現します。
                </p>
            </div>

            <div class="reason-item">
                <h3>専門知識不要</h3>
                <p>
                    専門知識がなくても安心して始められるよう、
                    わかりやすい支援体制を整えています。
                </p>
            </div>

            <div class="reason-item">
                <h3>導入後も伴走支援</h3>
                <p>
                    導入後の運用定着から改善提案まで、
                    継続的に伴走し、企業成長を支援します。
                </p>
            </div>
        </div>
    </section>

   <section class="top-case">
        <h2 class="arrow-title case-title">
            CASE STUDY <span>- 導入事例 -</span>
        </h2>

        <div class="inner case-inner">

            <!-- 建設会社 -->
            <div class="case-item case-item-construction">
                <div class="case-text">
                    <h3 class="case-title">
                        建設会社A社<br>
                        業務時間40%削減
                    </h3>

                    <p>
                        紙で管理していた勤怠業務を
                        デジタル化し、確認作業の負担を
                        大幅に削減できました。
                    </p>
                </div>

                <div class="case-img">
                    <img src="images/top/case-construction.jpg" alt="建設会社の導入事例">
                </div>
            </div>

            <!-- 飲食店 -->
            <div class="case-item case-item-cafe">
                <div class="case-img">
                    <img src="images/top/case-cafe.jpg" alt="飲食店の導入事例">
                </div>

                <div class="case-text">
                    <h3 class="case-title">
                        飲食店B社<br>
                        予約管理を自動化
                    </h3>

                    <p>
                        電話で対応していた予約管理を
                        システム化したことで接客に
                        集中できる時間が増えました。
                    </p>
                </div>
            </div>

            <!-- CTA -->
            <div class="case-cta">
                <p>まずは無料相談から始めませんか？</p>
                <a href="contact.php" class="btn">お問い合わせ</a>
            </div>

        </div>
    </section>

    </main>
<?php include __DIR__ . '/includes/footer.php'; ?>
