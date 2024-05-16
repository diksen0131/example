<?php include("head.php"); ?>

<body style="min-height:auto;">
    <div id="preloader">
        <div class="loading spinner-border"></div>
    </div>
    <?php include("head_navbar.php"); ?>
    <!-- banner大圖 -->
    <div class="banner">
        <img src="./img/banner.jpg" class="banner img-fluid d-block">
    </div>
    <!-- <div style="height: 44vw;
    background-image: url('./img/banner.jpg');
    background-size: cover;">
    </div> -->
    <!-- 服務項目-交叉文字圖片介紹 -->
    <div class="cross row g-0">
        <h1 class="text-center">服務項目</h1>
        <div class="cross_text col-12 col-md-6 text-center">
            <div class="px-2">
                <h3 class="fw-bolder text-dark pb-3">運輸到全世界各大機場與港口</h3>
                <h6>提供海空運貨物承攬規劃及運送、報關、倉儲配送等整體性物流服務</h6>
            </div>
        </div>
        <div class="col-12 col-md-6 text-end">
            <img src="./img/transport.jpg" class="cross_img">
        </div>
        <div class="col-12 col-md-6">
            <img src="./img/form.jpg" class="cross_img">
        </div>
        <div class="cross_text col-12 col-md-6 text-center">
            <div class="px-2">
                <h3 class="fw-bolder text-dark pb-3">方便的航線預約系統</h3>
                <h6>能針對客戶需求提供專業、迅速、卓越的客製化專屬服務</h6>
            </div>
        </div>
    </div>
    <!-- 服務範圍 服務客戶 -->
    <div class="service row g-0 mt-5">
        <div class="col-12 col-sm-6 row g-0 p-4">
            <h1>服務範圍</h1>
            <div class="pubtextcont col-12 col-md-6 pt-3">
                <ul class="mb-0">
                    <li>航線進出口規劃</li>
                    <li>客製化服務</li>
                    <li>商業發票與裝箱單</li>
                    <li>業務代表Agent</li>
                    <li>航線運輸與進出口</li>
                    <li>後勤規劃</li>
                    <li>資料訊息交流</li>
                </ul>
            </div>
            <div class="pubtextcont col-12 col-md-6 pt-0 pt-md-3">
                <ul class="mb-0">
                    <li>後勤物流</li>
                    <li>貨物保險</li>
                    <li>倉儲管理</li>
                    <li>供應鏈管理</li>
                    <li>內陸運輸服務</li>
                    <li>貨物保稅</li>
                    <li>貨物追蹤與送達</li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-sm-6 row g-0 p-4">
            <h1>服務客戶</h1>
            <div class="pubtextcont col-12 col-md-6 pt-3">
                電子/光電產業
            </div>
            <div class="pubtextcont col-12 col-md-6 pt-3">
                電動車產業
            </div>
            <div class="pubtextcont col-12 col-md-6 pt-3">
                工具機/機械產業
            </div>
            <div class="pubtextcont col-12 col-md-6 pt-3">
                健康生技產業
            </div>
        </div>
    </div>
    <!-- 預約航線系統流程 -->
    <div class="process row g-0 d-flex justify-content-center bg-light mt-5 pb-4 pb-lg-0">
        <h1 class="text-center">預約航線流程</h1>
        <div class="rightborder">
            <i class="fas fa-user"></i>
            <br>
            <h5>1.登入或註冊</h5>
            <h6 style="color: #808080;">請先登入或註冊我們的會員</h6>
        </div>
        <div class="rightborder">
            <i class="fas fa-clipboard-list text-warning"></i>
            <br>
            <h5>2.進入預約系統</h5>
            <h6 style="color: #808080;">從右方的按鈕進入系統</h6>
        </div>
        <div>
            <i class="fas fa-clipboard-check text-success"></i>
            <br>
            <h5>3.完成報價單</h5>
            <h6 style="color: #808080;">依需求填寫完成後產出報價單</h6>
        </div>
    </div>
    <!-- 最新消息 -->
    <div class="mx-auto  w-100 my-4">
        <h1 class="text-center">最新消息&nbsp;<a href="./news.php" class="pubatag">MORE<i class="fas fa-chevron-right ps-1"></i></a></h1>
        <!-- <div  class="text-center">
                <button type="buttom" onclick="location.href='./news.php'" class="allbtn">更多<i class="fas fa-chevron-right"></i></button>
        </div>    -->
        <div class="indexnews row g-0 mb-5">
            <!-- <div class="col-12 col-md-5">
                <a href="./newscontant.php" class="list-group-item list-group-item-action">
                    <h6 class="d-inline-block">
                        <span class="badge allbtn">2021-1-21</span>
                        <br><h3>公告標題</h3>
                        <br><h6>公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
                </a>
                <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                        <span class="badge allbtn">2021-1-21</span>
                        <br><h3>公告標題</h3>
                        <br><h6>公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
                </a>
                <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                        <span class="badge allbtn">2021-1-21</span>
                        <br><h3>公告標題</h3>
                        <br><h6>公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
                </a>
            </div>
            <div class="col-12 col-md-5">
                <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                        <span class="badge allbtn">2021-1-21</span>
                        <br><h3>公告標題</h3>
                        <br><h6>公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
                </a>
                <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                        <span class="badge allbtn">2021-1-21</span>
                        <br><h3>公告標題</h3>
                        <br><h6>公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
                </a>
                <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                        <span class="badge allbtn">2021-1-21</span>
                        <br><h3>公告標題</h3>
                        <br><h6>公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
                </a>
            </div> -->
            <div class="col-12">
                <a href="./newscontant1.php" class="list-group-item list-group-item-action border-0">
                    <h6 class="d-inline-block">
                        <span class="badge allbtn">2022-00-00</span>
                        <br>
                        <h5 class="pubtextcolor">消息標題</h5>
                        <br>
                        <h6>消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
                </a>
                <a href="./newscontant1.php" class="list-group-item list-group-item-action border-0">
                    <h6 class="d-inline-block">
                        <span class="badge allbtn">2022-00-00</span>
                        <br>
                        <h5 class="pubtextcolor">消息標題</h5>
                        <br>
                        <h6>消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
                </a>
                <a href="./newscontant1.php" class="list-group-item list-group-item-action border-0">
                    <h6 class="d-inline-block">
                        <span class="badge allbtn">2022-00-00</span>
                        <br>
                        <h5 class="pubtextcolor">消息標題</h5>
                        <br>
                        <h6>消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容消息內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
                </a>
                <!-- <a href="./newscontant.php" class="list-group-item list-group-item-action">
                    <h6 class="d-inline-block">
                        <span class="badge allbtn">2021-1-21</span>
                        <br>
                        <h3>公告標題</h3>
                        <br>
                        <h6>公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
                </a>
                <a href="./newscontant.php" class="list-group-item list-group-item-action">
                    <h6 class="d-inline-block">
                        <span class="badge allbtn">2021-1-21</span>
                        <br>
                        <h3>公告標題</h3>
                        <br>
                        <h6>公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
                </a> -->
            </div>
        </div>
    </div>

    <!-- 航線系統按鈕 -->
    <!-- <div id="gosystem">
        <div class="systembtn my-5 bg-info">
            <button type="button" class="allbtn  rounded-pill" onclick="location.href='./imorexport.php'">
                <h1>點我預約</h1>
            </button>
        </div>
    </div> -->
    <?php include("footer.php") ?>
    <!-- 航線系統按鈕 -->
    <!-- <a href="./imorexport.php" class="tosystem">預約</a> -->
</body>

</html>