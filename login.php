<?php include("head.php") ?>

<body>
    <?php include("head_navbar.php") ?>

    <div class="memberform">
        <?php include("Breadcrumb.php"); ?>
        <h3>登入</h3>
        <form action="">
            <div>
                <input type="text" class="pubinput form-control" placeholder="帳號" required>
            </div>
            <div>
                <input type="password" class="pubinput form-control" placeholder="密碼" required>
            </div>
            <div class="d-flex justify-content-center">
                <div class="loginw70 w-50 d-flex align-items-center">
                    <input type="tel" class="w-50 form-control" placeholder="驗證碼" required>
                    <span class="fs-4 mx-3" style="background-color:#F49E1B;">5555</span>
                    <a href=""><i class="fas fa-redo-alt" style="color:#F49E1B; font-size:1.5rem;"></i></a>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="allbtn pubinput">登入</button>
            </div>
        </form>
        <div class="mt-4 d-flex justify-content-center">
            <div class="loginw70 w-50 d-flex justify-content-around">
                <div class="me-auto">
                    <a href="./registered.php">註冊</a>
                </div>
                <div class="ms-auto">
                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#prohibited_list">忘記密碼?</a>
                    <!-- 忘記密碼Modal -->
                    <div class="modal fade" id="prohibited_list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content text-dark w-100">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">找回密碼</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body  text-start">
                                    <form>
                                        <span>請選擇方式</span>
                                        <div class="d-flex align-items-center mt-1 mb-4">
                                            <select class="form-select rounded-0" style="width:45%;">
                                                <option value="account">帳號</option>
                                                <option value="email">信箱</option>
                                            </select>
                                            <input type="text" class="form-control  rounded-0" required>
                                        </div>
                                        <div>
                                            <button type="submit" class="allbtn">送出</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">關閉</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>