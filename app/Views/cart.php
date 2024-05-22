<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Karl - Fashion Ecommerce Template | Cart</title>
    <link rel="icon" href="<?= base_url('img/core-img/favicon.ico') ?>">
    <link rel="stylesheet" href="<?= base_url('css/core-style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
    <link href="<?= base_url('css/responsive.css') ?>" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <header class="header_area bg-img background-overlay-white" style="background-image: url(<?= base_url('img/bg-img/bg-1.jpg') ?>);">
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">
                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <div class="top_logo">
                                    <a href="#"><img src="<?= base_url('img/core-img/logo.png') ?>" alt=""></a>
                                </div>
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <div class="cart">
                                        <a href="<?= base_url('cart') ?>" target="_blank"><span class="cart_quantity"><?= count($items) ?></span> <i class="ti-bag"></i> Your cart</a>
                                        <ul class="cart-list">
                                            <?php foreach ($items as $item): ?>
                                                <li>
                                                    <a href="#" class="image"><img src="<?= base_url($item['foto_barang']) ?>" class="cart-thumb" alt=""></a>
                                                    <div class="cart-item-desc">
                                                        <h6><a href="#"><?= $item['nama_barang'] ?></a></h6>
                                                        <p><?= $item['jumlah'] ?>x - <span class="price"><?= $item['harga'] ?></span></p>
                                                    </div>
                                                    <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                                </li>
                                            <?php endforeach; ?>
                                            <li class="total">
                                                <span class="pull-right">Total: <span id="cart-total"><?= $subtotal ?></span></span>
                                                <a href="cart.html" class="btn btn-sm btn-cart">Cart</a>
                                                <a href="checkout-1.html" class="btn btn-sm btn-checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-right-side-menu ml-15">
                                        <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_header_area">
            <center><strong>Selamat Checkout</strong></center>
            </div>
        </header>
        
        <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($items as $item): ?>
                                        <tr>
                                            <td class="cart_product_img d-flex align-items-center">
                                                <img src="<?= base_url($item['foto_barang']) ?>" alt="<?= $item['nama_barang'] ?>" class="cart-thumb">
                                            </td>
                                            <td class="price"><span><?= $item['harga'] ?></span></td>
                                            <td class="qty">
                                                <div class="quantity">
                                                <?= $item['jumlah'] ?>
                                                </div>
                                            </td>
                                            <td class="total_price"><span class="item-total"><?= $item['harga'] * $item['jumlah'] ?></span></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-footer d-flex mt-30">
                            <div class="back-to-shop w-50">
                                <a href="<?= base_url('barang') ?>">Continue shopping</a>
                            </div>
                            <div class="update-checkout w-50 text-right">
                                <a href="<?= base_url('cart/clear') ?>" class="btn btn-clear-cart">Clear cart</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="coupon-code-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Coupon code</h5>
                                <p>Enter your coupon code</p>
                            </div>
                            <form action="#">
                                <input type="search" name="search" placeholder="#569ab15">
                                <button type="submit">Apply</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="shipping-method-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Shipping method</h5>
                                <p>Select the one you want</p>
                            </div>

                            <div class="custom-control custom-radio mb-30">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio1"><span>Next day delivery</span><span>$4.99</span></label>
                            </div>

                            <div class="custom-control custom-radio mb-30">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio2"><span>Standard delivery</span><span>$1.99</span></label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label d-flex align-items-center justify-content-between" for="customRadio3"><span>Personal Pickup</span><span>Free</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Cart total</h5>
                                <p>Final info</p>
                            </div>

                            <ul class="cart-total-chart">
                                <li><span>Subtotal</span> <span id="subtotal"><?= $subtotal ?></span></li>
                                <li><span>Shipping</span> <span>Free</span></li>
                                <li><span><strong>Total</strong></span> <span><strong id="grand-total"><?= $subtotal ?></strong></span></li>
                            </ul>
                            <a href="<?= base_url('cart/checkout') ?>" class="btn karl-checkout-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer_area">
            <!-- Footer content -->
        </footer>
    </div>
    <script src="<?= base_url('js/jquery/jquery-2.2.4.min.js') ?>"></script>
    <script src="<?= base_url('js/popper.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('js/plugins.js') ?>"></script>
    <script src="<?= base_url('js/active.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $('.btn-update-cart').click(function() {
                var quantities = {};
                $('.qty-input').each(function() {
                    var kode_barang = $(this).data('kode_barang');
                    var qty = $(this).val();
                    quantities[kode_barang] = qty;
                });

                $.ajax({
                    url: '<?= base_url('cart/update') ?>',
                    method: 'POST',
                    data: {
                        quantities: quantities
                    },
                    success: function(response) {
                        $('#subtotal').text(response.subtotal);
                        $('#grand-total').text(response.subtotal);
                        $('.cart_quantity').text(Object.keys(response.items).length);
                        $('.cart-list').html('');
                        $.each(response.items, function(key, value) {
                            var itemRow = '<li><a href="#" class="image"><img src="' + value.foto_barang + '" class="cart-thumb" alt=""></a><div class="cart-item-desc"><h6><a href="#">' + value.nama_barang + '</a></h6><p>' + value.jumlah + 'x - <span class="price">' + value.harga + '</span></p></div><span class="dropdown-product-remove"><i class="icon-cross"></i></span></li>';
                            $('.cart-list').append(itemRow);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>
</html>

