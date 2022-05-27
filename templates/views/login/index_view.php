
<?php require_once INCLUDES."inc_head_html.php"; ?>
<div class="login_header w-full relative">
    <div class="display_flex_header_login relative">
        <div class="title_login_sismuni rigth">
            <img src="" alt="">
            <!-- <label>.:</label> -->
        </div>
        <div class="center municipality_name">
            <label for="" class="system_name font-bold">
                <?php echo SYSTEM_NAME." v1.0". "   :: ";?>
            </label>
            <label for="" class="text-lg">
                <?php echo SYSTEM_FULLNAME;?>
            </label>
        </div>
        <div class="left">
            <label for="" class="muni_name"> Municipalidad Distrital San Jerónimo</label>
        </div>
    </div>
</div>

<div class="container_login_form relative">
    <div class="container w-11/12 max-w-xs relative">
        <div class="wrapper relative">
            <div class="title">
                <span><?php echo "" ?> - Login -</span>
            </div>
            <?php echo Flasher::flash(); ?> 
            <form action="/sirac/login/post_login" method="POST" class="relative">
                <?php echo insert_inputs(); ?>
                <div class="row">
                    <label>
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuario ..." name="input_username" value="" autofocus autocomplete="off">
                        <?php
                            if(null){
                                ?>
                                <br><br>
                                <small class="alert alert-danger"></small>
                                <br><br>
                                <?php
                            }
                        ?>
                    </label>
                    
                </div>
                <div class="row">
                    <label>
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password ..." name="input_password">
                        <?php
                            if(null){
                                ?>
                                <br><br>
                                <small class="alert alert-danger"></small>
                                <br><br>
                                <?php
                            }
                        ?>
                    </label>
                    
                </div>
                <div class="pass">
                    <!-- <a href="#">Forgot password?</a> -->
                </div>
                <!-- <br> -->
                <div class="row button">
                    <label>
                        <input type="submit" value="Iniciar Sessión" class="button">
                    </label>
                </div>
                <div class="signup-link">
                    <!-- Not a member? <a href="#">Signup now</a> -->
                </div>
            </form>
        </div>
    </div>
</div>