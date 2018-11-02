<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/facility.css">
</head>
<body class="sub facility">
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
                    <section class="facility-list">
                        <div class="section-header">
                            <h4>시설안내</h4>
                        </div>
                        <div class="section-content">
                            <div class="board-type-1">
                                <ul class="row">
                                    <li class="col-4">
                                        <a href="/facility/facility_view.php">
                                            <figure>
                                                <img src="/assets/images/facility/img_facility01.jpg" alt="">
                                                <figcaption>6층 옥상정원</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="/facility/facility_view.php">
                                            <figure>
                                                <img src="/assets/images/facility/img_facility02.jpg" alt="">
                                                <figcaption>5층의 모습</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="/facility/facility_view.php">
                                            <figure>
                                                <img src="/assets/images/facility/img_facility03.jpg" alt="">
                                                <figcaption>4층 간호사실과 생활실</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="/facility/facility_view.php">
                                            <figure>
                                                <img src="/assets/images/facility/img_facility04.jpg" alt="">
                                                <figcaption>3층의 모습</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="/facility/facility_view.php">
                                            <figure>
                                                <img src="/assets/images/facility/img_facility05.jpg" alt="">
                                                <figcaption>1층상담실과 로비</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="/facility/facility_view.php">
                                            <figure>
                                                <img src="/assets/images/facility/img_facility06.jpg" alt="">
                                                <figcaption>전면 사진</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <nav class="paging" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="first">
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-double-left">
                                                <span class="sr-only">첫 페이지</span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="prev">
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-left">
                                                <span class="sr-only">이전 페이지</span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next">
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-right">
                                                <span class="sr-only">다음 페이지</span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="last">
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-double-right">
                                                <span class="sr-only">마지막 페이지</span>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="search-form">
                                <form action="#">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>제목</option>
                                            <option>제목2</option>
                                        </select>
                                        <label for="search" class="sr-only">검색영역</label>
                                        <input type="text" id="search" class="form-control">
                                        <button type="submit" class="btn btn-search">
                                            <i class="icon-search">
                                                <span class="sr-only">검색버튼</span>
                                            </i>
                                        </button>
                                    </div>
                                </form>
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