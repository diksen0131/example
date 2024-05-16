<?php include("head.php"); ?>

<body>
    <?php include("head_navbar.php"); ?>

    <div class="faq pubcontent">
        <?php include("Breadcrumb.php"); ?>
        <div>
            <h3>客戶問與答</h3>
            <div class="border border-dark border-3 bg-dark" style="height:5px; width:8rem;"></div>
        </div>
        <div>
            <div class="accordion accordion-flush" id="faq">
                <!-- <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div> -->
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#member" aria-expanded="false" aria-controls="member">
                        如何成為會員?
                    </button>
                    <div id="member" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            只需要在官網註冊即可加入會員<br>
                            <a href="./registered.php">立即註冊</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#serives" aria-expanded="false" aria-controls="serives">
                        我們提供哪些運輸方式?
                    </button>
                    <div id="serives" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            我們提供空運及海運的運輸方式
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prohibited" aria-expanded="false" aria-controls="prohibited">
                        禁止與限制物品
                    </button>
                    <div id="prohibited" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            法律因應國家而異。下面的物品列表不能運輸，或者對它們的運輸方式或運輸量有限制。當我們收到承運人的通知時，我們會盡力更新此頁面，但最終您有責任確保您購買的物品符合所有政府和承運人的限制
                            <br>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#prohibited_list">物品列表</a>
                            <!-- 違禁品Modal -->
                            <div class="modal fade" id="prohibited_list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content text-dark w-100">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">危險物品</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <h6>1.爆炸物品</h6>
                                            <ul>
                                                <li>有整體爆炸危險之物品</li>
                                                <li>有拋射危險，但無整體爆炸危險之物品</li>
                                                <li>有燃燒和輕微爆炸或輕微拋射危險，但無整體爆炸危險之物品</li>
                                                <li>無重大危險之物品</li>
                                                <li>很不敏感，有整體爆炸危險之物品</li>
                                                <li>極不敏感，無整體爆炸危險之物品</li>
                                            </ul>
                                            <h6>2.氣體</h6>
                                            <ul>
                                                <li>易燃氣體</li>
                                                <li>非易燃，非毒氣體</li>
                                                <li>有毒氣體</li>
                                            </ul>
                                            <h6>3.易燃液體</h6>
                                            <h6>4.易燃固體、自燃物質、禁水性物質</h6>
                                            <h6>5.氧化物質和有機過氧化物</h6>
                                            <h6>6.有毒和感染性物質</h6>
                                            <h6>7.放射性材料</h6>
                                            <h6>8.腐蝕性物質</h6>
                                            <h6>9.雜項危險物質和物品</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="allbtn" data-bs-dismiss="modal">關閉</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#system" aria-expanded="false" aria-controls="system">
                        如何預約航線?
                    </button>
                    <div id="system" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            請先<a href="./login.php">登入</a>我們的會員，然後點選網頁右方的預約按鈕進入系統，依需求填寫完成後產出報價單
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Incoterms" aria-expanded="false" aria-controls="Incoterms">
                        貿易條件
                    </button>
                    <div id="Incoterms" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            國貿條規(INCOTERMS)是規定國際貿易中的買賣雙方基本義務，例如貨物運送給買方、運輸成本、貨物丟失和損壞的責任，以及保險費用
                            <br>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Incoterms_list">查看條件</a>
                            <!-- 違禁品Modal -->
                            <div class="modal fade" id="Incoterms_list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content text-dark w-100">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">貿易條件</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <h6 class="fw-bold">以下為Incoterms 2020的貿易條件</h6>
                                            <br>
                                            <h6>適用任何運輸的規定</h6>
                                            <ul>
                                                <li>EXW 工廠交貨條件</li>
                                                <li>FCA 貨交運送人條件</li>
                                                <li>CPT 運費付訖條件</li>
                                                <li>CIP 運保費付訖條件</li>
                                                <li>DAP 目的地交貨條件</li>
                                                <li>DPU 目的地卸貨後交貨條件</li>
                                                <li>DDP 完稅後交貨條件</li>
                                            </ul>
                                            <h6>海道及內陸水道運輸規定</h6>
                                            <ul>
                                                <li>FAS 船邊交貨條件</li>
                                                <li>FOB 船上交貨條件</li>
                                                <li>CFR 運費在內條件</li>
                                                <li>CIF 運保費在內條件</li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="allbtn" data-bs-dismiss="modal">關閉</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#air" aria-expanded="false" aria-controls="air">
                        空運材積如何計算?
                    </button>
                    <div id="air" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            國際航空運輸協會(IATA)統一制定了材積重(Volumetric Weight)的計算公式：<br>
                            長×寬×高(公分)/6000 = 材積重量(公斤)
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sea" aria-expanded="false" aria-controls="sea">
                        海運材積如何計算?
                    </button>
                    <div id="sea" class="accordion-collapse collapse" data-bs-parent="#faq">
                        <div class="accordion-body">
                            長x寬x高（公分）/1000000 = 材積重量(CBM立方米)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>