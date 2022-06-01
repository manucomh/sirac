<?php require_once INCLUDES."inc_head_html.php"; ?>
    <?php require_once MODULES."mod_header_main.php"; ?>
<div class="container_main_body">
    <?php  require_once MODULES."mod_side_nav_menu.php"; ?>
    
    <div class="containerbody_panel">
        
        <!-- panel de nacimiento -->
        <div class="main_panel_birth">
            <div class="container_search_birth_for w-full bg-[#f3f3f3] px-5 py-2">
                <form class="flex items-center">
                    <style>
                        .select_option_search_birth .option{
                            padding: 8px 16px;
                            box-sizing: border-box;
                            height: 20px;
                        }
                    </style>
                    <label class="block px-0.5 mx-0">
                        <select name="select_option_search_birth" id="" class="text-sm bg-white focus:outline-none w-auto px-1 py-1 rounded-md select_option_search_birth">
                            <option value="" class="option">Nombres</option>
                            <option value="" class="option">DNI</option>
                        </select>
                    </label>
                    <label class="block mx-0 relative ">
                        <input class="placeholder:normal placeholder:text-slate-400 block bg-white 
                        border border-slate-300 
                        py-1 pl-2 pr-2 shadow-sm 
                        focus:outline-none 
                        focus:border-sky-100 
                        focus:ring-sky-500 focus:ring-1 
                        w-[20rem] 
                        text-sm 
                        rounded-xl" placeholder="Ingrese dato" 
                        type="text" name="search"/>
                    </label>
                    <label class="block">
                        <button type="submit" class="mx-1 hover:bg-[#e8e8e8]  px-5 py-1 rounded-md bg-white"> <!--rounded-full px-2 py-1 -->
                            <i class="fas fa-search"></i>
                        </button>
                    </label>
                </form>
            </div>
            
        </div>
    </div>
</div>


<?php require_once INCLUDES."inc_footer.php"; ?>
<?php require_once INCLUDES."inc_footer_html.php"; ?>
