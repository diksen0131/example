<?php include("head.php") ?>

<body>
    <?php include("head_navbar.php") ?>

    <div class="memberform">
        <div class="ps-4">
            <?php include("Breadcrumb.php"); ?>
        </div>
        <h3>註冊</h3>
        <form action="" class="row g-0">
            <div class="col-12 text-start px-4">
                <i class="fas fa-check-circle">為必填欄位</i>
            </div>
            <div class="col-12 col-xl-6 px-4">
                <label><i class="fas fa-check-circle"></i>公司名稱</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="col-12 col-xl-6 px-4">
                <label><i class="fas fa-check-circle"></i>公司電話</label>
                <input type="tel" class="form-control" required>
            </div>
            <div class="col-12 col-xl-6 px-4">
                <label><i class="fas fa-check-circle"></i>會員帳號</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="col-12 col-xl-6 px-4">
                <label><i class="fas fa-check-circle"></i>會員密碼</label>
                <input type="password" class="form-control" required>
            </div>
            <div class="col-12 col-xl-6 px-4">
                <label><i class="fas fa-check-circle"></i>密碼確認</label>
                <input type="password" class="form-control" required>
            </div>
            <div class="col-12 col-xl-6 px-4">
                <label><i class="fas fa-check-circle"></i>公司信箱</label>
                <input type="email" class="form-control" required>
            </div>
            <div class="col-12 col-xl-6 px-4">
                <label>公司地址</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-12 col-xl-6 px-4">
                <label>公司傳真</label>
                <input type="tel" class="form-control">
            </div>
            <div class="col-12 col-xl-6 px-4">
                <label>統一編號</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-12 col-xl-6 px-4">
                <label>聯絡人姓名</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-12 col-xl-6 px-4">
                <label>聯絡人電話</label>
                <input type="tel" class="form-control">
            </div>
            <div class="d-flex align-items-center justify-content-center mt-4 px-4">
                <input type="tel" class="codeinput w-25 form-control" placeholder="驗證碼" required>
                <span class="fs-4 mx-3" style="background-color:#F49E1B;">5555</span>
                <a href=""><i class="fas fa-redo-alt" style="color:#F49E1B; font-size:1.5rem;"></i></a>
            </div>
            <div class="mt-4">
                <button class="allbtn" type="submit">送出</button>
            </div>
        </form>

    </div>
    <?php include("footer.php") ?>
</body>

</html>