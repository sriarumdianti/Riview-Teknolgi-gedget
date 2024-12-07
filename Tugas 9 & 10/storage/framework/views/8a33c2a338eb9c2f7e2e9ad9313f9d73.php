<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="<?php echo e(asset('assets/icon.png')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
  <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
      </div>
      <div class="profile-details">
        <span class="admin_name">Catshop Admin</span>
      </div>
    </nav>

    <div class="home-content">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
			let sidebarBtn = document.querySelector(".sidebarBtn");
			sidebarBtn.onclick = function () {
				sidebar.classList.toggle("active");
				if (sidebar.classList.contains("active")) {
					sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
				} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
      function showDetails(tanggal, nama, kategori, harga, status) {
         let nomorhp = event.target.getAttribute('data-nomorhp');
         alert(`Tanggal: ${tanggal}\nNama: ${nama}\nKategori: ${kategori}\nHarga: ${harga}\nNomor HP: ${nomorhp}\nStatus: ${status}`);
      }
  </script>
</body>

</html>
<?php /**PATH D:\Kuliah\ngajar\CatShop1\resources\views/layouts/app.blade.php ENDPATH**/ ?>