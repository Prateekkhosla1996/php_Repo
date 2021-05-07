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
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/header.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/productsDes.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/products.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/footer.css');?>">
    

</head>

<body>
    <?php include('header.inc.php') ?>
    <section id="product_desc">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-6 col-sm-12 p-2">
                    <!-- 
                    <div class="shower border ">
                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1004-03_877c5920-24f1-42c8-9310-859d79c796ed_800x.jpg?v=1598282182" id="show-img">
                    </div>
                    <div class="small-img">
                        <img src="./Assets/images/next-icon.png" class="icon-left" alt="" id="prev-img">
                        <div class="small-container ">
                            <div id="small-img-roll">
                                <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1004-03_877c5920-24f1-42c8-9310-859d79c796ed_800x.jpg?v=1598282182" class="show-small-img" alt="">
                                <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1004-03_877c5920-24f1-42c8-9310-859d79c796ed_800x.jpg?v=1598282182" class="show-small-img" alt="">
                                <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1003-02_800x.jpg?v=1613367787" class="show-small-img" alt="">
                                <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB4230_1_800x.jpg?v=1613369330" class="show-small-img" alt="">
                            </div>
                        </div>
                        <img src="./Assets/images/next-icon.png" class="icon-right" alt="" id="next-img">
                    </div> -->
                    <div class="card-wrapper">
                        <div class="card-content">
                            <!-- card left -->
                            <div class="product-imgs">
                                <div class="img-display">
                                    <div class="img-showcase">
                                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1004-03_877c5920-24f1-42c8-9310-859d79c796ed_800x.jpg?v=1598282182" alt="">
                                        <img src="//cdn.shopify.com/s/files/1/0067/4978/2119/products/kb10005_1_1024x1024.jpg?v=1598284761" alt="">
                                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/4-_2_54cae78f-8197-4c75-90ca-4fcc8c75fe96_800x.jpg?v=1604983614" alt="">
                                        <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1003-02_800x.jpg?v=1613367787" alt="">

                                    </div>
                                </div>
                                <div class="img-select">
                                    <div class="img-item">
                                        <a href="" data-id="1">
                                            <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1004-03_877c5920-24f1-42c8-9310-859d79c796ed_800x.jpg?v=1598282182" alt="">

                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="" data-id="2">
                                            <img src="//cdn.shopify.com/s/files/1/0067/4978/2119/products/kb10005_1_1024x1024.jpg?v=1598284761" />
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="" data-id="3">
                                            <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/4-_2_54cae78f-8197-4c75-90ca-4fcc8c75fe96_800x.jpg?v=1604983614" alt="">

                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="" data-id="4">
                                            <img src="https://cdn.shopify.com/s/files/1/0067/4978/2119/products/KB1003-02_800x.jpg?v=1613367787">
                                        </a>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6  p-1 border">
                    <h4 class="text-center">Posh Bahaar Sea Blue Woolen Suit</h4>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Description
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class=" p-2 justify-content-center accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Winters are coming. It's time to switch to something warm and graceful at the same time. A bright Sea Blue Salwar Suit along with a Stole in pure Kashmiri wool which features bold and labyrinths kaleidoscopic Aari Embroidery ornations will not just add a touch of rich cultures to your winter look, but keep you cozy and snug throughout this winter season.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Product details
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="p-2 accordion-collapse active " aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" colspan="25">product Details</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">fabric</th>
                                                <td colspan="25"> Wool</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">color</th>
                                                <td colspan="25"> steal blue</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">size</th>
                                                <td colspan="25"> Suit: 5.5 Metres, Stole: 2.15 Metres</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Care</th>
                                                <td colspan="25">Dry Clean </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Embroidery</th>
                                                <td colspan="25">Machine Aari</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Type</th>
                                                <td colspan="25"> 3 Pc Suit</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">COD</th>
                                                <td colspan="25">Available For this Product</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center btn__container">
                        <button class="btn enquerybutton" id="enquirybtn">Enquire now</button>
                    </div>
                </div>
                <!-- modal started -->
                <div id="myModal" class="modal__container">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="container">
                            <h3 class="text-center">Enquery Form</h3>
                            <div class="row">
                                <div class=" col-md-10-offset-1 ">
                                    <form action="" method="post">
                                        <div class="form-group p-2">

                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                                        </div>
                                        <div class="form-group p-2">

                                            <input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Your name">
                                        </div>
                                        <div class="form-group p-2">

                                            <input type="number" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Your number">

                                        </div>
                                        <div class="form-group p-2">
                                            <textarea name="message" id="" class="form-control" cols="30" rows="5" placeholder="enter your message..."></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-warning">submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal ended -->
            <!-- You may also like  started-->


        </div>

        <div class="container mt-5">
            <h4>YOU MAY ALSO LIKE</h4>
        </div>
        <hr>
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
                        <a href="./productdes.php"><button>View product</button></a>
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
                        <a href="./productdes.php"><button>View product</button></a>
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
                        <a href="./productdes.php"><button>View product</button></a>
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
        <!-- you may also like ended -->
    </section>

    <?php include('footer.inc.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- <script src="./assets/js/script.js"></script> -->

    <script src="<?php echo base_url('assets/home/js/zoom_img.js');?>"></script>
    <script src="<?php echo base_url('assets/home/js/productdes.js');?>"></script>
    <script src="<?php echo base_url('assets/home/js/popupform.js');?>"></script>
    <script src="<?php echo base_url('assets/home/js/product.js');?>"></script>
    <script src="<?php echo base_url('assets/home/js/scroll_btn.js');?>"></script>
</body>

</html>