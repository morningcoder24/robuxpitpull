<!-- ĐƠN VỊ MOD WEB WWW.CMSNAV.NET | ZALO: 0855569336 | FACEBOOK: FB.COM/ANHVUVPS -->
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8" />
        <title><?=$title;?></title>
        <meta name="description" content="<?=$CMSNT->site('mota');?>">
        <meta name="keywords" content="<?=$CMSNT->site('tukhoa');?>">
        <!-- Open Graph data -->
        <meta property="og:title" content="<?=$CMSNT->site('tenweb');?>">
        <meta property="og:type" content="Website">
        <meta property="og:url" content="<?=BASE_URL('');?>">
        <meta property="og:image" content="<?=$CMSNT->site('anhbia');?>">
        <meta property="og:description" content="<?=$CMSNT->site('mota');?>">
        <meta property="og:site_name" content="<?=$CMSNT->site('tenweb');?>">
        <meta property="article:section" content="<?=$CMSNT->site('mota');?>">
        <meta property="article:tag" content="<?=$CMSNT->site('tukhoa');?>">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="<?=$CMSNT->site('anhbia');?>">
        <meta name="twitter:site" content="@wmt24h">
        <meta name="twitter:title" content="<?=$CMSNT->site('tenweb');?>">
        <meta name="twitter:description" content="<?=$CMSNT->site('mota');?>">
        <meta name="twitter:creator" content="@wmt24h">
        <meta name="twitter:image:src" content="<?=$CMSNT->site('anhbia');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link data-n-head="ssr" rel="preconnect" href="https://fonts.gstatic.com">
        <link data-n-head="ssr" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Goldman&amp;display=swap">
        <link data-n-head="ssr" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&amp;family=Roboto:wght@900&amp;display=swap">
        <link href="<?=BASE_URL('template/theme/');?>assets/frontend/css/style.css?v=1621615725" rel="stylesheet" type="text/css" />
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <script src="<?=BASE_URL('template/theme/');?>assets/frontend/plugins/jquery/jquery-2.1.0.min.js"></script>
        <script src="<?=BASE_URL('template/theme/');?>assets/frontend/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
        <script src="<?=BASE_URL('template/theme/');?>assets/frontend/plugins/jquery-cookie/jquery.cookie.js"></script>
        <script src="<?=BASE_URL('template/theme/');?>assets/frontend/theme/assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
        <script src="<?=BASE_URL('template/theme/');?>assets/frontend/theme/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?=BASE_URL('template/theme/');?>assets/frontend/js/kun.js"></script>
        <script src="<?=BASE_URL('template/theme/');?>assets/frontend/js/backtotop.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <link class="main-stylesheet" href="<?=BASE_URL('style.css');?>" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?=BASE_URL('css/main.css');?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>  
        <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.2/dist/lazyload.min.js"></script>

  
    </head>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "100086113993254");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
