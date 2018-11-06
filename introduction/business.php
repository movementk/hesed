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
                            <li><a href="/introduction/vision.php">비전 및 목표</a></li>
                            <li class="active"><a href="/introduction/business.php">운영방향</a></li>
                            <li><a href="/introduction/location.php">오시는길</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-9">
                    <section class="business">
                        <div class="section-header">
                            <h4>운영방향</h4>
                        </div>
                        <div class="section-content">
                            <h5 class="sub-title">어르신들의 의식주 환경 최우선 집중</h5>
                            <figure>
                                <img src="/assets/images/introduction/img_business01.jpg" alt="">
                                <img src="/assets/images/introduction/img_business02.jpg" alt="">
                            </figure>
                            <ol class="decimal-list">
                                <li>
                                    <span>1</span>보다 깨끗하고 쾌적한 주거 환경 (생활실 환경, 실내공기, 개인 위생)
                                </li>
                                <li>
                                    <span>2</span>건강 및 기능증진 활동 제고 (영양급식, 건강상담, 통증간호 등)
                                </li>
                                <li>
                                    <span>3</span>여가 및 정서지원 지속 확대 (프로그램 및 지역행사 등)
                                </li>
                            </ol>
                            <h5 class="sub-title">개인별 맞춤 케어 서비스 확대</h5>
                            <figure>
                                <img src="/assets/images/introduction/img_business03.jpg" alt="">
                                <img src="/assets/images/introduction/img_business04.jpg" alt="">
                                <img src="/assets/images/introduction/img_business05.jpg" alt="">
                            </figure>
                            <ol class="decimal-list">
                                <li>
                                    <span>1</span>개인 위생 서비스
                                </li>
                                <li>
                                    <span>2</span>개인 취미 활동
                                </li>
                            </ol>
                            <h5 class="sub-title">지속적인 커뮤니케이션으로 열린 요양원 지향</h5>
                            <figure>
                                <img src="/assets/images/introduction/img_business06.jpg" alt="">
                                <img src="/assets/images/introduction/img_business07.jpg" alt="">
                            </figure>
                            <ol class="decimal-list">
                                <li>
                                    <span>1</span>종사자, 보호자, 지역사회
                                </li>
                                <li>
                                    <span>2</span>정기 및 수시 간담회 개인별상담. 가족간담회, 가족초청행사 
                                </li>
                            </ol>
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