<?php
    require_once(__DIR__."/config/config.php");
    require_once(__DIR__."/config/function.php");
    $title = 'HOME | '.$CMSNT->site('tenweb');
    require_once(__DIR__."/public/client/Header.php");
    require_once(__DIR__."/public/client/Nav.php");
?>
<div class="v-theme">
    <div class="my-6">
        <div class="w-full max-w-6xl mx-auto relative cmsnav-contain">
            <div class="flex md:flex-row-reverse flex-wrap">
                                <div class="w-full md:w-4/6 pb-0">
                    <div class="ml-0 border-trueGray">
                    <iframe src="https://youtube.com/embed/<?=$CMSNT->site('id_video_youtube');?>" frameborder="0" width="100%" height="350" allowfullscreen=""></iframe>
                    </div>
                    
                </div>
                <div class="w-full md:w-2/6">
                    <div class="bg-trueGray-800 w-full" style="min-height: 100%;">
                        <div class="flex color-grant font-bold">
                            <div class="cursor-pointer bg-trueGray-800 tablinks" onclick="Tab('nap')">
                                <h2 class="py-1 px-2 w-32 text-center title-grant font-extrabold text-xl md:text-2xl">
                                    <span class="cmsnav-title">
                                    NẠP THẺ
                                    </span>
                                </h2>
                            </div>
                            <div class="cursor-pointer w-full bg-trueGray-900 tablinks" onclick="Tab('top')">
                                <h2 class="py-1 text-center px-3 title-grant font-extrabold text-xl md:text-2xl">
                                    <span class="cmsnav-title">
                                    TOP NẠP TIỀN </h2>
                                    </span>
                            </div>
                        </div>
                        <span class="tabcontent" id="nap" style="display:block;">
                            <form class="w-full form-header">
                                <div class="py-3 px-5">
                                    <span class="mb-2 block cmsnav-input">
                                        <div class="flex items-center relative">
                                            <select id="loaithe"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    class="fill-current h-4 w-4">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </span>
                                    <span class="mb-2 block cmsnav-input">
                                        <div class="flex items-center relative">
                                            <select id="menhgia"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    class="fill-current h-4 w-4">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </span>
                                    <span class="mb-2 block cmsnav-input">
                                        <div class="flex items-center relative">
                                            <input type="text" id="pin" placeholder="Mã số thẻ"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600" />
                                        </div>
                                    </span>
                                    <span class="mb-2 block cmsnav-input">
                                        <div class="flex items-center relative">
                                            <input type="text" id="seri" placeholder="Số serial"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600" />
                                        </div>
                                    </span>
                                    <div class="mt-4">
                                        <button type="button" id="NapThe"
                                            class="homepayin uppercase flex items-center justify-center h-10 w-full ff-lalezar pt-1 text-2xl rounded focus:outline-none px-4 text-center btn-inner vYLZYqQ"
                                            style="color: rgb(51, 51, 51); background-image: -webkit-linear-gradient(92deg, #f35626, #feab3a);
    
    
    -webkit-animation: hue 10s infinite linear;">
                                            
                                            Nạp Ngay
                                           
                                        </button>
                                    </div>
                                    <div class="text-center mt-2 text-white font-semibold text-sm">
                                        Hãy chọn đúng mệnh giá. Sai sẽ mất thẻ
                                    </div>
                                </div>
                            </form>

                        </span>
                        <div class="tabcontent" id="top">
                            <div class="v-list-top-card py-1 mt-2 md:py-2 px-1 md:px-3">

                                <?php $i=0; foreach($CMSNT->get_list("SELECT * FROM `users` ORDER BY `total_money` DESC LIMIT 6 ") as $top) { ?>
                                <div class="flex items-center justify-between px-2 py-1">
                                    <div class="flex items-center">
                                        <div class="v-star relative">
                                            <i class="bx text-3xl cmsnav-tropy bxs-trophy"></i>
                                            <span class="absolute font-bold text-white" style="top: 4px; left: 11px;">
                                                <?=$i++;?> </span>
                                        </div>
                                        <span class="ml-1 text-white w-full font-bold truncate cmsnav-text-top"
                                            style="max-width: 8rem;">
                                            <?=$top['username'];?>
                                        </span>
                                    </div>
                                    <div class="font-bold text-lg">
                                        <span class=" cmsnav-top bg-red-600 w-32 text-white rounded-sm text-center inline-block">
                                            <?=format_cash($top['total_money']);?> <span
                                                class="text-xs"><small>VND</small></span>
                                        </span>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="v-card w-full max-w-6xl mx-auto ">
            <div class="md:mx-0  cmsnav-contain ">
<div class="fade-in grid grid-cols-12 gap-2 px-2 md:px-0 ">
                                                                    <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 ">
                                <!---->
<div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-money fa-2x stats-icon"></i>
                        <h2 class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill"><?=$CMSNT->site('robux_120h');?></h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill">ROBUX 120H</p>
                    </div>
                </div>                                
                                        </div>
                                        <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 ">
                                <!---->
<div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-usd fa-2x stats-icon"></i>
                        <h2 class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill"><?=$CMSNT->site('robux_chinh_hang');?></h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill">ROBUX CHÍNH HÃNG</p>
                    </div>
                </div>                                
                                        </div>
                                        <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 ">
                                <!---->
<div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-cube fa-2x stats-icon"></i>
                        <h2 class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill"><?=$CMSNT->site('kho_robux');?></h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill">KHO ROBUX</p>
                    </div>
                </div>                                
                                        </div>
                                        
                                        <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 "
                                >
                                <!---->

<div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-bandcamp fa-2x stats-icon"></i>
<h2 class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill"><?=format_cash($CMSNT->num_rows("SELECT * FROM `accounts` WHERE `username` IS NOT NULL "));?></h2>
<div class="stats-line-black"></div>
                        <p class="stats-text fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill">TÀI KHOẢN ĐÃ BÁN</p>
                    </div>
                </div>                                
                                        </div>
                                        <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 ">
                                <!---->
<div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-ils fa-2x stats-icon"></i>
                        <h2 class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill"><?=$CMSNT->site('preium');?></h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill">PREMIUM</p>
                    </div>
                </div>                                
                                        </div>
                                       
                                        <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 "
                                >
                                <!---->

<div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-user fa-2x stats-icon"></i>
                        <h2 class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill"><?=$CMSNT->num_rows("SELECT * FROM `users` ");?></h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill">KHÁCH HÀNG</p>
                    </div>
                </div>                                
                                        </div>
                                        
                            </div>
                            </div>
    <div class="pb-10">
        <div class="v-card w-full max-w-6xl mx-auto">
            <div class="md:mx-0">
                <div class="py-2">
                    <div class="mb-16">
                        <div class="mb-4 py-4 md:p-4 cmsnav-contain">
                            <div
                                class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill ">
                                Danh Mục Các Game
                            </div>
                            
                        <div class="fade-in grid grid-cols-8 gap-2 px-2 md:px-0">
                            <?php foreach($CMSNT->get_list("SELECT * FROM `category` WHERE `display` = 'SHOW' ") as $category) { ?>
                            <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300 "
                                    style="padding: 1px; padding: 1px;">
                                <!---->
                                <a href="<?=BASE_URL('Groups/'.$category['id']);?>">
                                    <img data-src="<?=$category['img'];?>"
                                        class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" />
                                    <div class="py-1">
                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase text-white">
                                            <?=$category['title'];?>
                                        </div>
                                        <div class="flex px-2 mt-2 justify-center">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center mt-9">
                                            <a class="focus:outline-none acc-lien-minh-tu-chon-bb2716012b"
                                                href="<?=BASE_URL('Groups/'.$category['id']);?>">
                                                <div>
                                                    <style scoped="">
                                                    .acc-lien-minh-tu-chon-bb2716012b:hover {
                                                        filter: brightness(130%);
                                                    }
                                                    </style>
                                                </div> <buton class="button1"><span class="btn1">MUA NGAY</span></button>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php }?>
                            <!--LIÊN QUÂN-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-10">
        <div class="v-card w-full max-w-6xl mx-auto">
            <div class="md:mx-0">
                <div class="py-2">
                    <div class="mb-16">
                        <div class="mb-4 py-4 md:p-4 cmsnav-contain">
                            <div
                                class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill ">
                                DANH MỤC DỊCH VỤ
                            </div>
                        <div class="fade-in grid grid-cols-8 gap-2 px-2 md:px-0">
                            <?php foreach($CMSNT->get_list("SELECT * FROM `category_caythue` WHERE `display` = 'SHOW' ") as $category) { ?>
                            <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300 "
                                    style="padding: 1px; padding: 1px;">
                                <!---->
                                <a href="<?=BASE_URL('dich-vu/'.$category['id']);?>">
                                    <img data-src="<?=$category['img'];?>"
                                        class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" />
                                    <div class="py-1">
                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase text-white">
                                            <?=$category['title'];?>
                                        </div>
                                        <div class="flex px-2 mt-2 justify-center">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center mt-9">
                                            <a class="focus:outline-none acc-lien-minh-tu-chon-bb2716012b"
                                                href="<?=BASE_URL('dich-vu/'.$category['id']);?>">
                                                <div>
                                                    <style scoped="">
                                                    .acc-lien-minh-tu-chon-bb2716012b:hover {
                                                        filter: brightness(130%);
                                                    }
                                                    </style>
                                                </div> <buton class="button1"><span class="btn1">MUA NGAY</span></button>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php }?>
                            <!--LIÊN QUÂN-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="animated modal fadeIn is-visible fixed z-50 pin bg-smoke-dark flex p-2 md:p-0 top-0 left-0 bottom-0 right-0" style="z-index: 999;outline-style: double;outline-color : #00a5ff;outline-width : 7px;box-shadow: 0 0 3px 1px #00a5ff; " id="indexModal">
        <div style="
    -webkit-border-radius: 50px;
    -moz-border-radius: 25px;
    border-radius: 15px;
    background-color: #2d363a;
    max-width: 800px;
    outline-style: double;outline-color : #00FFAB;outline-width : 5px;box-shadow: 0 0 10px 8px #00FFAB;
    " class="animated fadeInDown fixed shadow-inner max-w-md md:max-w-lg relative pin-b pin-x align-top m-auto justify-center bg-white rounded w-full h-auto md:shadow-lg flex flex-col">
            <div class="modal-content">
                <div class="fade-in mb-2 py-2 md:mb-4 block uppercase md:py-4 text-center text-yellow-400 md:text-3xl text-2xl font-extrabold text-fill " style="
    background-color: #00acff00;
    -webkit-border-radius: 50px;
    -moz-border-radius: 25px;
    border-radius: 15px;
        

    ">
                    Thông báo
                <span class="absolute cursor-pointer text-2xl text-gray-800 pt-3 px-3" onclick="FuncHideModal()" style="right: -1px; top: -2px;color: #fff;"><i class="bx bxs-x-square"></i></span></div>
                <div class="overflow-auto p-2 md:px-4" style="max-height: 600px;">
                    <div class="relative px-2 pb-4 text-gray-900">
                        <div class="md:px-4 overflow-auto p-2" style="max-height:400px">
                            <div class="pb-4 px-2 relative text-gray-900">
                                <?=$CMSNT->site('thongbao');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function FuncHideModal() {
        var x = document.getElementById("indexModal");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>

    <script type="text/javascript">
    $("#NapThe").on("click", function() {
        $('#NapThe').html('<i class="fa fa-spinner fa-spin"></i> ĐANG XỬ LÝ').prop('disabled',
            true);
        $.ajax({
            url: "<?=BASE_URL("assets/ajaxs/NapThe.php");?>",
            method: "POST",
            data: {
                loaithe: $("#loaithe").val(),
                menhgia: $("#menhgia").val(),
                seri: $("#seri").val(),
                pin: $("#pin").val()
            },
            success: function(response) {
                $("#thongbao").html(response);
                $('#NapThe').html(
                        'NẠP NGAY')
                    .prop('disabled', false);
            }
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(e => {
            GetCard24()
        }, 0)
    });

    function GetCard24() {
        $.ajax({
            url: "<?=BASE_URL('api/loaithe.php');?>",
            method: "GET",
            success: function(response) {
                $("#loaithe").html(response);
            }
        });
        $.ajax({
            url: "<?=BASE_URL('api/menhgia.php');?>",
            method: "GET",
            success: function(response) {
                $("#menhgia").html(response);
            }
        });

    }
    </script>
    <?php 
    require_once(__DIR__."/public/client/Footer.php");
?>