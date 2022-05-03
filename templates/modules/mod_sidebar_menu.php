<style>
    .sidebar_left{
        position: relative;
        display: flex;
        width: 220px;
        flex-direction: column;
        box-sizing: border-box;
        overflow: hidden;
        z-index: 99;
        min-height: calc(100vh - 85px);
    }
    .sidebar_left .nav_left_main{
        display: block;
    }
    .nav_left_main .ul{
        display: flex;
        flex-direction: column;
        box-sizing: border-box;
    }
    .ul .li_items{
        height: auto;
        display: block;
    }
    .ul .li_items .a-items{
        display: flex;
        height: 2.8rem;
        text-decoration: none;
        align-items: center;
        padding: 0rem .5rem;
        color: #000;
        box-sizing: border-box;
    }
    .ul .li_items .a-items:hover{
        background: rgba(2, 77, 131, 1);
        border-bottom: .02rem solid #000;
        color: #efefef;
    }
    .a-items .module_name{
        padding: 0rem .2rem;
    }
    .a-items .icon_module_name{
        padding: 0em 1em;
    }
</style>

<div class="sidebar_left">
    <nav class="nav_left_main">
        <ul class="ul">
            <li class="li_items">
                <a class="a-items nacimiento" href="<?php echo BASEPATH.'birth'; ?>">
                    <span class="icon_module_name">
                        <i class="fas fa-baby"></i>
                    </span>
                    <span class="module_name">
                        Nacimiento
                    </span>
                </a>
            </li>
            <li class="li_items">
                <a class="a-items nacimiento" href="#">
                    <span class="icon_module_name">
                        <i class="fas fa-rings-wedding">.:.</i>
                    </span>
                    <span class="module_name">
                        Matrimonio
                    </span>
                </a>
            </li>
            <li class="li_items">
                <a class="a-items nacimiento" href="#">
                    <span class="icon_module_name">
                        <i class="fas fa-coffin">.:.</i>
                    </span>
                    <span class="module_name">
                        Defunción
                    </span>
                </a>
            </li>
            <li class="li_items">
                <a class="a-items nacimiento" href="#">
                    <span class="icon_module_name">
                        <i class="fas fa-users"></i>
                    </span>
                    <span class="module_name">
                        Usuarios
                    </span>
                </a>
            </li>
            <li class="li_items">
                <a class="a-items nacimiento" href="#">
                    <span class="icon_module_name">
                        <i class="fas fa-address-card"></i>
                    </span>
                    <span class="module_name">
                        Mi perfil
                    </span>
                </a>
            </li>
            <li class="li_items">
                <a class="a-items nacimiento" href="#">
                    <span class="icon_module_name">
                        <i class="fas fa-cogs"></i>
                    </span>
                    <span class="module_name">
                        Configuración
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->