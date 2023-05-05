<div id="header" style="position: relative !important; width: 100%">
    <div class="header-top-wrap">
        <div class="header-top-left">
            <p>Kênh người bán</p>
        </div>
        <div class="header-top-right">
            <div>
                <a href="https://www.facebook.com/nam.thang.7121" target="_blank"><i class="media-header fa-solid fa-bell"></i></a>
                <i class="fa-solid fa-user"></i>
                <?php
                if (isset($_SESSION['username'])) {
                    echo
                    "
                        <label for='ckb_tk' id='lb_tk'>" . $_SESSION['username'] . "</label><br>
                        <input type='checkbox' id='ckb_tk'>
                        <div id='tk'>
                            <a href='#'>Cài đặt tài khoản</a><br>   
                            <a href='../DangXuat'>Đăng xuất</a>
                        </div>
                    ";
                }
                ?>

            </div>


        </div>
    </div>

</div>