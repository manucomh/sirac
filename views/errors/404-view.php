<style>
    .container_404{
        display: flex;
        justify-content: center;
        color: #ffee;
        background: #3282b8;
        height: 100%;
        padding: 0px;
        margin: 0px;
        align-items: center;
    }
    .icon_error_404{
        display: block;
        text-align: center;
    }
    .icon_error_404 svg{
        color: #ffff;
        /* background: #adadad; */
    }
    body{
        margin: 0px;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<div class="container_404">
    <div>
        <p class="text-center">
            <i class="icon_error_404">
                <svg class="bi" width="52" height="52" fill="currentColor">
                    <use xlink:href="/resources/assets/bootstrap-icons/emoji-frown.svg"/>
                </svg>
            </i>
        </p>
        <h1 class="text-center">ERROR 404</h1>
        <p class="text text-center">Page not found</p>

    </div>
</div>
<?php
// sleep(3);
// header("Location:/?error=404");

?>