<?php include("head.php"); ?>

<body>
    <?php include("head_navbar.php"); ?>

    <div class="member pubcontent">
        <div>
            <?php include("Breadcrumb.php"); ?>
        </div>
        <div class="row g-0">
            <!-- 標籤 -->
            <ul class="member_tabs nav nav-tabs">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#data" type="button">
                        會員資料</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#revise" type="button">
                        資料修改</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#password" type="button">
                        密碼修改</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#rfq" type="button">
                        詢價單列表</button>
                </li>
            </ul>

            <div class="tab-content">
                <!-- 會員資料內容 -->
                <div class="tab-pane fade show active" id="data">
                    <div class="member_data row g-0">
                        <div class="col-12 col-md-3">
                            公司名稱
                        </div>
                        <div class="col-12 col-md-9">
                            xx公司
                        </div>

                        <div class="col-12 col-md-3">
                            公司電話
                        </div>
                        <div class="col-12 col-md-9">
                        xx-xxxxxxx
                        </div>

                        <div class="col-12 col-md-3">
                            公司信箱
                        </div>
                        <div class="col-12 col-md-9">
                        xxx@gmail.com
                        </div>

                        <div class="col-12 col-md-3">
                            公司地址
                        </div>
                        <div class="col-12 col-md-9">
                        詳細地址詳細地址詳細地址
                        </div>

                        <div class="col-12 col-md-3">
                            公司傳真
                        </div>
                        <div class="col-12 col-md-9">
                        xx-xxxxxxx
                        </div>

                        <div class="col-12 col-md-3">
                            統一編號
                        </div>
                        <div class="col-12 col-md-9">
                            xxxxxx
                        </div>

                        <div class="col-12 col-md-3">
                            聯絡人姓名
                        </div>
                        <div class="col-12 col-md-9">
                            xxx
                        </div>

                        <div class="col-12 col-md-3">
                            聯絡人電話
                        </div>
                        <div class="col-12 col-md-9">
                        xxxxxxxxx
                        </div>
                    </div>
                </div>
                <!-- 資料修改內容 -->
                <div class="tab-pane fade" id="revise">
                    <div class="member_revise row g-0">
                        <div class="col-12 col-md-3">
                            公司名稱
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" value="xx公司" required>
                        </div>

                        <div class="col-12 col-md-3">
                            公司電話
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" value="123456" required>
                        </div>

                        <div class="col-12 col-md-3">
                            公司信箱
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" value="***@gmail.com" required>
                        </div>

                        <div class="col-12 col-md-3">
                            公司地址
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" value="詳細地址" required>
                        </div>

                        <div class="col-12 col-md-3">
                            公司傳真
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" value="123456" required>
                        </div>

                        <div class="col-12 col-md-3">
                            統一編號
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" value="123456" required>
                        </div>

                        <div class="col-12 col-md-3">
                            聯絡人姓名
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" value="***" required>
                        </div>

                        <div class="col-12 col-md-3">
                            聯絡人電話
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control" value="123456" required>
                        </div>
                    </div>
                </div>
                <!-- 密碼修改內容 -->
                <div class="tab-pane fade" id="password">
                    <div class="member_password row g-0">
                        <div class="col-12 col-md-3">
                            舊密碼
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" class="form-control" placeholder="請輸入舊密碼" required>
                        </div>

                        <div class="col-12 col-md-3">
                            新密碼
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" class="form-control" placeholder="請輸入新密碼" required>
                        </div>

                        <div class="col-12 col-md-3">
                            新密碼確認
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" class="form-control" placeholder="請輸入新密碼確認" required>
                        </div>
                    </div>
                </div>
                <!-- 詢價單列表內容 -->
                <div class="tab-pane fade" id="rfq">
                    <div class="member_rfq col-12 py-4 border-0 bg-light text-center">
                        <h5>尚無資料</h5>
                    </div>
                    <div class="member_rfq row g-0">

                        <div class="col-12 col-md-3">
                            預約日期：2022-xx-xx
                        </div>
                        <div class="col-12 col-md-9 justify-content-between">
                            編號：123456789
                            <div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light" data-bs-toggle="modal" data-bs-target="#detial">詳細</a>
                                <!-- Modal -->
                                <div class="modal fade" id="detial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content text-dark w-100">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">詢價單資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>方式：</th>
                                                            <td>進口</td>
                                                        </tr>
                                                        <tr>
                                                            <th>貿易條件：</th>
                                                            <td>EX-WORK</td>
                                                        </tr>
                                                        <tr>
                                                            <th>HSCode：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>品項：</th>
                                                            <td>*******</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地地址：</th>
                                                            <td>**************</td>
                                                        </tr>
                                                        <tr>
                                                            <th>運輸方式：</th>
                                                            <td>海運</td>
                                                        </tr>
                                                        <tr>
                                                            <th>起點：</th>
                                                            <td>台灣-台中港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地：</th>
                                                            <td>日本-東京港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>裝箱方式：</th>
                                                            <td>整櫃</td>
                                                        </tr>
                                                        <tr>
                                                            <th>預計出貨日：</th>
                                                            <td>2022-xx-xx</td>
                                                        </tr>
                                                        <tr>
                                                            <th>需要保險：</th>
                                                            <td>否</td>
                                                        </tr>
                                                        <tr>
                                                            <th>備註：</th>
                                                            <td class="text-break">**********************************************************************************************************************************************************</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">會員資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>公司名稱：</th>
                                                            <td>xx公司</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司信箱：</th>
                                                            <td>***@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <th>統一編號：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人姓名：</th>
                                                            <td>***</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="allbtn" data-bs-dismiss="modal">關閉</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light mt-0 mt-md-1" download="downloadfile_name">下載PDF</a>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            預約日期：2022-xx-xx
                        </div>
                        <div class="col-12 col-md-9 justify-content-between">
                            編號：123456789
                            <div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light" data-bs-toggle="modal" data-bs-target="#detial">詳細</a>
                                <!-- Modal -->
                                <div class="modal fade" id="detial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content text-dark w-100">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">詢價單資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>方式：</th>
                                                            <td>進口</td>
                                                        </tr>
                                                        <tr>
                                                            <th>貿易條件：</th>
                                                            <td>EX-WORK</td>
                                                        </tr>
                                                        <tr>
                                                            <th>HSCode：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>品項：</th>
                                                            <td>*******</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地地址：</th>
                                                            <td>**************</td>
                                                        </tr>
                                                        <tr>
                                                            <th>運輸方式：</th>
                                                            <td>海運</td>
                                                        </tr>
                                                        <tr>
                                                            <th>起點：</th>
                                                            <td>台灣-台中港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地：</th>
                                                            <td>日本-東京港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>裝箱方式：</th>
                                                            <td>整櫃</td>
                                                        </tr>
                                                        <tr>
                                                            <th>預計出貨日：</th>
                                                            <td>2022-xx-xx</td>
                                                        </tr>
                                                        <tr>
                                                            <th>需要保險：</th>
                                                            <td>否</td>
                                                        </tr>
                                                        <tr>
                                                            <th>備註：</th>
                                                            <td class="text-break">**********************************************************************************************************************************************************</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">會員資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>公司名稱：</th>
                                                            <td>xx公司</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司信箱：</th>
                                                            <td>***@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <th>統一編號：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人姓名：</th>
                                                            <td>***</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="allbtn" data-bs-dismiss="modal">關閉</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light mt-0 mt-md-1" download="downloadfile_name">下載PDF</a>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            預約日期：2022-xx-xx
                        </div>
                        <div class="col-12 col-md-9 justify-content-between">
                            編號：123456789
                            <div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light" data-bs-toggle="modal" data-bs-target="#detial">詳細</a>
                                <!-- Modal -->
                                <div class="modal fade" id="detial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content text-dark w-100">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">詢價單資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>方式：</th>
                                                            <td>進口</td>
                                                        </tr>
                                                        <tr>
                                                            <th>貿易條件：</th>
                                                            <td>EX-WORK</td>
                                                        </tr>
                                                        <tr>
                                                            <th>HSCode：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>品項：</th>
                                                            <td>*******</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地地址：</th>
                                                            <td>**************</td>
                                                        </tr>
                                                        <tr>
                                                            <th>運輸方式：</th>
                                                            <td>海運</td>
                                                        </tr>
                                                        <tr>
                                                            <th>起點：</th>
                                                            <td>台灣-台中港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地：</th>
                                                            <td>日本-東京港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>裝箱方式：</th>
                                                            <td>整櫃</td>
                                                        </tr>
                                                        <tr>
                                                            <th>預計出貨日：</th>
                                                            <td>2022-xx-xx</td>
                                                        </tr>
                                                        <tr>
                                                            <th>需要保險：</th>
                                                            <td>否</td>
                                                        </tr>
                                                        <tr>
                                                            <th>備註：</th>
                                                            <td class="text-break">**********************************************************************************************************************************************************</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">會員資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>公司名稱：</th>
                                                            <td>xx公司</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司信箱：</th>
                                                            <td>***@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <th>統一編號：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人姓名：</th>
                                                            <td>***</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="allbtn" data-bs-dismiss="modal">關閉</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light mt-0 mt-md-1" download="downloadfile_name">下載PDF</a>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            預約日期：2022-xx-xx
                        </div>
                        <div class="col-12 col-md-9 justify-content-between">
                            編號：123456789
                            <div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light" data-bs-toggle="modal" data-bs-target="#detial">詳細</a>
                                <!-- Modal -->
                                <div class="modal fade" id="detial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content text-dark w-100">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">詢價單資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>方式：</th>
                                                            <td>進口</td>
                                                        </tr>
                                                        <tr>
                                                            <th>貿易條件：</th>
                                                            <td>EX-WORK</td>
                                                        </tr>
                                                        <tr>
                                                            <th>HSCode：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>品項：</th>
                                                            <td>*******</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地地址：</th>
                                                            <td>**************</td>
                                                        </tr>
                                                        <tr>
                                                            <th>運輸方式：</th>
                                                            <td>海運</td>
                                                        </tr>
                                                        <tr>
                                                            <th>起點：</th>
                                                            <td>台灣-台中港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地：</th>
                                                            <td>日本-東京港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>裝箱方式：</th>
                                                            <td>整櫃</td>
                                                        </tr>
                                                        <tr>
                                                            <th>預計出貨日：</th>
                                                            <td>2022-xx-xx</td>
                                                        </tr>
                                                        <tr>
                                                            <th>需要保險：</th>
                                                            <td>否</td>
                                                        </tr>
                                                        <tr>
                                                            <th>備註：</th>
                                                            <td class="text-break">**********************************************************************************************************************************************************</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">會員資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>公司名稱：</th>
                                                            <td>xx公司</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司信箱：</th>
                                                            <td>***@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <th>統一編號：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人姓名：</th>
                                                            <td>***</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="allbtn" data-bs-dismiss="modal">關閉</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light mt-0 mt-md-1" download="downloadfile_name">下載PDF</a>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            預約日期：2022-xx-xx
                        </div>
                        <div class="col-12 col-md-9 justify-content-between">
                            編號：123456789
                            <div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light" data-bs-toggle="modal" data-bs-target="#detial">詳細</a>
                                <!-- Modal -->
                                <div class="modal fade" id="detial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content text-dark w-100">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">詢價單資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>方式：</th>
                                                            <td>進口</td>
                                                        </tr>
                                                        <tr>
                                                            <th>貿易條件：</th>
                                                            <td>EX-WORK</td>
                                                        </tr>
                                                        <tr>
                                                            <th>HSCode：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>品項：</th>
                                                            <td>*******</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地地址：</th>
                                                            <td>**************</td>
                                                        </tr>
                                                        <tr>
                                                            <th>運輸方式：</th>
                                                            <td>海運</td>
                                                        </tr>
                                                        <tr>
                                                            <th>起點：</th>
                                                            <td>台灣-台中港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地：</th>
                                                            <td>日本-東京港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>裝箱方式：</th>
                                                            <td>整櫃</td>
                                                        </tr>
                                                        <tr>
                                                            <th>預計出貨日：</th>
                                                            <td>2022-xx-xx</td>
                                                        </tr>
                                                        <tr>
                                                            <th>需要保險：</th>
                                                            <td>否</td>
                                                        </tr>
                                                        <tr>
                                                            <th>備註：</th>
                                                            <td class="text-break">**********************************************************************************************************************************************************</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">會員資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>公司名稱：</th>
                                                            <td>xx公司</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司信箱：</th>
                                                            <td>***@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <th>統一編號：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人姓名：</th>
                                                            <td>***</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="allbtn" data-bs-dismiss="modal">關閉</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light mt-0 mt-md-1" download="downloadfile_name">下載PDF</a>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            預約日期：2022-xx-xx
                        </div>
                        <div class="col-12 col-md-9 justify-content-between">
                            編號：123456789
                            <div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light" data-bs-toggle="modal" data-bs-target="#detial">詳細</a>
                                <!-- Modal -->
                                <div class="modal fade" id="detial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content text-dark w-100">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">詢價單資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>方式：</th>
                                                            <td>進口</td>
                                                        </tr>
                                                        <tr>
                                                            <th>貿易條件：</th>
                                                            <td>EX-WORK</td>
                                                        </tr>
                                                        <tr>
                                                            <th>HSCode：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>品項：</th>
                                                            <td>*******</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地地址：</th>
                                                            <td>**************</td>
                                                        </tr>
                                                        <tr>
                                                            <th>運輸方式：</th>
                                                            <td>海運</td>
                                                        </tr>
                                                        <tr>
                                                            <th>起點：</th>
                                                            <td>台灣-台中港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地：</th>
                                                            <td>日本-東京港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>裝箱方式：</th>
                                                            <td>整櫃</td>
                                                        </tr>
                                                        <tr>
                                                            <th>預計出貨日：</th>
                                                            <td>2022-xx-xx</td>
                                                        </tr>
                                                        <tr>
                                                            <th>需要保險：</th>
                                                            <td>否</td>
                                                        </tr>
                                                        <tr>
                                                            <th>備註：</th>
                                                            <td class="text-break">**********************************************************************************************************************************************************</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">會員資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>公司名稱：</th>
                                                            <td>xx公司</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司信箱：</th>
                                                            <td>***@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <th>統一編號：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人姓名：</th>
                                                            <td>***</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="allbtn" data-bs-dismiss="modal">關閉</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light mt-0 mt-md-1" download="downloadfile_name">下載PDF</a>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            預約日期：2022-xx-xx
                        </div>
                        <div class="col-12 col-md-9 justify-content-between">
                            編號：123456789
                            <div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light" data-bs-toggle="modal" data-bs-target="#detial">詳細</a>
                                <!-- Modal -->
                                <div class="modal fade" id="detial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content text-dark w-100">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">詢價單資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>方式：</th>
                                                            <td>進口</td>
                                                        </tr>
                                                        <tr>
                                                            <th>貿易條件：</th>
                                                            <td>EX-WORK</td>
                                                        </tr>
                                                        <tr>
                                                            <th>HSCode：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>品項：</th>
                                                            <td>*******</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地地址：</th>
                                                            <td>**************</td>
                                                        </tr>
                                                        <tr>
                                                            <th>運輸方式：</th>
                                                            <td>海運</td>
                                                        </tr>
                                                        <tr>
                                                            <th>起點：</th>
                                                            <td>台灣-台中港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地：</th>
                                                            <td>日本-東京港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>裝箱方式：</th>
                                                            <td>整櫃</td>
                                                        </tr>
                                                        <tr>
                                                            <th>預計出貨日：</th>
                                                            <td>2022-xx-xx</td>
                                                        </tr>
                                                        <tr>
                                                            <th>需要保險：</th>
                                                            <td>否</td>
                                                        </tr>
                                                        <tr>
                                                            <th>備註：</th>
                                                            <td class="text-break">**********************************************************************************************************************************************************</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">會員資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>公司名稱：</th>
                                                            <td>xx公司</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司信箱：</th>
                                                            <td>***@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <th>統一編號：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人姓名：</th>
                                                            <td>***</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="allbtn" data-bs-dismiss="modal">關閉</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light mt-0 mt-md-1" download="downloadfile_name">下載PDF</a>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            預約日期：2022-xx-xx
                        </div>
                        <div class="col-12 col-md-9 justify-content-between">
                            編號：123456789
                            <div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light" data-bs-toggle="modal" data-bs-target="#detial">詳細</a>
                                <!-- Modal -->
                                <div class="modal fade" id="detial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content text-dark w-100">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">詢價單資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>方式：</th>
                                                            <td>進口</td>
                                                        </tr>
                                                        <tr>
                                                            <th>貿易條件：</th>
                                                            <td>EX-WORK</td>
                                                        </tr>
                                                        <tr>
                                                            <th>HSCode：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>品項：</th>
                                                            <td>*******</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地地址：</th>
                                                            <td>**************</td>
                                                        </tr>
                                                        <tr>
                                                            <th>運輸方式：</th>
                                                            <td>海運</td>
                                                        </tr>
                                                        <tr>
                                                            <th>起點：</th>
                                                            <td>台灣-台中港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>目的地：</th>
                                                            <td>日本-東京港</td>
                                                        </tr>
                                                        <tr>
                                                            <th>裝箱方式：</th>
                                                            <td>整櫃</td>
                                                        </tr>
                                                        <tr>
                                                            <th>預計出貨日：</th>
                                                            <td>2022-xx-xx</td>
                                                        </tr>
                                                        <tr>
                                                            <th>需要保險：</th>
                                                            <td>否</td>
                                                        </tr>
                                                        <tr>
                                                            <th>備註：</th>
                                                            <td class="text-break">**********************************************************************************************************************************************************</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="member_table table">
                                                    <thead class="pubcolor">
                                                        <tr>
                                                            <th class="border-0" colspan="2">會員資料</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>公司名稱：</th>
                                                            <td>xx公司</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>公司信箱：</th>
                                                            <td>***@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <th>統一編號：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人姓名：</th>
                                                            <td>***</td>
                                                        </tr>
                                                        <tr>
                                                            <th>聯絡人電話：</th>
                                                            <td>123456</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer border-0">
                                                <button type="button" class="allbtn" data-bs-dismiss="modal">關閉</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="d-inline-block allbtn pubatag text-light mt-0 mt-md-1" download="downloadfile_name">下載PDF</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4 p-0">
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

            </div>

        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>