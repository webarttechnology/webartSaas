
<?php foreach ($product as $value) : ?>
    <tr>
        <td>
            <div class="form-check form-check-sm form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="1" />
            </div>
        </td>
        <td>
            <div class="d-flex align-items-center">
                <!--begin::Thumbnail-->
                <a href="<?= url('/dw-admin/edit-product/' . $value->id) ?>" class="symbol symbol-50px">
                    <span class="symbol-label" style="background-image:url(<?php echo  $value->thumb_img ?? '#' ?>);"></span>
                </a>
                <!--end::Thumbnail-->
                <div class="ms-5">
                    <!--begin::Title-->
                    <a href="<?= url('/dw-admin/edit-product/' . $value->id) ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name"><?php echo $value->name ?></a>
                    <!--end::Title-->
                </div>
            </div>
        </td>
        <td class="text-end pe-0">
            <span class="fw-bold"><?php echo $value->sku ?></span>
        </td>
        <td class="text-end pe-0" data-order="6">
            <!-- <span class="badge badge-light-warning">Low stock</span> -->
            <span class="fw-bold ms-3"><?php echo $value->shelf_qty ?? 0 ?></span>
        </td>
        <td class="text-end pe-0"><?php echo $value->base_price ?></td>
        <td class="text-end pe-0" data-order="rating-4">
            <div class="rating justify-content-end">
                <div class="rating-label checked">
                    <i class="ki-duotone ki-star fs-6"></i>
                </div>
                <div class="rating-label">
                    <i class="ki-duotone ki-star fs-6"></i>
                </div>
                <div class="rating-label ">
                    <i class="ki-duotone ki-star fs-6"></i>
                </div>
                <div class="rating-label">
                    <i class="ki-duotone ki-star fs-6"></i>
                </div>
                <div class="rating-label">
                    <i class="ki-duotone ki-star fs-6"></i>
                </div>
            </div>
        </td>
        <td class="text-end pe-0" data-order="Scheduled">
            <!--begin::Badges-->
            <div class="badge badge-light-primary"><?php echo $value->status ?></div>
            <!--end::Badges-->
        </td>
        <td class="text-end">
            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
            <!--begin::Menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="<?= url('/dw-admin/edit-product/' . $value->id) ?>" class="menu-link px-3">Edit</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu-->
        </td>
    </tr>
<?php endforeach ?>