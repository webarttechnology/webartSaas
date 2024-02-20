   <!-- ****** Footer Area Start ****** -->
   <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <a href="index.php"><img src="<?= url('themes/'. $themeInfo->value)?>/img/logo.png" alt=""></a>
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p>Copyright ©2024 All rights reserved | Design & Developed by Webart Technology</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="faq.php">Faq</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Our Policies</a></li>
                                <li><a href="#">Afiliates</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-lg-5">
                        <div class="single_footer_area">
                            <div class="footer_heading mb-30">
                                <h6>Subscribe to our newsletter</h6>
                            </div>
                            <div class="subscribtion_form">
                                <form action="#" method="post">
                                    <input type="email" name="mail" class="mail" placeholder="Your email here">
                                    <button type="submit" class="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?= url('themes/'. $themeInfo->value)?>/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= url('themes/'. $themeInfo->value)?>/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= url('themes/'. $themeInfo->value)?>/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?= url('themes/'. $themeInfo->value)?>/js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= url('themes/'. $themeInfo->value)?>/js/active.js"></script>

    <script type='text/JavaScript'>
           // star rating
const stars = document.querySelectorAll(".stars  i");
console.log(stars);

stars.forEach((star, index1) => {
  star.addEventListener("mouseover", () => {
    stars.forEach((star, index2) => {
      index1 >= index2
        // ? (star.style.transform = "scale(1.2)")
        // : (star.style.transform = "scale(1)");
    });
    // star.style.transform = "scale(1.5)";
  });
  star.addEventListener("mouseout", () => {
    star.style.transform = "scale(1)";
  });
  star.addEventListener("click", () => {
    stars.forEach((star, index2) => {
      index1 >= index2
        ? star.classList.add("active")
        : star.classList.remove("active");
    });
  });
});
    </script>

</body>

</html>