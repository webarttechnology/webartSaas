<?php if (count($location) > 0) : ?>
    <?php foreach ($location as $data) : ?>
        <div class="box d-flex mt-2">
            <span><i class="fa-solid fa-location-dot mr-10"></i></span>
            <p style="flex-grow:1; margin:0"><strong><?php echo $data->country_name  ?></strong><br><small><?php echo $data->address  ?>, <?php echo $data->city_name  ?>, <?php echo $data->state_name  ?></small>
                <?php if ($data->has_default == "Yes") : ?>
                    <span class="badge bg-light float-end default make-btn">Default</span>
                <?php else : ?>
                    <span class="badge float-end make-default btn btn-sm btn-primary make-btn" data-id="<?php echo $data->id ?>">Make Default</span>
                    <button class="delete-location btn btn-sm btn-danger float-end py-1 mx-2" data-id="<?php echo $data->id ?>">Delete</button>
                <?php endif; ?>
            </p>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <span class="text-danger text-center d-block mt-5">No Data Found</span>
<?php endif; ?>