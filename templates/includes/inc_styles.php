

<style>
    *{
        font-family: "Roboto", sans-serif;
        box-sizing: border-box;
    }
    body{
        display: block;
        margin: 0px;
        padding: 0px;
        background: #dddce1;
    }
    .container_main_body{
        position: relative;
        padding-top: 60px;
        display: flex;
        flex-direction: row !important;
        justify-content: space-around;
        min-height: calc(100vh - 25px);
        height: calc(100vh - 25px);
        box-sizing: border-box;
        width: 100%;
        -webkit-flex-direction: row;
        z-index: 1;
    }
    .containerbody_panel{
        display: -webkit-flex;
        display: flex;
        transition: width 0.25s ease, margin 0.25s ease;
        width: calc(100% - 220px);
        min-height: calc(100vh - 85px);
        flex-direction: column;
        -webkit-flex-direction: column;
        box-sizing: border-box;
        background: #f9f9f9;
        overflow-y: auto;
        overflow-x: hidden;
        z-index: 99;
    }



    /* footer */
    .footer-sirac{
        height: 25px;
        width: 100%;
        display: block;
        background: rgba(2, 77, 131, 1);
        box-sizing: border-box;
    }
    .footer-sirac .p-large{
        height: 100%;
        font-size: .8rem;
        text-align: center;
        vertical-align: middle;
        padding: .25rem 0rem;
        color: #d1d1d1;
        height: 100%;
    }
    .footer-sirac .p-large a{
        text-decoration: none;
        color: #d1d1d1;
    }
    .footer-sirac .p-large a:hover{
        color: #fff;
    }

</style>