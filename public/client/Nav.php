<body>
<body style="
background: url('https://shopbearrb.com/assets/storage/theme/backgroundQZK.png') 0 / cover fixed;
background-repeat: no-repeat;
">
    <div style="height: auto;min-height: 100vh;">
        <div class="sticky top-0 z-100">
          <div class="" style="    border-bottom: solid 4px #dfdddd59;
    backdrop-filter: blur(10px);
    background: rgb(183 154 154 / 32%);">
                <header class="mx-auto w-full max-w-6xl px-2 flex flex-wrap items-center py-2"
                   >
                    <div class="flex-1 flex justify-between items-center">
                        <a href="<?=BASE_URL('');?>"><img width="150" src="<?=$CMSNT->site('logo');?>"
                                class="v-logo"></a>
                    </div>
                    <?php if(empty($_SESSION['username'])) { ?>
                    <a href="<?=BASE_URL('Auth/Login');?>"
                       class="lg:hidden flex  mx-2 px-3 h-8 border-gray-400 rounded items-center text-white-800 font-bold justify-center pointer-cursor lr-btn">
                            Đăng nhập
                    </a>
                    <a href="<?=BASE_URL('Auth/Register');?>"
                        class="lg:hidden flex  mx-2 px-3 h-8 border-gray-400 rounded items-center text-white-800 font-bold justify-center pointer-cursor lr-btn">
                            Đăng ký
                    </a>
                    <?php } else { ?>
                    <a href="<?=BASE_URL('Auth/Profile');?>"
                        class="lg:hidden flex  mx-2 px-3 h-8 border-gray-400 rounded items-center text-white-800 font-bold justify-center pointer-cursor lr-btn"><span
                            class="block"><i class="fa fa-user" aria-hidden="true"></i>
                            <?=$_SESSION['username'];?> - <?=format_cash($getUser['money']);?></span></a>

                    <?php }?>
                    <label for="menu-toggle" id="toggle" class="pointer-cursor text-white-800 text-2xl lg:hidden block nav-btn">
                        <span class="h-8 w-8 justify-center items-center inline-flex rounded"><i
                                class="bx bx-menu"></i></span>
                    </label>
                   <div class="hidden md:mt-0 lg:flex lg:items-center lg:w-auto w-full" id="menu-toggle">
                        <nav class="font-bold lg:text-lg">
                            <center>
                            <ul class="lg:flex items-center justify-between text-base text-white-700 lg:pt-0">
                                <li><a href="<?=BASE_URL('');?>" class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block nav-btn">TRANG
                                        CHỦ</a></li>
                                <li><a href="<?=BASE_URL('nap-the-cao/');?>"
                                        class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block nav-btn">NẠP THẺ</a></li>
                                <li><a href="<?=BASE_URL('nap-tien-qua-ngan-hang/');?>"
                                        class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block nav-btn">NẠP TIỀN QUA BANK/MOMO</a></li>        
                                <li><a href="<?=BASE_URL('History');?>"
                                        class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block nav-btn">LỊCH SỬ MUA ACCOUNTS</a></li>
                                <?php if(isset($_SESSION['username']) && $getUser['level'] == 'admin') { ?>        
                                <li><a href="<?=BASE_URL('admin/');?>"
                                        class="lg:p-3 py-1 lg:py-2 px-2 lg:px-3 block nav-btn">PANEL ADMIN</a></li>
                                    <?php }?>
                                <?php if(empty($_SESSION['username'])) { ?>
                                <a href="<?=BASE_URL('Auth/Login');?>"
                                    class="lg:ml-4 flex  px-3 h-8 border-gray-400 lg:rounded-full items-center text-white-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor lr-btn"><span class="block"><i class="relative bx bxs-user mr-2"></i> Đăng nhập</span></a>
                                <a href="<?=BASE_URL('Auth/Register');?>"
                                   class="lg:ml-4 flex  px-3 h-8 border-gray-400 lg:rounded-full items-center text-white-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor lr-btn"><span class="block"><i class="relative bx bxs-user mr-2"></i> Đăng ký</span></a>
                                <?php } else { ?>
                                <a href="<?=BASE_URL('Auth/Profile');?>"
                                   class="lg:ml-4 flex  px-3 h-8 border-gray-400 lg:rounded-full items-center text-white-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor lr-btn"><span class="block"><i class="relative bx bxs-user mr-2"></i>
                                        <?=$_SESSION['username'];?> - <?=format_cash($getUser['money']);?></span></a>
                                <a href="<?=BASE_URL('Auth/Logout');?>"
                                    class="lg:ml-4 flex  px-3 h-8 border-gray-400 lg:rounded-full items-center text-white-800 font-bold justify-center lg:mb-0 mb-2 pointer-cursor lr-btn"><span class="block"><i class="relative bx bxs-user mr-2"></i> Đăng
                                            xuất</span></a>
                                <?php }?>
                    </div>
                </header>
            </div>
        </div>
        <style>
.border {
    border: 4.5px solid #00FFAB;
    box-shadow: 0 0 15px #00FFAB;
    border-radius: 6px;
    backdrop-filter: blur(7.5px);
    background: #ffffff38;
    transition: all 0.2s ease-in-out;
}
.text-success {
    color: black;
    margin: 0 0.5em 0 0;
    padding: 0.4em 0.833em;
    min-width: 3em;
    text-align: center;
    background-color: #00FFAB!important;
    border-color: #00FFAB!important;
    border-radius: 0.2857rem;
    white-space: nowrap;
}
.count-title {
    font-size: 30px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
	  text-align: center;
	  font-weight: bold;
    color: #fff;
}

.stats-text {
    font-size: 25px;
    font-weight: normal;
    margin-top: 15px;
    margin-bottom: 0;
    text-align: center;
	  color: #fff;
	  text-transform: uppercase;
	  font-weight: bold;
}

.stats-line-black {
	margin: 12px auto 0;
    width: 55px;
    height: 2px;
    background-color: #00FFAB;
}
.stats-icon {
	  font-size: 45px;
	  margin: 0 auto;
    float: none;
    display: table;
    color: #00FFAB;
}

@media (max-width: 992px) {
	.counter {
		margin-bottom: 40px;
	}
}
</style>        
        <?php
        if(isset($_SESSION['username']))
        {
            if($getUser['banned'] == 1)
            {
                session_destroy();
                msg_warning("Tài khoản của bạn đã bị khóa.", "", 5000);
            }
            if($getUser['level'] != 'admin')
            {
                if($CMSNT->site('baotri') == 'OFF')
                {
                    msg_warning("Hệ thống đang bảo trì định kỳ", "", 10000);
                }
            }
        }
        else
        {
            if($CMSNT->site('baotri') == 'OFF')
            {
                msg_warning("Hệ thống đang bảo trì định kỳ", "", 10000);
            }
        }