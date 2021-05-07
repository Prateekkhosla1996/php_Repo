<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jinder Exports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/galley.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/testimonial.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/products.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/footer.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/carousel.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/aboutus.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/header.css');?>">

</head>

<body>
    <?php include('header.inc.php'); ?>

    <!-- carousel started -->
    <section id="carousel__section">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.craftmaestros.com/pub/media/wysiwyg/Wall_Ar_2-02.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/files/Jacket_6a7d6d86-e2b3-4d45-a40b-1beca9952171.jpg?v=1618930994" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/files/Saree-Banner.jpg?v=1618930899" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- carousel ended -->
    <section id="product__section">
        <div class="container-fluid my-4">
            <div class="heading text-center">
                <img src="./Assets/images/flower-removebg.png" alt="">
                <div class="underline mx-auto"></div>
                <h1>Feature Products</h1>
                <div class="underline mx-auto"></div>
            </div>

        </div>
        <div class="container">
            <div class="slider row">
                <div class="item col-6 col-md-4 col-lg-3 p-3">
                    <div class="card text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB3192_11_800x.jpg?v=1613368708" alt="">
                        <span class="sale">on sale</span>

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href="productdesc"><button>View product</button></a>
                    </div>
                </div>
                <div class="item col-6 col-md-4 col-lg-3 p-3">
                    <div class="card text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/kb9534_2_800x.jpg?v=1598297942" alt="">
                        <span class="sale">on sale</span>

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href="./productdes.php"><button>View product</button></a>
                    </div>
                </div>
                <div class="item col-6 col-md-4 col-lg-3 p-3">
                    <div class="card text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB9492_2_800x.jpg?v=1598297896" alt="">
                        <span class="sale">on sale</span>

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href="./productdes.php"><button>View product</button></a>
                    </div>
                </div>
                <div class="item col-6 col-md-4 col-lg-3 p-3">
                    <div class="card text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1489_800x.jpg?v=1613367900" alt="">
                        <span class="sale">on sale</span>
                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href="productdesc"><button>View product</button></a>
                    </div>
                </div>
                <div class="item col-6 col-md-4 col-lg-3 p-3">
                    <div class="card text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB3018_10_800x.jpg?v=1613368416" alt="">
                        <span class="sale">on sale</span>

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href="productdesc"><button>View product</button></a>
                    </div>
                </div>
                <div class="item col-6 col-md-4 col-lg-3 p-3">
                    <div class="card text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB3044_10_800x.jpg?v=1613368424" alt="">
                        <span class="sale">on sale</span>

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href="./productdes.php"><button>View product</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product ended -->

    <!-- about us started -->
    <section id="aboutus__section" class="p-4">
        <div class="container-fluid ">
            <div class="row justify-content-evenly">
                <div class="col col-12 col-md-3 col-sm-12 text-center p-4 shadow-lg my-2">
                    <span class="">
                        <i class="fas fa-users"></i>
                    </span>
                    <h3>Dedicated Team</h3>
                </div>
                <div class="col col-12 col-md-3 col-sm-12 text-center p-4 shadow-lg my-3">
                    <span class="">
                        <i class="fas fa-user-headset "></i>
                    </span>
                    <h3>24/7 Live Support</h3>
                </div>
                <div class="col col-12 col-md-3 col-sm-12 text-center p-4 shadow-lg my-2">
                    <span class="">
                        <i class="fas fa-bullhorn  "></i>
                    </span>
                    <h3>10000+ Happy Customers</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- about us ended -->
    <!-- gallery started -->
    <section id="gallery__section">
        <div class="container-fluid my-4">
            <div class="heading text-center">
                <img src="./Assets/images/flower-removebg.png" alt="">
                <div class="underline mx-auto"></div>
                <h1>Handicrafts</h1>
                <div class="underline mx-auto"></div>
            </div>
        </div>
        <div class="container my-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-2 col-md-3 col-sm-12 justify-content-center">
                        <div class="row p-1">
                            <div class="col-12 "><a href=""><img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/files/Walnut-wood_f4a7e430-1606-4432-8791-26ce7766c53b_600x_crop_center.jpg?v=1614753501" class="img-rounded w-100" alt=""></a></div>
                        </div>
                        <div class="row p-1 ">
                            <div class="col-12  "><a href=""><img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/files/Walnut-wood_f4a7e430-1606-4432-8791-26ce7766c53b_600x_crop_center.jpg?v=1614753501" class="img-rounded w-100" alt=""></a></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 justify-content-center  image_cont">
                        <a href=""><img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/files/1_bc7c79d6-f377-46bb-992d-86d3eccb667d_600x_crop_center.jpg?v=1618469855" class="img-rounded w-100" alt=""></a>
                    </div>
                    <div class="col-12 p-2 col-md-3 col-sm-12 justify-content-center">

                        <div class="row p-1">
                            <div class="col-12"><a href=""><img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/files/Willow_9e150179-f040-4534-9baa-7b3a11d4114c_600x_crop_center.jpg?v=1614753906" class="img-rounded w-100" alt=""></a></div>

                        </div>
                        <div class="row p-1">
                            <div class="col-12"><a href=""><img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/files/Walnut-wood_f4a7e430-1606-4432-8791-26ce7766c53b_600x_crop_center.jpg?v=1614753501" class="img-rounded w-100" alt=""></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- gallery ended -->


    <!-- testimonial started -->
    <section id="testimonial">
        <div class="container-fluid my-4">
            <div class="heading text-center">
                <img src="./Assets/images/flower-removebg.png" alt="">
                <div class="underline mx-auto"></div>
                <h1>Testimonials</h1>
                <div class="underline mx-auto"></div>
            </div>

        </div>
        <div class="container">
            <div class="row  justify-content-evenly happy">
                <div class="col-12 p-3  col-md-6 col-lg-4 mx-3 my-3 rounded text-center border shadow">
                    <img class="p-2  rounded-circle img-thumbnail mx-auto " src="https://cdn.shopify.com/s/files/1/0067/4978/2119/files/siriwatana_800x800_crop_center.jpg?v=1560335817" alt="">
                    <h5 class="p-2">John Doe</h5>
                    <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque laborum aliquid, natus cumque tempora deserunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. In, iste.</p>
                    <button class="btn testimonial__button shadow">VIEW MORE</button>
                </div>
                <div class="col-12 p-3 col-md-6 col-lg-4 mx-3 my-3 rounded  text-center border shadow">
                    <img class="p-2 rounded-circle img-thumbnail mx-auto " src="https://cdn.shopify.com/s/files/1/0067/4978/2119/files/siriwatana_800x800_crop_center.jpg?v=1560335817" alt="">
                    <h5 class="p-2">Prateek</h5>
                    <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque laborum aliquid, natus cumque tempora deserunt! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, accusantium!</p>
                    <button class="btn testimonial__button shadow">VIEW MORE</button>
                </div>
                <div class="col-12 p-3 col-md-6 col-lg-4 text-center rounded border mx-3 my-3 shadow">
                    <img class="p-2 rounded-circle img-thumbnail mx-auto " src="https://cdn.shopify.com/s/files/1/0067/4978/2119/files/siriwatana_800x800_crop_center.jpg?v=1560335817" alt="">
                    <h5 class="p-2">Megha</h5>
                    <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque laborum aliquid, natus cumque tempora deserunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, porro!</p>
                    <button class="btn testimonial__button shadow">VIEW MORE</button>
                </div>

            </div>
        </div>
    </section>
    <!-- testimonial ended -->

    <?php include('footer.inc.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- <script src="./assets/js/script.js"></script> -->
    <script src="<?php echo base_url('assets/home/js/testimonial.js');?>"></script>
    <script src="<?php echo base_url('assets/home/js/product.js');?>"></script>
    <script src="<?php echo base_url('assets/home/js/scroll_btn.js');?>"></script>
</body>

</html>