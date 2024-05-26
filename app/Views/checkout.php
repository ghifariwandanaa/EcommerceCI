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
                        <?php if (session()->getFlashdata('error')) : ?>
                            <p style="color: red;"><?php echo session()->getFlashdata('error'); ?></p>
                        <?php endif; ?>

                        <form action="/checkout/processCheckout" method="post">
                            <input type="hidden" name="id_transaksi" value="<?php echo esc($id_transaksi); ?>">

                            <div class="mb-3">
                                <label for="nama_pelanggan" class="form-label">Nama Pelanggan:</label>
                                <input type="text" id="nama_pelanggan" class="form-control" name="nama_pembeli" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No Handphone:</label>
                                <input type="text" id="no_hp" class="form-control" name="no_hp" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat:</label>
                                <input type="text" id="alamat" class="form-control" name="alamat" required>
                            </div>




                            <div class="cart-footer d-flex mt-30">
                                <div class="update-checkout w-50 text-right">
                                    <button type="submit" class="btn btn-clear-cart">Proses Checkout</button>
                                </div>

                            </div>
                        </form>


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