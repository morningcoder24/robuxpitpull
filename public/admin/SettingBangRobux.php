<?php
    require_once("../../config/config.php");
    require_once("../../config/function.php");
    $title = 'CẤU HÌNH | '.$CMSNT->site('tenweb');
    require_once("../../public/admin/Header.php");
    require_once("../../public/admin/Sidebar.php");
?>
<?php
if(isset($_POST['btnSaveOption']) && $getUser['level'] == 'admin')
{
    if($CMSNT->site('status_demo') == 'ON')
    {
        admin_msg_warning("Chức năng này không khả dụng trên trang web DEMO!", "", 2000);
    }
    foreach ($_POST as $key => $value)
    {
        $CMSNT->update("options", array(
            'value' => $value
        ), " `key` = '$key' ");
    }
    admin_msg_success('Lưu thành công', '', 500);
}
?>



<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cấu hình</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">CẤU HÌNH THÔNG TIN BẢNG</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">PREMIUM</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="preium" value="<?=$CMSNT->site('preium');?>"
                                            class="form-control" placeholder="Ví dụ: CHƯA BÁN">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">KHO ROBUX</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="kho_robux" value="<?=$CMSNT->site('kho_robux');?>"
                                            class="form-control" placeholder="Ví dụ: 2000R$">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ROBUX CHÍNH HÃNG</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="robux_chinh_hang" value="<?=$CMSNT->site('robux_chinh_hang');?>"
                                            class="form-control" placeholder="Ví dụ: Bán Hoặc Không Bán">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ROBUX 120H</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="robux_120h" value="<?=$CMSNT->site('robux_120h');?>"
                                            class="form-control" placeholder="Ví dụ: 10K=60R$">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="btnSaveOption" class="btn btn-primary btn-block">
                                <span>LƯU</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
$(function() {
    // Summernote
    $('.textarea').summernote()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });
})
</script>

<?php 
    require_once("../../public/admin/Footer.php");
?>