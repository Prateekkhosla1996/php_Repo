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
    <link rel="stylesheet" href="./Assets/css/style.css">
    <link rel="stylesheet" href="./Assets/css/footer.css">
    <link rel="stylesheet" href="./Assets/css/header.css">
    <link rel="stylesheet" href="./Assets/css/contactus.css">

    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/contactus.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('./assets/home/css/footer.css'); ?>">
</head>

<body>
    <?php include('header.inc.php'); ?>

    <section id="contact__us">

        <div class="map mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.402559281352!2d76.21480201446083!3d30.707081493920874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39100fc8622eaf5f%3A0x35637f230d855d36!2sJindal%20Exports%20(India)!5e0!3m2!1sen!2sin!4v1619164547010!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="container">
            <h3 class="mx-4 px-2">DROP US A LINE</h3>
        </div>
        <div class="container">

            <div class="row">

                <div class="col-md-7 col-lg-8 col-xl-7 col-sm-12 form-contact">

                    <div class="container">
                        <div class="lang1 des">

                            Have a question or comment? Use the form below to send us a message or contact us by mail at: jinderExports@gmail.com

                        </div>
                        <?php if ($suc = $this->session->flashdata('successful')) : ?>
                            <div class="alert alert-success">
                                <?= $suc ?>
                            </div>
                        <?php endif ?>
                        <form action="addcontactus" method="post">
                            <div class="form-group">
                                <label for="contactFormName">Name <span>*</span></label><br>
                                <input type="text" id="contactFormName" name="user_name" required placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="contactFormPhone">Your Phone <span>*</span></label>
                                <br>
                                <input type="text" id="contactFormPhone" name="user_number" required placeholder="Enter your Number">
                            </div>
                            <div class="form-group">
                                <label for="contactFormEmail">Your Email <span>*</span></label><br>
                                <input type="email" required id="contactFormEmail" name="user_email" required placeholder="Enter your Email">
                            </div>
                            <div class="form-group">
                                <label for="contactFormComment">Your comment <span>*</span></label><br>
                                <textarea name="user_comment" id="" cols="65" rows="10" placeholder="Enter your Message" required></textarea>
                            </div>
                            <div class="form-group">

                                <button type="submit" value="submit" class="btn">
                                    SUBMIT
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 col-xl-3 offset-xl-2 mt-2 px-2">
                    <div class="container">
                        <h5 class="mx-2">STORE INFORMATION</h5>
                        <div class="location">
                            SRINAGAR OFFICE:- <br>
                            <p>
                                Address: First Floor, Kashmir Business Factory, Zaldagar, Nawab Bazar, Srinagar - 190002.
                            </p>

                        </div>
                        <div class="location">
                            CUSTOMER CARE:-<br>
                            <p>
                                Email: care@jinderExports.com <br>
                                Phone: +91 979 665 9999
                            </p>

                        </div>
                        <hr>
                        <div class="location">
                            OPENING HOURS: <br>
                            Monday to Saturday: 9:30 am to 5:30 pm

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include('footer.inc.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- <script src="./assets/js/script.js"></script> -->
    <script src="./Assets/js/testimonial.js"></script>
    <script src="./Assets/js/product.js"></script>
    <script src="<?php echo base_url('assets/home/js/scroll_btn.js'); ?>"></script>
</body>

</html>