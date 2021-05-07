<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./Assets/css/style.css">
    <link rel="stylesheet" href="./Assets/css/header.css">
    <link rel="stylesheet" href="./Assets/css/footer.css">
    <link rel="stylesheet" href="./Assets/css/productsView.css">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/header.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/productsView.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/footer.css');?>">
</head>

<body>
    <?php include('header.inc.php') ?>
    <section id="product_view__section">
        <div class="container-fluid my-4">
            <div class="heading text-center">
                <img src="./Assets/images/flower-removebg.png" alt="">
                <div class="underline mx-auto"></div>
                <h1>All Products</h1>
                <div class="underline mx-auto"></div>
            </div>

        </div>
        <div class="container my-4">
            <div class="row">
                <div class="col col-md-6 col-sm-12 my-4 p-4">

                </div>
                <div class="col col-md-6 col-sm-12 d-flex justify-content-end my-4 p-4">
                    <label for="sortby">SORT BY:</label>

                    <select id="sortby">
                        <option value="">Featured</option>
                        <option value="">Price,low to high</option>
                        <option value="">Price,high to low</option>
                        <option value="">Alphabetically, A-Z</option>
                        <option value="">Alphabetically, Z-A</option>
                        <option value="">Date, old to new</option>
                        <option value="">Date, new to old</option>
                        <option value=""> Best Selling</option>

                    </select>
                </div>

            </div>
            <div class="row">
                <!-- p1 -->
                <div class="item col-12 col-md-4 col-lg-3 p-3 ">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB3192_11_800x.jpg?v=1613368708" class="" alt="">
                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href="./productdes.php"><button>View product</button></a>
                    </div>
                </div>
                <!-- p2 -->
                <div class="item col-12 col-md-4 col-lg-3 p-3">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/kb9534_2_800x.jpg?v=1598297942" alt="">

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href="./productdes.php"><button>View product</button></a>
                    </div>
                </div>
                <!-- p3 -->
                <div class="item col-sm-12 col-md-4 col-lg-3 p-3">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB9492_2_800x.jpg?v=1598297896" alt="">

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href=""><button>View product</button></a>
                    </div>
                </div>
                <!-- p4 -->
                <div class="item col-sm-12 col-md-4 col-lg-3 p-3">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1489_800x.jpg?v=1613367900" alt="">

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href=""><button>View product</button></a>
                    </div>
                </div>
                <!-- p5 -->
                <div class="item col-sm-12 col-md-4 col-lg-3 p-3">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB3018_10_800x.jpg?v=1613368416" alt="">


                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href=""><button>View product</button></a>
                    </div>
                </div>
                <!-- p6 -->
                <div class="item col-sm-12 col-md-4 col-lg-3 p-3">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB3044_10_800x.jpg?v=1613368424" alt="">

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href=""><button>View product</button></a>
                    </div>
                </div>
                <!-- p7 -->
                <div class="item col-sm-12 col-md-4 col-lg-3 p-3">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/1_2_0739ebb3-5f1b-441d-905f-28e05d1994f6_800x.jpg?v=1604983612" alt="">


                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href=""><button>View product</button></a>
                    </div>
                </div>
                <!-- p8 -->
                <div class="item col-sm-12 col-md-4 col-lg-3 p-3">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/kb10006_2_800x.jpg?v=1598284762" alt="">


                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href=""><button class="product__button">View product</button></a>
                    </div>
                </div>
                <!-- p9 -->
                <div class="item col-sm-12 col-md-4 col-lg-3 p-3">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB4230_1_800x.jpg?v=1613369330" alt="">

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href=""><button class="product__button">View product</button></a>
                    </div>
                </div>
                <!-- p10 -->
                <div class="item col-sm-12 col-md-4 col-lg-3 p-3">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1004-03_877c5920-24f1-42c8-9310-859d79c796ed_800x.jpg?v=1598282182" alt="">

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href=""><button class="product__button">View product</button></a>
                    </div>
                </div>
                <!-- p11 -->
                <div class="item col-sm-12 col-md-4 col-lg-3 p-3">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1003-02_800x.jpg?v=1613367787" alt="">

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href=""><button class="product__button">View product</button></a>
                    </div>
                </div>
                <!-- p12 -->
                <div class="item col-sm-12 col-md-4 col-lg-3 p-3">
                    <div class="card shadow text-center">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1000-03_11d54642-664e-4775-906a-1c7bfbdbc62d_800x.jpg?v=1613367785" alt="">

                        <div class="info">
                            <h6 class="text-center">sc Rose oatmeal scrub</h6>
                            <p class="text-center">RS 1350.00</p>
                        </div>
                        <a href=""><button class="product__button">View product</button></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="pagination_nav mt-4 my-4" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item ">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </section>
    <?php include('footer.inc.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- <script src="./assets/js/script.js"></script> -->
    <script src="<?php echo base_url('assets/home/js/product.js');?>"></script>
    <script src="<?php echo base_url('assets/home/js/scroll_btn.js');?>"></script>
   
</body>

</html>