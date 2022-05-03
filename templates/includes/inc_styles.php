







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
        width: 100vh;
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
        /* flex-flow: row wrap; */
        /* flex-wrap: wrap;  */
    }
</style>