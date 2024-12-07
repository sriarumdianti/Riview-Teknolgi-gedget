<?php $__env->startSection('title'); ?>
    Transaksi | Catshop Admin
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h3>Transaction</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/transaction/cetak">Cetak</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($transaction->updated_at); ?></td>
                    <td><?php echo e($transaction->nama); ?></td>
                    <td><?php echo e($transaction->jenis); ?></td>
                    <td>Rp. <?php echo e(number_format($transaction->harga)); ?></td>
                    <td><?php echo e($transaction->status); ?></td>
                    <td style='display: none;'><?php echo e($transaction->nomorhp); ?></td>
                    <td>
                        <button class='btn_detail' data-nomorhp='<?php echo e($transaction->nomorhp); ?>'
                            onclick='showDetails("<?php echo e($transaction->tanggal); ?>", "<?php echo e($transaction->nama); ?>", "<?php echo e($transaction->jenis); ?>", "<?php echo e($transaction->harga); ?>", "<?php echo e($transaction->status); ?>")'>Detail</button>
                    </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" align="center">Tidak ada data</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\KULIAH\Praktikum Pemweb\Tugas 9 dan 10\resources\views/transaction/transaction.blade.php ENDPATH**/ ?>