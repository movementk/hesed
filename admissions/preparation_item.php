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
                            <li><a href="/admissions/procedure.php">입소절차 안내</a></li>
                            <li class="active"><a href="/admissions/preparation_item.php">입소 전 준비사항</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-9">
                    <section class="preparation-item">
                        <div class="section-header">
                            <h4>입소 전 준비사항</h4>
                        </div>
                        <div class="section-content">
                            <h5 class="sub-title">준비사항</h5>
                            <p class="summary">어르신을 요양원에 모시기 전에 해야할 일에 대해 안내해드립니다.</p>
                            <ol class="decimal-list">
                                <li>
                                    <span>1</span>
                                    가족대표 1인을 정한다.
                                </li>
                                <li>
                                    <span>2</span>
                                    가족대표가 요양원 몇 곳을 방문하여 상담을 한다.
                                </li>
                                <li>
                                    <span>3</span>
                                    방문한 곳들을 비교해 본다.
                                </li>
                                <li>
                                    <span>4</span>
                                    한곳을 정하고 다시 입소 상담을 한다.
                                </li>
                                <li>
                                    <span>5</span>
                                    입소하시는 일자가 정해지면 개인물품을 정리하여 가져가실 물건을 잘 준비해 둔다.
                                </li>
                                <li>
                                    <span>6</span>
                                    입소하시기 전에 건강진단을 받는다.
                                </li>
                                <li>
                                    <span>6</span>
                                    입소하신 후 적응기간 동안 가족들이 어르신에게 신뢰감을 줄 수 있도록 자주 찾아뵌다.
                                    <p class="attention">
                                        단, 이때 가족 여러분이 함께 오기보다는 날을 정하고 순번을 두어 어르신에게 낯선 곳이 아니라는 것을 <br>알려드리도록 노력해야 합니다.
                                    </p>
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