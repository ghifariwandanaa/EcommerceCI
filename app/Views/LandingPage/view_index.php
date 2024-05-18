<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title  -->
    <title>Ahmad - Fashion Ecommerce Template | Home</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <!-- ****** Header Area End ****** -->
        <!-- ****** Top Discount Area Start ****** -->
        <section class="top-discount-area d-md-flex align-items-center">
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Free Shipping &amp; Returns</h5>
                <h6><a href="#">BUY NOW</a></h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Discount for all dresses</h5>
                <h6>USE CODE: Colorlib</h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Discount for students</h5>
                <h6>USE CODE: Colorlib</h6>
            </div>
        </section>
        <!-- ****** Top Discount Area End ****** -->
        <!-- ****** Quick View Modal Area Start ****** -->
        <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- ****** Quick View Modal Area End ****** -->
        <!-- ****** New Arrivals Area Start ****** -->
        <section class="new_arrivals_area section_padding_100_0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>New Arrivals</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="search-and-cart">
                <form class="search-form" action="#" method="get">
                    <input type="text" name="search" placeholder="Search for products...">
                    <button type="submit">Search</button>
                </form>
            </div>

            <div class="cart-icon">
                <a href="<?= site_url('cart') ?>">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Cart</span>
                </a>
            </div>
            <div class="container">
                <div class="row Ahmad-new-arrivals">
                    <?php foreach ($barang as $item) : ?>
                        <!-- Single gallery Item Start -->
                        <div class="col-12 col-sm-6 col-md-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="/img/product-img/<?= $item['foto_barang'] ?>" alt="<?= $item['nama_barang'] ?>">
                                <div class="product-quicview">
                                    <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <h4 class="product-price">Rp. <?= number_format($item['harga'], 0, ',', '.') ?></h4>
                                <p><?= $item['nama_barang'] ?></p>
                                <!-- Add to Cart Form -->
                                <a href="<?= site_url('cart/add/' . $item['kode_barang']) ?>" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- ****** New Arrivals Area End ****** -->
    </div>
    <!-- /.wrapper end -->
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
