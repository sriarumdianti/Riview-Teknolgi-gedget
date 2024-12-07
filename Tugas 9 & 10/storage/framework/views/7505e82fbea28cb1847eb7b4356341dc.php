<?php $__env->startSection('title'); ?>
Tambah Category | Catshop Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h3>Input Categories</h3>
<div class="form-login">
  <form action="<?php echo e(url('/category/store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label for="categories">Categories</label>
    <input class="input" type="text" name="nama" id="categories" placeholder="Categories" value="<?php echo e(old('nama')); ?>" />
    <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label for="price">Price</label>
    <input class="input" type="text" name="harga" id="price" placeholder="Price" value="<?php echo e(old('harga')); ?>" />
    <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label for="description">Description</label>
    <textarea class="input" name="deskripsi" id="description" placeholder="Description"><?php echo e(old('deskripsi')); ?></textarea>
    <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label for="photo">Photo</label>
    <input type="file" name="gambar" id="photo" />
    <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\KULIAH\Praktikum Pemweb\CatShop1\resources\views/categories/categories-entry.blade.php ENDPATH**/ ?>