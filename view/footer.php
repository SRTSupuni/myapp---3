<!-- footer -->
<div class="container-fluid  pb-2" style="background-color: #262626; min-height:150px; height:auto;">

    <div class="row">

        <div class="col-sm-6 col-lg-3 mt-2">
            <div class="row">
                <div class="col-12">
                    <p class="text-white font-weight-lighter">BE THE FIRST TO KNOW</p>
                </div>
                <div class="col-sm-8 col-lg-12">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="col-sm-8 mt-2">
                    <button type="submit" class="btn fbutton ">SUBSCRIBES US</button>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 mt-2">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-white font-weight-lighter">FOLLOW US ON</h2>
                </div>
                <div class="col-12 d-flex">
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                    <!-- Github -->
                    <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3 mt-2">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-white font-weight-lighter">CUSTOMER CARE</h2>
                </div>
                <div class="col-12">
                    <ul class="font-weight-lighter list-group list-unstyled">
                        <li><a href="contactus.php" class="text-decoration-none text-white">Contact Us</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Service Payment</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-6 col-lg-3 mt-2">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-white font-weight-lighter">DISCOVER</h2>
                </div>
                <div class="col-12">
                    <ul class="font-weight-lighter list-group list-unstyled">
                        <li><a href="aboutUs.php" class="text-decoration-none text-white">About Us</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Terms Of Use</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Service Payment</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-decoration-none text-white">FAQs</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="w-100" style="height: 1px; background-color:white;"></div>

<!-- ////////////////////////// Copyright row start //////////////////////////////// -->
<div class="container-fluid text-center text-white" style="background-color: #262626; min-height:70px; height:auto;">

    <div class="row pt-3 pb-2">

        <div class="col-md-12">
            <p class="text-white text-uppercase font-weight-lighter">
                Designed By STSRathnayaka <br>
                Copyrights &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                All rights reserved
            </p>
        </div>

    </div>


</div>
<!-- ////////////////////////// Copyright row End //////////////////////////////// -->
<script>
    $(document).ready(function() {

        $("#logoutBtn").on("click", function(e) {

            e.preventDefault();

            let url = $(this).attr("href");

            Swal.fire({
                title: 'Are You Sure You Want To Logout ?',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f00",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes Logout"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = url;
                }
            });

        });

    });
</script>
</body>

</html>