<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/service.css">
</head>
<body class="sub service">
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
                            <h3>서비스 안내</h3>
                            <small>Nursing Center Hesed House</small>
                        </div>
                        <ul>
                            <li><a href="/service/health_care.php">건강관리 서비스</a></li>
                            <li class="active"><a href="/service/leisure_life.php">생활여가 서비스</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-9">
                    <section class="leisure-life">
                        <div class="section-header">
                            <h4>생활여가 서비스</h4>
                        </div>
                        <div class="section-content">
                            <h5 class="sub-title">생활여가서비스</h5>
                            <p>
                                노인성 질환으로 인한 신체적 장애로 일상생활을 스스로 할 수 없는 어르신들의 생활을 돕기 위하여 배변관리, 착/탈의, 식사보조등 일상생활 서비스를 전문교육을 받은 요양보호사가 24시간 생활서비스를 실시하고 있습니다.
                            </p>
                            <ol class="decimal-list">
                                <li>
                                    <span>1</span>세면, 양치, 목욕 시 수발 및 보조활동
                                </li>
                                <li>
                                    <span>2</span>배변관리 및 이동시 거동 보조활동
                                </li>
                                <li>
                                    <span>3</span>이·미용 서비스
                                </li>
                                <li>
                                    <span>4</span>식사지도 및 수발
                                </li>
                                <li>
                                    <span>5</span>실내 생활관 및 주변환경 개선 및 위생
                                </li>
                                <li>
                                    <span>6</span>프로그램 보조활동
                                </li>
                            </ol>
                            <h5 class="sub-title">생활여가 시설</h5>
                            <p>
                                문화시설, 스포츠시설, 취미교실, 산책로 등 입주자 한분 한분의 개성, 취향에 맞춰 시설을 갖추고 편안한 생활을 하시도록 해 드립니다.<br>
                                즐거움 속에 풍요로운 노후가 있습니다. 제 2의 삶을 여기에서 펼치시기 바랍니다.
                            </p>
                            <ul class="row">
                                <li class="col-4">
                                    <figure>
                                        <img src="/assets/images/service/img_leisure01.jpg" alt="">
                                        <figcaption>
                                            <dl>
                                                <dt>문화시설</dt>
                                                <dd>공연관람, 비디오시청, 음악감상 등<br>다양한 문화시설을 즐기실 수 있습니다.</dd>
                                            </dl>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-4">
                                    <figure>
                                        <img src="/assets/images/service/img_leisure02.jpg" alt="">
                                        <figcaption>
                                            <dl>
                                                <dt>스포츠시설</dt>
                                                <dd>각종 운동기구로 간단한 운동을<br>즐기실 수 있습니다.</dd>
                                            </dl>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="col-4">
                                    <figure>
                                        <img src="/assets/images/service/img_leisure03.jpg" alt="">
                                        <figcaption>
                                            <dl>
                                                <dt>산책로</dt>
                                                <dd>맑고 신선한 공기와 더불어 깨끗한<br>자연환경을 자랑합니다.</dd>
                                            </dl>
                                        </figcaption>
                                    </figure>
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