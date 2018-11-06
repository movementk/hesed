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
                            <li><a href="/introduction/business.php">운영방향</a></li>
                            <li class="active"><a href="/introduction/location.php">오시는길</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-9">
                    <section class="location">
                        <div class="section-header">
                            <h4>오시는길</h4>
                        </div>
                        <div class="section-content">
                            <div class="maps">
                                <img src="/assets/images/introduction/img_maps.jpg" alt="">
                            </div>
                            <ul>
                                <li>
                                    <figure>
                                        <img src="/assets/images/introduction/icon_location01.png" alt="">
                                    </figure>
                                    <dl>
                                        <dt>주소</dt>
                                        <dd>
                                            <address>
                                                경기도 용인시 기흥구 동백죽전대로527번길 100-16 <br>
                                                (경기도 용인시 기흥구 중동 1109-10 )
                                            </address>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <figure>
                                        <img src="/assets/images/introduction/icon_location02.png" alt="">
                                    </figure>
                                    <dl>
                                        <dt>전화</dt>
                                        <dd>031-274-1000 / 010-4713-4631</dd>
                                    </dl>
                                </li>
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