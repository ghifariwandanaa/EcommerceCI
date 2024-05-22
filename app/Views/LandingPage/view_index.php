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
  <link rel="icon" href=" <?= base_url('img/core-img/favicon.ico') ?> ">
  <!-- Core Style CSS -->
  <link rel="stylesheet" href=" <?= base_url('css/core-style.css') ?>">
  <link rel="stylesheet" href=" <?= base_url('style.css') ?> ">
  <!-- Responsive CSS -->
  <link href=" <?= base_url('css/responsive.css') ?> " rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <!-- component -->
  <div class="bg-white">
    <div class="border py-3 px-6">
      <div class="flex justify-between">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
          </svg>
          <span class="ml-2 font-semibold text-[#252C32]">What a Market</span>
        </div>

        <div class="ml-6 flex flex-1 gap-x-3">
          <div class="flex cursor-pointer select-none items-center gap-x-2 rounded-md border bg-[#4094F7] py-2 px-4 text-white hover:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-sm font-medium">Categories</span>
          </div>

          <input type="text" class="w-full rounded-md border border-[#DDE2E4] px-3 py-2 text-sm" value="DJI phantom" />
        </div>

        <div class="ml-2 flex">
          <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
              <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
              <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
            <span class="text-sm font-medium">Orders</span>
          </div>

          <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
            <span class="text-sm font-medium">Favorites</span>
          </div>

          <div class="flex cursor-pointer items-center gap-x-1 rounded-md py-2 px-4 hover:bg-gray-100">
            <div class="relative">
              <a href="<?= site_url('cart') ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                </svg>
            </div>
            <span class="text-sm font-medium">Cart</span>
          </div>

          <div class="ml-2 flex cursor-pointer items-center gap-x-1 rounded-md border py-2 px-4 hover:bg-gray-100">
            <span class="text-sm font-medium">Sign in</span>
          </div>
        </div>
      </div>

      <div class="mt-4 flex items-center justify-between">
        <div class="flex gap-x-2 py-1 px-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
          </svg>
          <span class="text-sm font-medium">California</span>
        </div>

        <div class="flex gap-x-8">
          <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Best seller</span>
          <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">New Releases</span>

        </div>

        <span class="cursor-pointer rounded-sm py-1 px-2 text-sm font-medium hover:bg-gray-100">Becoma a seller</span>
      </div>
    </div>
  </div>
  <div id="wrapper">
    <!-- ****** Header Area End ****** -->
    <!-- ****** Top Discount Area Start ****** -->
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


      <div class="container">
        <div class="row Ahmad-new-arrivals">
          <?php foreach ($barang as $item) : ?>
            <!-- Single gallery Item Start -->
            <div class="col-12 col-sm-6 col-md-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.2s">
              <!-- Product Image -->
              <div class="product-img">
                <img src="/img/product-img/<?= htmlspecialchars($item['foto_barang']) ?>" alt="<?= htmlspecialchars($item['nama_barang']) ?>">
                <div class="product-quicview">
                  <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                </div>
              </div>
              <!-- Product Description -->
              <div class="product-description">
                <h4 class="product-price">Rp. <?= number_format($item['harga'], 0, ',', '.') ?></h4>
                <p><?= htmlspecialchars($item['nama_barang']) ?></p>
                <p>Stok : <?= htmlspecialchars($item['stok']) ?></p>
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
  <script src=" <?= base_url('js/jquery/jquery-2.2.4.min.js') ?> "></script>
  <!-- Popper js -->
  <script src=" <?= base_url('js/popper.min.js') ?> "></script>
  <!-- Bootstrap js -->
  <script src=" <?= base_url('js/bootstrap.min.js') ?>"></script>
  <!-- Plugins js -->
  <script src=" <?= base_url('js/plugins.js') ?>"></script>
  <!-- Active js -->
  <script src=" <?= base_url('js/active.js') ?>"></script>
</body>

</html>