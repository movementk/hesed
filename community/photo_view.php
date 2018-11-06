<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/community.css">
</head>
<body class="sub community">
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
                            <h3>시설안내</h3>
                            <small>Nursing Center Hesed House</small>
                        </div>
                        <ul>
                            <li class="active"><a href="/facility/facility_list.php">시설안내</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-9">
                    <section class="photo-view">
                        <div class="section-header">
                            <h4>시설안내</h4>
                        </div>
                        <div class="section-content">
                            <article class="board-view">
                                <div class="view-header">
                                    <h5>게시글의 제목이 노출되는 영역입니다.</h5>
                                    <ul>
                                        <li class="usr">헤세드하우스</li>
                                        <li class="date">18-10-10</li>
                                        <li class="hit">123</li>
                                    </ul>
                                </div>
                                <div class="view-body">
                                    요양원 헤세드하우스는 노령화로 인해 거동이 불편하시면서 <br>
                                    가족들의 보살핌이 여의치 않거나, 치매, 중풍, 뇌졸중 등 노인성 <br>
                                    질환으로 고생하시는 어르신들과 그 가족을 위한 노인전문 <br>요양시설입니다.<br><br>
                                    좋은 시설과 최고의 서비스로 어르신들의 심신안정과 휴식을 <br>
                                    취할 수 있도록 내 부모처럼, 편안한 마음으로 정성껏 모실 것을 <br>약속드립니다.
                                </div>
                                <dl class="attach">
                                    <dt>첨부파일</dt>
                                    <dd>
                                        <a href="#">첨부파일.hwp</a>
                                        <a href="#">첨부파일.hwp</a>
                                        <a href="#">첨부파일.hwp</a>
                                    </dd>
                                </dl>
                                <ul class="pagelink">
                                    <li class="prev">
                                        <dl>
                                            <dt>이전글</dt>
                                            <dd>
                                                <a href="#">이전글이 없습니다.</a>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li class="next">
                                        <dl>
                                            <dt>다음글</dt>
                                            <dd>
                                                <a href="#">다음글이 없습니다.</a>
                                            </dd>
                                        </dl>
                                    </li>
                                </ul>
                            </article>
                            <div class="btn-area">
                                <p>
                                    <a href="/community/photo_list.php" class="btn btn-default" role="button">목록으로</a>
                                </p>
                            </div>
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