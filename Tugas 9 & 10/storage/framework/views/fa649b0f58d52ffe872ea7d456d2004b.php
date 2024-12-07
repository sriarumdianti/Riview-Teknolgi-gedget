<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Transaksi</title>
    <style>
        .table-data {
            border-collapse: collapse;
            width: 100%;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 20px;
            text-align: center;
        }

        .table-data tr th {
            background-color: #2c3e50;
            color: white;
        }

        .table-data tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-data tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <h3>Data Transaksi</h3>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Status</th>
                <th>nomorhp</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($transaction->updated_at); ?></td>
                    <td><?php echo e($transaction->nama); ?></td>
                    <td><?php echo e($transaction->jenis); ?></td>
                    <td>Rp. <?php echo e(number_format($transaction->harga)); ?></td>
                    <td><?php echo e($transaction->status); ?></td>
                    <td><?php echo e($transaction->nomorhp); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="7" align="center">Tidak ada data</td>
                </tr>
            <?php endif; ?>
        </tbody>
</body>

</html>
<?php /**PATH D:\KULIAH\KULIAH\Praktikum Pemweb\Tugas 9 dan 10\resources\views/transaction/transaction-cetak.blade.php ENDPATH**/ ?>