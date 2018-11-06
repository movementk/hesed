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
                            <li class="active"><a href="/service/health_care.php">건강관리 서비스</a></li>
                            <li><a href="/service/leisure_life.php">생활여가 서비스</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-9">
                    <section class="health-care">
                        <div class="section-header">
                            <h4>건강관리 서비스</h4>
                        </div>
                        <div class="section-content">
                            <h5 class="sub-title">진료서비스</h5>
                            <p>
                                나이가 들어감에 따라 건강도 체크해야 할 시기입니다.<br>
                                행복찾기요양원에서는 양방에서 한방까지 간단한 진료 또는 응급환자에 이르기까지 전문의사의 방문으로 <br>
                                입소자 여러분들의 건강을 관리·체크하고 있습니다.<br>
                                질환 및 증상에 따른 1차 진료와 상태변화에 따른 2차 진료 서비스를 제공해 드립니다.
                            </p>
                            <h5 class="sub-title">간호서비스</h5>
                            <p>
                                혈압/맥박/체온 및 관찰(진찰)을 통한 신체사정에 의한 서비스 및 의사처방에 의한 투약 서비스와<br>
                                어르신들의 건강한 신체 합병증 예방 및 관리 서비스를 제공해 드리고 있습니다.
                            </p>
                            <h5 class="sub-title">전문적인 의료 서비스</h5>
                            <p>
                                질병의 예방은 물론 언제든지 불편하신 곳이 있으면, 즉시 조치가 가능한 안전한 환경을 제공하고 있습니다.<br>
                                또한 필요시 타 의료기관에 진료 의뢰를 해 드립니다.
                            </p>
                            <ul class="row">
                                <li class="col-4">
                                    <div class="circle-box">
                                        <div class="icon-item"></div>
                                        <dl>
                                            <dt>대상자 평가</dt>
                                            <dd>활력증후, 신체검사(안색, 피부상태, <br>걸음걸이), 노인질환 관리</dd>
                                        </dl>
                                    </div>
                                </li>
                                <li class="col-4">
                                    <div class="circle-box">
                                        <div class="icon-item"></div>
                                        <dl>
                                            <dt>신체관리</dt>
                                            <dd>대상자의 인지기능, 정신상태 평가, <br>일상생활 평가</dd>
                                        </dl>
                                    </div>
                                </li>
                                <li class="col-4">
                                    <div class="circle-box">
                                        <div class="icon-item"></div>
                                        <dl>
                                            <dt>행동관리</dt>
                                            <dd>약물복용, 인지기능훈련, 회상요법, <br>안정요법 등으로 관리</dd>
                                        </dl>
                                    </div>
                                </li>
                                <li class="col-4">
                                    <div class="circle-box">
                                        <div class="icon-item"></div>
                                        <dl>
                                            <dt>기능회복</dt>
                                            <dd>물리치료, 치매예방체조, 관절운동, <br>균형잡기</dd>
                                        </dl>
                                    </div>
                                </li>
                                <li class="col-4">
                                    <div class="circle-box">
                                        <div class="icon-item"></div>
                                        <dl>
                                            <dt>영양관리</dt>
                                            <dd>식사 3식, 간식 등을 제공하여 <br>균형잡힌 영양 제공</dd>
                                        </dl>
                                    </div>
                                </li>
                                <li class="col-4">
                                    <div class="circle-box">
                                        <div class="icon-item"></div>
                                        <dl>
                                            <dt>건강관리</dt>
                                            <dd>혈압/혈당 체크, 건강교육, <br>건강검진, 한방진료</dd>
                                        </dl>
                                    </div>
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