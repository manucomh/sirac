<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
    }
    body{
        background: #f1f1f1;/*#1abc9c;  */
        overflow: hidden;
    }
    ::selection{
        background: rgba(26,188,156,0.3);
    }
    .container_login_form{
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        display: flex;
        align-items: center;
        top: 50px;
    }
    .container{
        max-width: 440px;
        padding: 10px 20px;
        margin: auto;
        
    }
    .wrapper{
        width: 100%;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
    }
    .wrapper .title{
        height: 60px;
        background: #16a085;
        border-radius: 5px 5px 0 0;
        color: #fff;
        font-size: 20px;
        font-weight: 400;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .wrapper form{
    padding: 30px 25px 25px 25px;
    }
    .wrapper form .row{
    height: 45px;
    margin-bottom: 15px;
    position: relative;
    }
    .wrapper form .row input{
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 60px;
        border-radius: 5px;
        border: 1px solid lightgrey;
        font-size: 14px;
        transition: all 0.3s ease;
    }
    form .row input:focus{
    border-color: #16a085;
    box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
    }
    form .row input::placeholder{
    color: #999;
    }
    .row .button{
        margin-top: 5px;
    }
    .wrapper form .row i{
    position: absolute;
    width: 47px;
    height: 100%;
    color: #fff;
    font-size: 18px;
    background: #16a085;
    border: 1px solid #16a085;
    border-radius: 5px 0 0 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .wrapper form .pass{
    margin: -8px 0 20px 0;
    }
    .wrapper form .pass a{
    color: #16a085;
    font-size: 17px;
    text-decoration: none;
    }
    .wrapper form .pass a:hover{
    text-decoration: underline;
    }
    .wrapper form .button input{
    color: #fff;
    font-size: 20px;
    font-weight: 400;
    padding-left: 0px;
    background: #16a085;
    border: 1px solid #16a085;
    cursor: pointer;
    font-size: 15px;
    }
    form .button input:hover{
    background: #12876f;
    }
    .wrapper form .signup-link{
    text-align: center;
    margin-top: 20px;
    font-size: 17px;
    }
    .wrapper form .signup-link a{
    color: #16a085;
    text-decoration: none;
    }
    form .signup-link a:hover{
    text-decoration: underline;
    }

</style>

<style>
    .login_header{
        height: 50px; 
        width: 100%; 
        position: absolute; 
        background: #16a085;
        z-index: 9999;
    }
    .display_flex_header_login{
        display: flex;
        flex-direction: row;
        align-items: center;
        height: 100%;
        font-size: 14px;
        color: #efefef;
        padding: 0px 20px;
    }
    .title_login_sismuni strong{
        padding: 0px 2px;
    }
    .display_flex_header_login .municipality_name{
        padding: 0px 5px;
    }
</style>
<div class="login_header">
    <div class="display_flex_header_login">
        <div class="title_login_sismuni rigth">
            <img src="" alt="">
            <label>.:.</label>
        </div>
        <div class="center municipality_name">
            <label>Municipalidad Distrital San Jerónimo</label>
        </div>
        <div class="left"></div>
    </div>
</div>

<div class="container_login_form">
    <div class="container">
        
        <div class="wrapper">
            <div class="title">
                <span>SISMUNI - Login</span>
            </div>
            <form action="#" method="POST">
                
                <div class="row">
                    <label>
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuario ..." name="username" value="" autofocus autocomplete="off">
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
                        <input type="password" placeholder="Password ..." name="password">
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
