<style>
    .header_main{
        position: relative;
        height: auto;
        width: 100%;
    }
    .content_fixed_header{
        position: fixed;
        width: 100%;
        height: 70px;
        background: #efefefef;
    }
    .flex_wrap_container{
        display: flex;
        height: 85%;
        padding: 0px 20px;
        align-items: center;
        flex-direction: row;
    }
</style>
<div class="header_main">
    <div class="content_fixed_header">
        <div class="flex_wrap_container">
            <div wrap_left>
                <img src="" alt="">
                <label for="" class="system_name"><?php echo SYSTEM_NAME." ". " - ".SYSTEM_FULLNAME;?></label>
            </div>
            <div class="wrap_center">
                ..
            </div>
            <div class="wrap_left">
                <label for="" class="system_name"><?php echo "Municipalidad Distrital San Jerónimo";?></label>
            </div>
        </div>
    </div>
</div>