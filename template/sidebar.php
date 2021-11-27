<div class="col-12 col-lg-3 col-xl-2 ">
    <div class="sidebar vh-100">
        <div class="d-flex align-items-center justify-content-between pd nav-brand">
            <div class="d-flex align-items-center justify-content-center">
                <span class="text-primary"><i class="feather-shopping-bag fs-3 me-2"></i></span>
                <span class="fw-bold fs-5 text-primary">My Shop</span>
            </div>
            <button class="d-block d-lg-none p-2 btn btn-light" id="hideSidebarBtn">
                <i class="feather-x text-primary" style="font-size: 35px"></i>
            </button>
        </div>

        <!--                nav menu-->
        <div class="py-2 nav-main">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="<?php echo $url;?>/dashboard.php" class="nav-item-link">
                        <i class="feather-home"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-spacer py-2"></li>
            </ul>
            <ul class="nav-menu">
                <li class="nav-title">
                    Manage Item
                </li>
                <li class="nav-item">
                    <a href="<?php echo $url;?>/item_add.php" class="nav-item-link">
                        <i class="feather-plus-circle"></i>
                        Add item
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $url;?>/item_list.php" class="nav-item-link ">
                        <div class="d-flex justify-content-between">
                             <span class="">
                              <i class="feather-list"></i>
                              List item
                             </span>
                            <span class="badge p-1 bg-white shadow-sm text-primary">16</span>
                        </div>
                    </a>
                </li>
                <li class="nav-spacer py-2"></li>
            </ul>

            <ul class="nav-menu">
                <li class="nav-title">
                    Manage Category
                </li>
                <li class="nav-item">
                    <a href="<?php echo $url;?>/category_create.php" class="nav-item-link">
                        <i class="feather-plus-circle"></i>
                        Add Category
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $url;?>/category_list.php" class="nav-item-link ">
                        <div class="d-flex justify-content-between">
                             <span class="">
                              <i class="feather-list"></i>
                              List Category
                             </span>
                            <span class="badge p-1 bg-white shadow-sm text-primary">16</span>
                        </div>
                    </a>
                </li>
                <li class="nav-spacer py-2"></li>
                <li class="nav-item">
                    <a href="<?php echo $url;?>/logout.php" class="btn btn-danger w-100">
                        <i class="feather-log-out"></i>
                        Logout
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>

<script src="<?php echo $url; ?>/assets/vendor/jquery-3.3.1.min.js"></script>
<script>
    let currentPage = location.href;

    $('.nav-item-link').each(function (){
        let links = $(this).attr('href');
        if (currentPage == links ){
            $(this).addClass('active-nav');
        }
    });

</script>
