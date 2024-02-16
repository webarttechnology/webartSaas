  <!-- nav -->
  <nav class="">
            <span class="menu_expand_btn btn btn-light btn-sm">
                <i class="fa-solid fa-chevron-right"></i>
            </span>
            <div class="colapse_logo"><a href="#"><span class="logo_icon">E</span> <span class="dash_logo"><img src="<?= url('user/images/logo.png') ?>" alt=""class="img-fluid"></span></a></div>
            <ul class="accordion" id="myAccordion">
                <li class="accordion-item active">
                    <h2 class="accordion-header" id="headingOne">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#dashboard" onclick="location.href='<?= url('dw-admin/dashboard') ?>'"><i class="fa-solid fa-gauge"></i> <span>Dashboard</span></button>									
                    </h2>
                </li>
                <li class="accordion-item">
                    <h2 class="accordion-header" id="headingProducts">
                        <button type="button" class="accordion-button collapsed has_submeu" data-bs-toggle="collapse" data-bs-target="#products"><i class="fa-solid fa-box"></i> <span>Products</span></button>
                    </h2>
                    <div id="products" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="<?=  url('dw-admin/product') ?>"> <span>Product List</span></a></li>
                                <li><a href="<?=  url('dw-admin/add-product-category') ?>"> <span>Add product category</span></a></li>
                                <!-- <li><a href="#"><i class="fa-solid fa-circle-half-stroke"></i> <span>Inventory</span></a></li>
                                <li><a href="#"><i class="fa-solid fa-circle-half-stroke"></i> <span>Purchase orders</span></a></li> -->
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#orders" onclick="location.href='<?= url('dw-admin/order-list') ?>'"><i class="fa-solid fa-gauge"></i> <span>Orders</span></button>									
                    </h2>
                </li>
                <li class="accordion-item">
                    <h2 class="accordion-header" id="headingCustomer">
                        <button type="button" class="accordion-button collapsed has_submeu" data-bs-toggle="collapse" data-bs-target="#customer"><i class="fa-solid fa-users"></i> <span>Customer</span></button>                     
                    </h2>
                    <div id="customer" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                        <div class="card-body">
                            <ul>
                                <li><a href="<?=  url('dw-admin/customer-list') ?>"> <span>List of Customers</span></a></li>
                                <li><a href="<?=  url('dw-admin/order-history') ?>"> <span>Order History</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="accordion-item">
                    <h2 class="accordion-header" id="headingTheme">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"  onclick="location.href='<?= url('dw-admin/theme') ?>'"><i class="fa-solid fa-table-cells"></i> <span>Theme</span></button>                     
                    </h2>
                </li>
                <li class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" onclick="location.href='<?= url('dw-admin/settings') ?>'"><i class="fa-solid fa-screwdriver-wrench"></i> <span>Settings</span></button>                     
                    </h2>
                </li>
            </ul>
            <div class="bottomPanel d-flex justify-content-between">
                <div class="colapse_logo userlogo"><a href="#"><i class="fa-regular fa-user"></i></a></div>
                <div class="colapse_logo userlogo light"><a href="<?= url('/dw-admin/logout') ?>"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></div>
            </div>
        </nav>
    </header>