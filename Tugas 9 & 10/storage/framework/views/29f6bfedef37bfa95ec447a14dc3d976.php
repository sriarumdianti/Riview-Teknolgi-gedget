<?php $__env->startSection('title'); ?>
Hapus Category | Catshop Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h3>Hapus Categories</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href=<?php echo e(url('/category/destroy/' . $category->id_categories )); ?>>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/category">
      No
    </a>
  </button>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\KULIAH\Praktikum Pemweb\Tugas 9 dan 10\resources\views/categories/categories-hapus.blade.php ENDPATH**/ ?>