<?php include("head.php") ?>

<body>
    <?php include("head_navbar.php") ?>
    <div class="row  g-0">
        <div class="overseas pubcontent">
            <?php include("Breadcrumb.php"); ?>
            <div class="pubTextinBorder mx-auto">
                <h3>聯絡我們</h3>
            </div>
        </div>

        <div></div>
        <div class="col-12 col-md-6">
            <div class="d-flex justify-content-center px-5" style="flex-direction: column;">
                <div class="row g-0 text-start">
                    <div class="col-12 col-md-6">
                        <i class="fas fa-phone"></i> 電話：xx-xxxxxxx
                    </div>
                    <div class="col-12 col-md-6">
                        <i class="fas fa-fax"></i> 傳真：xx-xxxxxxx
                    </div>
                    <div class="col-12 col-md-6">
                        <i class="fas fa-envelope"></i> 信箱：xxx@gmail.com
                    </div>
                    <div class="col-12 col-md-6">
                        <i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3642.435897329162!2d120.54638471536684!3d24.086161781782618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346938bfce49e215%3A0x1b7bdf1b752c6d21!2zNTAw5b2w5YyW57ij5b2w5YyW5biC6Zm95piO6KGXMTYx5be3MjPomZ8!5e0!3m2!1szh-TW!2stw!4v1664516930444!5m2!1szh-TW!2stw" width="100%" height="448" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
            </div>
        </div>
        <div class="col-12 col-md-6">
            <form action="" class="d-grid gap-2 mx-auto px-5">
                <div>
                    <span>聯絡人</span>
                    <input type="text" class="form-control" placeholder="請輸入聯絡人">
                </div>
                <div>
                    <span>聯絡電話</span>
                    <input type="tel" class="form-control" placeholder="請輸入電話">
                </div>
                <div>
                    <span>聯絡信箱</span>
                    <input type="email" class="form-control" placeholder="請輸入信箱">
                </div>
                <div>
                    <span>留言</span>
                    <textarea class="form-control" placeholder="請簡述您的需求" style="height: 10rem;"></textarea>
                </div>
                <div>
                    <button type="submit" class="allbtn">送出</button>
                </div>
            </form>
        </div>
        <div class="overseas pubcontent col-12  mt-5">
            <!-- <div class="text-center">
                <h3>服務據點</h3>
                <div class="border border-dark border-3 mx-auto bg-dark" style="height:5px; width:8rem;"></div> 
            </div> -->

            <div class="pubTextinBorder mx-auto">
                <h3>服務據點</h3>
            </div>

            <div>
                <ul class="member_tabs nav nav-tabs">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#asia" type="button">
                            亞洲</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#US" type="button">
                            美國</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#EU" type="button">
                            歐洲</button>
                    </li>
                    <!-- <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Africa" type="button">
                            非洲</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Oceania" type="button">
                            大洋洲</button>
                    </li> -->
                </ul>
            </div>

            <div class="tab-content">
                <!-- 亞洲據點內容 -->
                <div class="tab-pane fade show active" id="asia">
                    <div class="row g-0">
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="US">
                    <div class="row g-0">
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="EU">
                    <div class="row g-0">
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h4 class="my-2">服務據點</h4>
                            <h6><i class="fas fa-phone"></i> 電話：xx-xxxxxxx</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：xxx@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：詳細地址詳細地址詳細地址</h6>
                        </div>
                    </div>
                </div>

                <!-- <div class="tab-pane fade" id="Africa">
                    <div class="row g-0">
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h3 class="my-2">服務據點</h3>
                            <h6><i class="fas fa-phone"></i> 電話：123456678</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：****@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：EVERGREEN SHIPPING AGENCY (EUROPE) GMBH AUSTRIA BRANCH
                                THERESIANUMGASSE 7 , VIENNA , VIENNA 1040</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h3 class="my-2">服務據點</h3>
                            <h6><i class="fas fa-phone"></i> 電話：123456678</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：****@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：EVERGREEN SHIPPING AGENCY (EUROPE) GMBH AUSTRIA BRANCH
                                THERESIANUMGASSE 7 , VIENNA , VIENNA 1040</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h3 class="my-2">服務據點</h3>
                            <h6><i class="fas fa-phone"></i> 電話：123456678</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：****@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：EVERGREEN SHIPPING AGENCY (EUROPE) GMBH AUSTRIA BRANCH
                                THERESIANUMGASSE 7 , VIENNA , VIENNA 1040</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h3 class="my-2">服務據點</h3>
                            <h6><i class="fas fa-phone"></i> 電話：123456678</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：****@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：EVERGREEN SHIPPING AGENCY (EUROPE) GMBH AUSTRIA BRANCH
                                THERESIANUMGASSE 7 , VIENNA , VIENNA 1040</h6>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Oceania">
                    <div class="row g-0">
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h3 class="my-2">服務據點</h3>
                            <h6><i class="fas fa-phone"></i> 電話：123456678</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：****@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：EVERGREEN SHIPPING AGENCY (EUROPE) GMBH AUSTRIA BRANCH
                                THERESIANUMGASSE 7 , VIENNA , VIENNA 1040</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h3 class="my-2">服務據點</h3>
                            <h6><i class="fas fa-phone"></i> 電話：123456678</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：****@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：EVERGREEN SHIPPING AGENCY (EUROPE) GMBH AUSTRIA BRANCH
                                THERESIANUMGASSE 7 , VIENNA , VIENNA 1040</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h3 class="my-2">服務據點</h3>
                            <h6><i class="fas fa-phone"></i> 電話：123456678</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：****@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：EVERGREEN SHIPPING AGENCY (EUROPE) GMBH AUSTRIA BRANCH
                                THERESIANUMGASSE 7 , VIENNA , VIENNA 1040</h6>
                        </div>
                        <div class="col-12 col-lg-6 p-2">
                            <span class="badge allbtn">國家</span>
                            <br>
                            <h3 class="my-2">服務據點</h3>
                            <h6><i class="fas fa-phone"></i> 電話：123456678</h6>
                            <h6><i class="fas fa-envelope"></i> 信箱：****@gmail.com</h6>
                            <h6><i class="fas fa-location-arrow"></i> 地址：EVERGREEN SHIPPING AGENCY (EUROPE) GMBH AUSTRIA BRANCH
                                THERESIANUMGASSE 7 , VIENNA , VIENNA 1040</h6>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

    </div>
    <?php include("footer.php") ?>
</body>

</html>