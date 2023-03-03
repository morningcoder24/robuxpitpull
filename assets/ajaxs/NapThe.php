<?php 
// FIX $obj decode
// 31/05/2022
    require_once("../../config/config.php");
    require_once("../../config/function.php");

    $loaithe = check_string($_POST['loaithe']);
    $menhgia = check_string($_POST['menhgia']);
    $seri = check_string($_POST['seri']);
    $pin = check_string($_POST['pin']);

    if(empty($_SESSION['username']))
    {
        msg_error("Vui lòng đăng nhập ", BASE_URL(''), 2000);
    }
    if(empty($loaithe))
    {
        msg_error2("Vui lòng chọn loại thẻ");
    }
    if(empty($menhgia))
    {
        msg_error2("Vui lòng chọn mệnh giá");
    }
    if(empty($seri))
    {
        msg_error2("Vui lòng nhập seri thẻ");
    }
    if(empty($pin))
    {
        msg_error2("Vui lòng nhập mã thẻ");
    }
    if (strlen($seri) < 5 || strlen($pin) < 5)
    {
        msg_error2("Mã thẻ hoặc seri không đúng định dạng!");
    }

        $url = 'https://gachthe1s.com/chargingws/v2'; // SERVER POST CARD
        $request_id = rand(100000000, 999999999);  //Mã đơn hàng của bạn
        $command = 'charging';  // Nap the
        $partner_id = $CMSNT->site('Partner_ID');
        $partner_key = $CMSNT->site('Partner_Key');
        $dataPost = array();
        $dataPost['request_id'] = $request_id;
        $dataPost['code'] = $pin;
        $dataPost['partner_id'] = $partner_id;
        $dataPost['serial'] = $seri;
        $dataPost['telco'] = $loaithe;
        $dataPost['command'] = $command;
        ksort($dataPost);
        $sign = $partner_key;
        foreach ($dataPost as $item) {
            $sign .= $item;
        }
        $mysign = md5($sign);
        $dataPost['amount'] = $menhgia;
        $dataPost['sign'] = $mysign;

        $data = http_build_query($dataPost);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        curl_setopt($ch, CURLOPT_REFERER, $actual_link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($result, true);
        
        if ($obj['status'] == 100)
        {
            msg_error2($obj['message']);
        }
        elseif ($obj['status'] == 99)
        {
            $CMSNT->insert("cards", array(
                'code' => $request_id,
                'seri' => $seri,
                'pin'  => $pin,
                'loaithe' => $loaithe,
                'menhgia' => $menhgia,
                'thucnhan' => '0',
                'username' => $getUser['username'],
                'status' => 'xuly',
                'note' => '',
                'createdate' => gettime()
            ));
            msg_success("Nạp thẻ thành công, đang chờ kết quả!", "", 2000);
        }
        else
        {
            msg_error2("Hệ thống đang bảo trì!");
        }