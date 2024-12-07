<div class="sidebar">
    <div class="logo-details">
      <i class="bx bx-category"></i>
      <span class="logo_name">Gadget</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="/category" class="<?php echo e(request()->Is('category*') ? 'active' : ''); ?>">
          <i class="bx bx-box"></i>
          <span class="links_name">Categories</span>
        </a>
      </li>
      <li>
        <a href="/transaksi" class="<?php echo e(request()->Is('transaction*') ? 'active' : ''); ?>">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">Transaction</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <?php /**PATH D:\KULIAH\KULIAH\Praktikum Pemweb\CatShop1\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>