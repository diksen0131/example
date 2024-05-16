<?php include("head.php") ?>

<body>
    <?php include("head_navbar.php") ?>

    <div class="news pubcontent">
        <?php include("Breadcrumb.php"); ?>
        <div>
            <h3>最新消息</h3>
            <div class="border border-dark border-3 bg-dark" style="height:5px; width:8rem;"></div>
        </div>
        <div>
            <select class="form-select w-25 d-inline-block w-auto">
                <option value="General20">由新至舊</option>
                <option value="General40">由舊至新</option>
            </select>
            <select class="form-select w-25 d-inline-block w-auto ms-3">
                <option value="General20">國內消息</option>
                <option value="General40">國外消息</option>
            </select>
        </div>
        <div class="list-group">
            <!-- <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                    <span class="badge bg-success">公告</span>公告標題內容公告標題內容公告標題內容公告標題內容
                </h6>
                <h6 class="d-inline-block d-flex justify-content-end">2021-1-21</h6>
            </a>
            <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                    <span class="badge bg-success">公告</span>公告標題內容
                </h6>
                <h6 class="d-inline-block d-flex justify-content-end">2021-1-21</h6>
            </a>
            <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                    <span class="badge bg-success">公告</span>公告標題內容
                </h6>
                <h6 class="d-inline-block d-flex justify-content-end">2021-1-21</h6>
            </a>
            <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                    <span class="badge bg-success">公告</span>公告標題內容
                </h6>
                <h6 class="d-inline-block d-flex justify-content-end">2021-1-21</h6>
            </a>
            <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                    <span class="badge bg-success">公告</span>公告標題內容
                </h6>
                <h6 class="d-inline-block d-flex justify-content-end">2021-1-21</h6>
            </a>
            <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                    <span class="badge bg-success">公告</span>公告標題內容
                </h6>
                <h6 class="d-inline-block d-flex justify-content-end">2021-1-21</h6>
            </a>
            <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                    <span class="badge bg-success">公告</span>公告標題內容
                </h6>
                <h6 class="d-inline-block d-flex justify-content-end">2021-1-21</h6>
            </a>
            <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                    <span class="badge bg-success">公告</span>公告標題內容
                </h6>
                <h6 class="d-inline-block d-flex justify-content-end">2021-1-21</h6>
            </a>
            <a href="./newscontant.php" class="list-group-item list-group-item-action">
                <h6 class="d-inline-block">
                    <span class="badge bg-success">公告</span>公告標題內容
                </h6>
                <h6 class="d-inline-block d-flex justify-content-end">2021-1-21</h6>
            </a> -->
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
            <a href="./newscontant.php" class="list-group-item list-group-item-action">
            <h6 class="d-inline-block">
                        <span class="badge allbtn">2021-1-21</span>
                        <br><h3>公告標題</h3>
                        <br><h6>公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容公告內容</h6>
                    </h6>
                    <div class="d-flex justify-content-end align-items-center"><span>閱讀更多</span><i class="fas fa-chevron-right ps-1"></i></div>
            </a> -->
        </div>
        <div class="d-flex justify-content-center mt-4 p-0 w-100">
            <nav>
                <ul class="newspagination pagination flex-wrap">
                    <li class="page-item"><a class="page-link  text-dark" href="#">上一頁</a></li>
                    <li class="page-item"><a class="page-link  text-dark" href="#">1</a></li>
                    <li class="page-item"><a class="page-link  text-dark" href="#">2</a></li>
                    <li class="page-item"><a class="page-link  text-dark" href="#">3</a></li>
                    <li class="page-item disabled"><a class="page-link  text-dark" href="#">...</a></li>
                    <li class="page-item"><a class="page-link  text-dark" href="#">下一頁</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>