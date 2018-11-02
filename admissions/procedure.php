<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/admissions.css">
</head>
<body class="sub admissions">
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
                            <h3>입소안내</h3>
                            <small>Nursing Center Hesed House</small>
                        </div>
                        <ul>
                            <li class="active"><a href="/admissions/procedure.php">입소절차 안내</a></li>
                            <li><a href="/admissions/preparation_item.php">입소 전 준비사항</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-9">
                    <section class="procedure">
                        <div class="section-header">
                            <h4>입소절차 안내</h4>
                        </div>
                        <div class="section-content">
                            <h5 class="sub-title">입소대상자</h5>
                            <ol class="decimal-list">
                                <li>
                                    <span>1</span>
                                    장기요양등급 판정을 받은 어르신
                                </li>
                                <li>
                                    <span>2</span>
                                    노인성 질환이 있는 시설 등급 외의 어르신
                                </li>
                            </ol>
                            <h5 class="sub-title">입소절차 안내</h5>
                            <article class="sub-content-1">
                                <h6>
                                    장기요양등급 판정을 받은 어르신 
                                    <small>(시설급여 대상자, 본인부담금 20%)</small>
                                </h6>
                                <div class="article-content">
                                    <ol class="circle-list">
                                        <li>
                                            <div class="details">
                                                <div class="v-align">
                                                    <p>요양등급판정</p>
                                                    <small>(관할 국민건강공단)</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="details">
                                                <div class="v-align">
                                                    <p>입소 상담</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="details">
                                                <div class="v-align">
                                                    <p>입소계약</p>
                                                    <small>(계약기간 1년)</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="details">
                                                <div class="v-align">
                                                    <p>요양원 입소</p>
                                                    <small>(등급 변경 시 재계약)</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </article>
                            <article class="sub-content-2">
                                <h6>
                                    노인성 질환이 있는 시설 등급 외의 어르신
                                    <small>(본인부담금 100%)</small>
                                </h6>
                                <div class="article-content">
                                    <ol class="circle-list">
                                        <li>
                                            <div class="details">
                                                <div class="v-align">
                                                    <p>입소 상담</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="details">
                                                <div class="v-align">
                                                    <p>입소계약</p>
                                                    <small>(계약기간 1년)</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="details">
                                                <div class="v-align">
                                                    <p>요양원 입소</p>
                                                    <small>(등급 변경 시 재계약)</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </article>
                            <h5 class="sub-title">구비서류</h5>
                            <ol class="decimal-list">
                                <li>
                                    <span>1</span>
                                    장기요양인정서
                                </li>
                                <li>
                                    <span>2</span>
                                    건강보험증 사본
                                </li>
                                <li>
                                    <span>3</span>
                                    피부병 등 전염성 질환 여부 건강진단서
                                </li>
                                <li>
                                    <span>4</span>
                                    치매, 중풍 등 질환과 관련된 건강진단서
                                </li>
                                <li>
                                    <span>5</span>
                                    약물 복용 시 의사 처방전 및 복용 중인 약
                                </li>
                                <li>
                                    <span>6</span>
                                    주민등록등본 2부 (입소자 1부, 보호자 1부)
                                </li>
                            </ol>
                            <h5 class="sub-title">입소비용</h5>
                            <ol class="decimal-list">
                                <li>
                                    <span>1</span>
                                    월 생활비 : 본인부담금 + 그 외의 생활비
                                </li>
                                <li>
                                    <span>2</span>
                                    입소비용 문의는 전화상담이나 입소상담을 통해 문의 바랍니다.
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