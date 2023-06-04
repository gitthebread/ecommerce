<div id="header" style="position: relative !important; width: 100%">
    <div class="header-top-wrap">
        <div class="header-top-left">
            <p style="font-size: 20px">Kênh người bán</p>
        </div>

        <div class="header-top-right">
            
            <div style='align-item: middle'>
            
                <a style='margin-right: 15px' href="home.php">Trang chủ người bán</a>
                <a href="../../index.php">Trang chủ người mua</a>
                <a href="https://www.facebook.com/nam.thang.7121" target="_blank"><i class="media-header fa-solid fa-bell"></i></a>
                <i class="fa-solid fa-user"></i>
                
                <?php
                if (isset($_SESSION['username'])) {
                    echo
                    "
                        <label for='ckb_tk' id='lb_tk'>" . $_SESSION['username'] . "</label>
                        
                    ";
                }
                
                ?>
                <a href='logout-handle.php'><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>


        </div>
    </div>

</div>