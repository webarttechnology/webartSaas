<?php
include 'common/header.php';
include 'common/navbar.php';
include 'common/sidebar.php';
?>

<?php
            if (preg_match($patternThemes, $description, $matches)) {
                $theme_name = $matches[1];
            } else {
                $theme_name = "Unknown";
            }

            $newtheme_name = strtolower(str_replace(' ', '-', trim($theme_name)));

            if (preg_match($patternAuthor, $description, $matches)) {
                $auther_name = $matches[1];
            } else {
                $auther_name = "Unknown";
            }

            if (preg_match($patternDescription, $description, $matches)) {
                $desc = $matches[1];
            } else {
                $desc = "Unknown";
            }

            if (preg_match($patternTags, $description, $matches)) {
                $tags = $matches[1];
            } else {
                $tags = "Unknown";
            }

            if (preg_match($patternUrl, $description, $matches)) {
                $url = $matches[1];
            } else {
                $url = "Unknown";
            }


            if ($themeInfo) {
                if (trim($themeInfo->value) == trim($newtheme_name)) {
                    $activeText = 'Active';
                } else {
                    $activeText = '';
                }
            } else {
                $activeText = '';
            }

            ?>
<!-- content part start -->
<section class="main_content">
    <div class="container-fluid">
        <div class="row">
            <!-- page title part -->
            <div class="col-sm-6">
                <h4>Edit Theme</h4>
            </div>
            <div class="col-sm-6 ">
            <?php if ($activeText) : ?>
                <small class="badge bg-success float-end">Active Theme</small>
            <?php endif ?>
            </div>
            <!-- page body part -->
            <div class="col-sm-6 col-md-5 mt-3">
                <img src="<?= url('themes/' . $screenshot . '') ?>" alt="" class="w-100 mb-3">
                <center>
                    <?php if ($activeText == '') : ?>
                        <span><a href="#" class="btn btn-success theme-active" data-type="themedetails" data-theme="<?php echo $newtheme_name; ?>">Active</a></span>
                    <?php endif ?>
                    <span><a href="#" class="btn btn-danger">Delete</a></span>
                    <span><a href="<?php echo $url ?>" target="_blank" class="btn btn-info">Live Preview</a></span>
                </center>
            </div>
            <div class="col-sm-6 col-md-7 mt-3">
                <div class="panel_body m-0">

                    <h3><?php echo $theme_name ?></h3>
                    <small>By: <a href="#" class="text-secondary"><?php echo $auther_name ?></a></small>
                    <hr class="mb-3 mt-3">
                    <p><?php echo $desc ?></p>
                    <hr class="mb-3 mt-3">
                    <strong>Tags:</strong>
                    <p class="mt-3"><?php echo $tags ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content part end -->


<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="btn-close text-end" data-bs-dismiss="modal"></button>
                <h4 class="modal-title text-center">Send Email</h4>
                <form action="">
                    <div class="row mt-3">
                        <div class="form-floating mb-3 col-md-12">
                            <input type="text" class="form-control" id="float_to" placeholder="">
                            <label for="float_to">Email To</label>
                        </div>
                        <div class="form-floating mb-3 col-md-12">
                            <input type="text" class="form-control" id="float_form" placeholder="">
                            <label for="float_form">Email From</label>
                        </div>
                        <div class="form-floating mb-3 col-sm-12">
                            <textarea class="form-control" id="floatingDescription" style="height: 100px"></textarea>
                            <label for="floatingDescription">Message</label>
                        </div>
                        <div class="form-floating col-12 text-center">
                            <input type="button" value="Send Mail" class="btn btn-secondary">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<div class="templateCustomizer">
    <div class="topbox">
        <span class="customizerBtn"><i class="fa-solid fa-gear"></i></span>
        <span class="closePanel"><i class="fa-solid fa-xmark"></i></span>
        <h5>Template Customizer</h5>
        <p>Customize and preview in real time</p>
    </div>
    <hr>
    <div class="box">
        <p><strong>Color Customizer</strong></p>
        <ul>
            <li>
                <div data-setting="radio">
                    <input type="radio" value="theme-color-blue" class="btn-check" name="theme_color" id="theme-color-1" data-colors="{&quot;primary&quot;: &quot;#00C3F9&quot;, &quot;info&quot;: &quot;#573BFF&quot;}">
                    <label class="btn btn-border d-block bg-transparent" for="theme-color-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-1" aria-label="Theme-1">
                        <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                            <circle cx="12" cy="12" r="10" fill="#00C3F9"></circle>
                            <path d="M2,12 a1,1 1 1,0 20,0" fill="#573BFF"></path>
                        </svg>
                    </label>
                </div>
            </li>
            <li>
                <div data-setting="radio">
                    <input type="radio" value="theme-color-gray" class="btn-check" name="theme_color" id="theme-color-2" data-colors="{&quot;primary&quot;: &quot;#91969E&quot;, &quot;info&quot;: &quot;#FD8D00&quot;}">
                    <label class="btn btn-border d-block bg-transparent" for="theme-color-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-2" aria-label="Theme-2">
                        <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                            <circle cx="12" cy="12" r="10" fill="#91969E"></circle>
                            <path d="M2,12 a1,1 1 1,0 20,0" fill="#FD8D00"></path>
                        </svg>
                    </label>
                </div>
            </li>
            <li>
                <div data-setting="radio">
                    <input type="radio" value="theme-color-red" class="btn-check" name="theme_color" id="theme-color-3" data-colors="{&quot;primary&quot;: &quot;#DB5363&quot;, &quot;info&quot;: &quot;#366AF0&quot;}">
                    <label class="btn btn-border d-block bg-transparent" for="theme-color-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-3" aria-label="Theme-3" aria-describedby="tooltip777762">
                        <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                            <circle cx="12" cy="12" r="10" fill="#DB5363"></circle>
                            <path d="M2,12 a1,1 1 1,0 20,0" fill="#366AF0"></path>
                        </svg>
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <div class="box">
        <p><strong>Font</strong></p>
        <div class="row">
            <div class="form-floating mb-3 col-12">
                <select class="form-select" id="c" aria-label="Floating label">
                    <option value="1">Option One</option>
                    <option value="2">Option Two</option>
                    <option value="3">Option Three</option>
                </select>
                <label for="floatingBfont">Body Font</label>
            </div>
            <div class="form-floating mb-3 col-12">
                <select class="form-select" id="floatingHfont" aria-label="Floating label">
                    <option value="1">Option One</option>
                    <option value="2">Option Two</option>
                    <option value="3">Option Three</option>
                </select>
                <label for="floatingHfont">Heading Font</label>
            </div>
        </div>
    </div>
</div>

<?php
include 'common/footer.php';
?>