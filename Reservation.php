<?php include("head.php"); ?>

<body>
    <?php include("head_navbar.php");
    // if ($_GET['port'] == 'import') {
    //     $port = "進口";
    // } else if ($_GET['port'] == 'export') {
    //     $port = "出口";
    // }
    ?>
    <!-- 中間form表單 -->
    <form class="Reservationform">
        <?php include("Breadcrumb.php"); ?>
        <!-- <h1 class="text-center"><?php echo $port; ?></h1> -->
        <div class="Reservationform_table">
            <!-- 進口或出口 -->
            <div>
                <span>進口或出口</span>
                <select class="dataselet form-select">
                    <option value="1">進口</option>
                    <option value="2">出口</option>
                </select>
            </div>
            <!-- 貿易條件下拉選單 -->
            <div>
                <span>貿易條件</span>
                <select class="dataselet form-select">
                    <option value="1">EX-WORK</option>
                    <option value="2">CIF</option>
                    <option value="3">C&F</option>
                    <option value="4">FOB</option>
                    <option value="5">DP</option>
                    <option value="6">DAP</option>
                    <option value="7">DDU</option>
                    <option value="8">DDP</option>
                </select>
            </div>
            <!-- hs code 品項 Destination address -->
            <div class="row g-4">
                <div class="mt-3"></div>
                <div class="col-12 col-md-4">
                    <input type="text" class="form-control col-4" placeholder="HSCode" required>
                </div>
                <div class="col-12 col-md-4">
                    <input type="text" class="form-control col-4" placeholder="品項" required>
                </div>
                <div class="col-12 col-md-4">
                    <input type="text" class="form-control col-4" placeholder="目的地地址" required>
                </div>
            </div>


            <!-- <div class="row">
                <span>運輸方式</span>
                <div class="col-6">
                    <button class="collapsingle allbtn mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#air">空運</button>
                </div>
                <div class="col-6">
                    <button class="collapsingle allbtn mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#sea">海運</button>
                </div>
            </div> -->

            <!-- 運輸方式 空運or海運 -->
            <div class="row g-0">
                <div class="col-6">
                    <label>
                        <input class="inputbtn portradio" name="port" type="radio" value="air" required>
                        <span>空運</span>
                    </label>
                </div>
                <div class="col-6">
                    <label>
                        <input class="inputbtn portradio" name="port" type="radio" value="sea" required>
                        <span>海運</span>
                    </label>
                </div>
            </div>



            <!-- 空運-運輸地點 -->
            <div class="air port">
                <div class="row g-0">
                    <!-- <span>運輸地點</span> -->
                    <div class="mx-auto col-12 col-md-6 mt-2">
                        <span>起始國家</span>
                        <select class="form-select">
                            <option disabled class="bg-secondary text-light">東亞地區</option>
                            <option value="General20">台灣</option>
                            <option value="General20">日本</option>
                            <option disabled class="bg-secondary text-light">北美洲</option>
                            <option value="General20">美國</option>
                            <option value="General20">加拿大</option>
                        </select>
                    </div>
                    <div class="mx-auto col-12 col-md-6 mt-2">
                        <span>起始機場</span>
                        <select class="form-select">
                            <option value="General20">松山TSA</option>
                            <option value="General40">台北TPE</option>
                            <option value="General40">台中RMQ</option>
                            <option value="General40">高雄KHH</option>
                        </select>
                    </div>
                    <div class="mx-auto col-12 col-md-6 mt-2">
                        <span>到達國家</span>
                        <select class="form-select">
                            <option disabled class="bg-secondary text-light">東亞地區</option>
                            <option value="General20">日本</option>
                            <option value="General20">台灣</option>
                            <option disabled class="bg-secondary text-light">北美洲</option>
                            <option value="General20">美國</option>
                            <option value="General20">加拿大</option>
                        </select>
                    </div>
                    <div class="mx-auto col-12 col-md-6 mt-2">
                        <span>到達機場</span>
                        <select class="form-select">
                            <option value="General20">成田NRT</option>
                            <option value="General40">東京HND</option>
                            <option value="General40">關西KIX</option>
                            <option value="General40">中部NGO</option>
                            <option value="General40">新千歲CTS</option>
                            <option value="General40">福岡FUK</option>
                        </select>
                    </div>
                    <!-- 空運-裝箱方式 -->

                    <!-- <div class="col-6 pt-3">
                    <span>裝箱方式</span><br>
                        <button class="collapsingle allbtn mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#air_LCL">散貨</button>
                    </div> -->


                    <div class="col-6 pt-3">
                        <span>裝箱方式</span><br>
                        <label class="pt-2">
                            <input class="inputbtn airloadradio" name="Load" type="radio" value="airload" required>
                            <span>散貨</span>
                        </label>
                    </div>


                    <div class="airload pt-4">
                        <div id="airlist">
                            <div class="airlist_var mt-3">
                                <div name="airlist_1" id="airlist_1" class="row g-0 d-flex justify-content-center align-items-center border border-1 py-2 px-1">
                                    <div class="col-12 d-flex align-items-center pb-2">
                                        <i class="airlist_del ms-auto text-danger fas fa-times-circle" style="font-size:1.5rem;"></i>
                                    </div>
                                    <div class="col-12 col-md-6 mb-2 p-0 pe-md-1">
                                        <input type="number" class="form-control d-block " placeholder="數量" required>
                                    </div>
                                    <div class="col-12 col-md-6 mb-2 p-0 ps-md-1">
                                        <input type="number" class="form-control d-block " placeholder="單筆重量(kg)" required>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="number" class="form-control" placeholder="長(CM)" required>
                                    </div>
                                    <div class="col-12 col-md-1 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-times"></i>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="number" class="form-control" placeholder="寬(CM)" required>
                                    </div>
                                    <div class="col-12 col-md-1 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-times"></i>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="number" class="form-control" placeholder="高(CM)" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 id="test" class="text-center">材積重量(V.W):0 kg<br>總重量:0 kg</h5>
                        <div class="after-add-more mt-2">
                            <div class="text-primary text-center fw-bold">
                                <span class="airlist_add">更多</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 海運-運輸地點  -->
            <div class="sea port">
                <div class="row g-0">
                    <!-- <span>運輸地點</span> -->
                    <div class="mx-auto col-12 col-md-6 mt-2">
                        <span>起始國家</span>
                        <select class="form-select">
                            <option disabled class="bg-secondary text-light">亞洲</option>
                            <option value="General20">台灣</option>
                            <option value="General20">日本</option>
                            <option disabled class="bg-secondary text-light">美洲</option>
                            <option value="General20">美國</option>
                            <option value="General20">加拿大</option>
                        </select>
                    </div>
                    <div class="mx-auto col-12 col-md-6 mt-2">
                        <span>起始港口</span>
                        <select class="form-select">
                            <option value="General20">高雄港</option>
                            <option value="General40">台北港</option>
                            <option value="General40">台中港</option>
                            <option value="General40">基隆港</option>
                            <option value="General40">花蓮港</option>
                        </select>
                    </div>
                    <div class="mx-auto col-12 col-md-6 mt-2">
                        <span>到達國家</span>
                        <select class="form-select">
                            <option disabled class="bg-secondary text-light">亞洲</option>
                            <option value="General20">日本</option>
                            <option value="General20">台灣</option>
                            <option disabled class="bg-secondary text-light">美洲</option>
                            <option value="General20">美國</option>
                            <option value="General20">加拿大</option>
                        </select>
                    </div>
                    <div class="mx-auto col-12 col-md-6 mt-2">
                        <span>到達港口</span>
                        <select class="form-select">
                            <option value="General20">東京港</option>
                            <option value="General40">橫濱港</option>
                            <option value="General40">名古屋港</option>
                            <option value="General40">大阪港</option>
                            <option value="General40">神戶港</option>
                            <option value="General40">福岡港</option>
                        </select>
                    </div>
                    <!-- 海運-裝箱方式 -->

                    <span class="pt-3">裝箱方式</span><br>
                    <div class="col-6">
                        <label class="pt-2">
                            <input class="inputbtn sealoadradio" name="seaLoad" type="radio" value="LCL" required>
                            <span>散貨</span>
                        </label>
                    </div>
                    <div class="col-6">
                        <label class="pt-2">
                            <input class="inputbtn sealoadradio" name="seaLoad" type="radio" value="FCL" required>
                            <span>整櫃</span>
                        </label>
                    </div>



                    <div class="LCL seaLoad pt-4">
                        <div id="sealist">
                            <div class="sealist_var mt-3">
                                <div name="sealist_1" id="sealist_1" class="row g-0 d-flex justify-content-center align-items-center border border-1 py-2 px-1">
                                    <div class="col-12 d-flex align-items-center pb-2">
                                        <i class="sealist_del ms-auto text-danger fas fa-times-circle" style="font-size:1.5rem;"></i>
                                    </div>
                                    <div class="col-12 col-md-6 mb-2 p-0 pe-md-1">
                                        <input type="number" class="form-control d-block " placeholder="數量" required>
                                    </div>
                                    <div class="col-12 col-md-6 mb-2 p-0 ps-md-1">
                                        <input type="number" class="form-control d-block " placeholder="單筆重量(kg)" required>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="number" class="form-control" placeholder="長(CM)" required>
                                    </div>
                                    <div class="col-12 col-md-1 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-times"></i>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="number" class="form-control" placeholder="寬(CM)" required>
                                    </div>
                                    <div class="col-12 col-md-1 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-times"></i>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="number" class="form-control" placeholder="高(CM)" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 id="test" class="text-center">材積重量:0 CBM(立方米)<br>總重量:0 kg</h5>
                        <div class="after-add-more mt-2">
                            <div class="text-primary text-center fw-bold">
                                <span class="sealist_add">更多</span>
                            </div>
                        </div>
                    </div>

                    <div class="FCL seaLoad">
                        <div class="mx-auto mt-2">
                            <span class="text-primary fw-bold">請選擇貨櫃</span>
                            <select class="dataselet form-select">
                                <option disabled class="bg-secondary text-light">普通貨櫃</option>
                                <option value="General20">普通貨櫃-20呎</option>
                                <option value="General40">普通貨櫃-40呎</option>
                                <option disabled class="bg-secondary text-light">平板貨櫃</option>
                                <option value="FlatRack20">平板貨櫃-20呎</option>
                                <option value="FlatRack40">平板貨櫃-40呎</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="col-6 pt-3">
                        <span>裝箱方式</span><br>
                        <button class="collapsingle allbtn mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#FCL">整櫃</button>
                    </div>
                    <div class="col-6 pt-3">
                        <span></span><br>
                        <button class="collapsingle allbtn mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#LCL">散貨</button>
                    </div>
                    <div class="collapse" id="FCL">
                        <div class="mx-auto mt-2">
                            <span class="text-primary fw-bold">請選擇貨櫃</span>
                            <select class="dataselet form-select">
                                <option disabled class="bg-secondary text-light">普通貨櫃</option>
                                <option value="General20">普通貨櫃-20呎</option>
                                <option value="General40">普通貨櫃-40呎</option>
                                <option disabled class="bg-secondary text-light">平板貨櫃</option>
                                <option value="FlatRack20">平板貨櫃-20呎</option>
                                <option value="FlatRack40">平板貨櫃-40呎</option>
                            </select>
                        </div>
                    </div>
                    <div class="collapse" id="LCL">
                        <div id="list">
                            <div class="list_var mt-3">
                                <div name="list_1" id="list_1" class="row g-0 d-flex justify-content-center align-items-center border border-1 py-2 px-1">
                                    <div class="col-12 d-flex align-items-center pb-2">
                                        <i class="list_del ms-auto text-danger fas fa-times-circle" style="font-size:1.5rem;"></i>
                                    </div>
                                    <div class="col-12 col-md-6 mb-2 p-0 pe-md-1">
                                        <input type="number" class="form-control d-block " placeholder="數量" required>
                                    </div>
                                    <div class="col-12 col-md-6 mb-2 p-0 ps-md-1">
                                        <input type="number" class="form-control d-block " placeholder="單筆重量(kg)" required>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="number" class="form-control" placeholder="長(CM)" required>
                                    </div>
                                    <div class="col-12 col-md-1 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-times"></i>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="number" class="form-control" placeholder="寬(CM)" required>
                                    </div>
                                    <div class="col-12 col-md-1 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-times"></i>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <input type="number" class="form-control" placeholder="高(CM)" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 id="test" class="text-center">CBM(立方米):0<br>總重量:0kg</h5>
                        <div class="after-add-more mt-2">
                            <div class="text-primary text-center fw-bold">
                                <span class="list_add">更多</span>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>



            <!-- 預計出貨日 -->
            <div>
                <span>預計出貨日</span>
                <input id="date" class="dataselet form-control" type="date" value="" required>
            </div>
            <!-- 是否需要保險 -->
            <div>
                <span>是否需要保險</span><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="yes">
                    <label class="form-check-label" for="yes">
                        是
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="no" checked>
                    <label class="form-check-label" for="no">
                        否
                    </label>
                </div>
            </div>
            <!-- 備註 -->
            <div>
                <span>備註</span>
                <textarea class="form-control"></textarea>
            </div>

            <button class="allbtn mx-auto" type="submit"  data-bs-toggle="modal" data-bs-target="#loginfirst">送出詢價單</button>
                    <!-- 忘記密碼Modal -->
                    <div class="modal fade" id="loginfirst" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content text-dark w-100">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">請先登入</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body  text-start">
                                    <h5>請先登入或註冊我們的會員即可使用航線預約功能</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="allbtn" onclick="location.href='./login.php'">登入</button>
                                    <!-- <button type="button" class="allbtn" onclick="location.href='./login.php'">登入</button> -->
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">返回</button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </form>
    <?php include("footer.php"); ?>
</body>

</html>