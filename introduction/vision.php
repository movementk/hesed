<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduction.css">
</head>
<body class="sub introduction">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    
    <!-- page-header -->
    <div class="page-header"></div>
    <!-- Content -->
    <main id="content">
        <div class="container">
            <div class="row priority">
                <div class="col-3">
                    <nav id="lnb">
                        <div class="lnb-title">
                            <h3>요양원 소개</h3>
                            <small>Nursing Center Hesed House</small>
                        </div>
                        <ul>
                            <li><a href="/introduction/greeting.php">인사말</a></li>
                            <li class="active"><a href="/introduction/vision.php">비전 및 목표</a></li>
                            <li><a href="/introduction/business.php">운영방향</a></li>
                            <li><a href="/introduction/location.php">오시는길</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-9">
                    <section class="vision">
                        <div class="section-header">
                            <h4>비전 및 목표</h4>
                        </div>
                        <div class="section-content">
                            <h5 class="sub-title">설립 목적</h5>
                            <p>
                                기독교 박애정신 위에서 섬김을 실천하여  입소 어르신들의 영육간 삶의 질 향상을 도모하고, <br>
                                종사자들에게는 자부심과 보람을 주위 지역사회에는 신뢰와 사랑을 나눔을 목적으로 한다
                            </p>
                            <h5 class="sub-title">헤세드하우스 비전</h5>
                            <article>
                                <figure>
                                    <img src="/assets/images/introduction/logo.png" alt="">
                                </figure>
                                <figure>
                                    <img src="/assets/images/introduction/img_arrow.png" alt="">
                                </figure>
                                <p>
                                    차별화된 실버케어문화를 창출하는<br>
                                    <strong>노인복지 전문 기업</strong>
                                </p>
                            </article>
                            <h5 class="sub-title">헤세드하우스 목표</h5>
                            <ul class="row">
                                <li class="col-4">
                                    <div class="circle-box">
                                        <div class="icon-item"></div>
                                        <p>양육간 건강하고<br>아름다운 어르신</p>
                                    </div>
                                </li>
                                <li class="col-4">
                                    <div class="circle-box">
                                        <div class="icon-item"></div>
                                        <p>자부심 넘치는<br>역량있는 종사자</p>
                                    </div>
                                </li>
                                <li class="col-4">
                                    <div class="circle-box">
                                        <div class="icon-item"></div>
                                        <p>소통과 참여로<br>함께하는 공동체</p>
                                    </div>
                                </li>
                                <li class="col-4"></li>
                                <li class="col-4"></li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>