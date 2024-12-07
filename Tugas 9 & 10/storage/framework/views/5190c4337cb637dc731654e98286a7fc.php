<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="icon" href="<?php echo e(asset('assets/icon.png')); ?>" />
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="logo">
                    <img src="<?php echo e(asset('assets/logo.png')); ?>" alt="" />
                </div>
                <input type="checkbox" id="click" />
                <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Kategori</a></li>
                    <li><a href="#" class="btn_login">Masuk</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="jumbotron">
                <div class="jumbotron-text">
                    <h1>Rekomendasi Gadget terlengkap sedunia</h1>
                    <p>web ini akan menyediakan rekomendasi untuk anda</p>
                    <button type="button" class="btn_getStarted">Mulai</button>
                </div>
                <div class="jumbotron-img">
                    <img src="assets/jumbotron.png" alt="" />
                </div>
            </div>
            <div class="cards-categories">
                <h2>Kategori Gadget</h2>
                <div class="card-categories">
                    <?php if(count($categories) == 0): ?>
                        <h3 style="text-align: center; color: red;">Data Kosong</h3>
                    <?php endif; ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <div class="card-image">
                                <img src="<?php echo e(asset('img_categories/' . $data->gambar)); ?>" alt="tidak ada gambar" />
                            </div>
                            <div class="card-content">
                                <h5><?php echo e($data->nama); ?></h5>
                                <p class="description"><?php echo e($data->deskripsi); ?></p>
                                <p class="price"><?php echo e($data->harga); ?></p>
                                <button class="btn_belanja" type="button"
                                    onclick='bukaModal(<?php echo e($data->id_categories); ?>)'>Beli</button>
                            </div>
                        </div>
                        <!-- Modal 1 -->
                        <div id="myModal<?php echo e($data->id_categories); ?>" class="modal-container"
                            onclick="tutupModal(<?php echo e($data->id_categories); ?>)">
                            <div class="modal-dialog" onclick="event.stopPropagation()">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title " style="color:  #ffb72b;">Formulir Pembayaran</h1>
                                        <button type="button" class="btn-close" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <input type="hidden" name="category_id" id="category_id"
                                                value="<?php echo e($data->id_categories); ?>">
                                            <div class="form-group">
                                                <label class="labelmodal" for="recipient-name">Nama :</label>
                                                <input class="inputdata" type="text" class="form-control"
                                                    id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label class="labelmodal" for="handphone">No. Hp :</label>
                                                <input class="inputdata" type="text" class="form-control"
                                                    id="handphone">
                                            </div>
                                            <div class="form-group">
                                                <label class="labelmodal" for="alamat-text">Alamat:</label>
                                                <textarea class="inputalamat" class="form-control" id="alamat-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            onclick="tutupModal(<?php echo e($data->id_categories); ?>)">Keluar</button>
                                        <button type="button" class="btn btn-yellow"
                                            onclick="bukaModal2(<?php echo e($data->id_categories); ?>)">Lanjutkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal 2 -->
                        <div id="myModal2<?php echo e($data->id_categories); ?>" class="modal-container"
                            onclick="tutupModal2(<?php echo e($data->id_categories); ?>)">
                            <div class="modal-dialog" onclick="event.stopPropagation()">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" style="color:  #ffb72b;">Data Transaksi</h1>
                                        <button type="button" class="btn-close" aria-label="Close"
                                            onclick="tutupModal2()"></button>
                                    </div>
                                    <form action="<?php echo e(route('transaction')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="modal-body">
                                            <h4> Kategori</h4>
                                            <div class="form-group">
                                                <input type="hidden" name="id_categories"
                                                    value="<?php echo e($data->id_categories); ?>">
                                                <label class="labelmodal" for="detail-kategori">Kategori :</label>
                                                <input class="inputdata" type="text" name="detail-kategori"
                                                    class="form-control" id="detail-kategori"
                                                    value="<?php echo e($data->nama); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="labelmodal" for="detail-harga">Harga :</label>
                                                <input class="inputdata" type="text" name="detail-harga"
                                                    class="form-control" id="detail-harga"
                                                    value="<?php echo e($data->harga); ?>" readonly>
                                            </div>
                                            <h4>Pembeli</h4>
                                            <div class="form-group">
                                                <label class="labelmodal" for="detail-nama">Nama :</label>
                                                <input class="inputdata" name="detail-nama" type="text"
                                                    class="form-control" id="detail-nama" readonly>
                                                <?php $__errorArgs = ['detail-nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="labelmodal" for="detail-nomorhp">No. Hp :</label>
                                                <input class="inputdata" name="detail-nomor" type="text"
                                                    class="form-control" id="detail-nomorhp" readonly>
                                                <?php $__errorArgs = ['detail-nomor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="labelmodal" for="detail-alamat">Alamat:</label>
                                                <textarea class="inputalamat" name="detail-alamat" class="form-control" id="detail-alamat" readonly></textarea>
                                                <?php $__errorArgs = ['detail-alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <input type="hidden" name="status" value="succes">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                onclick="kembaliKeModalPertama(<?php echo e($data->id_categories); ?>)">Kembali</button>
                                            <button name="simpan" type="submit" class="btn btn-yellow"
                                                onclick="lakukanPembayaran()">Lakukan Pembayaran</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>


        </main>
        <footer>
            <h4>&copy; Lab Pemrograman Komputer 2023</h4>
        </footer>
    </div>
    <script>
        function bukaModal(categoryId) {
            var modal = document.getElementById('myModal' + categoryId);
            modal.style.display = 'flex';
        }

        function tutupModal(categoryId) {
            var modal = document.getElementById('myModal' + categoryId);
            modal.style.display = 'none';
        }

        function bukaModal2(categoryId) {
            tutupModal(categoryId); // Tutup modal pertama
            var modal2 = document.getElementById('myModal2' + categoryId);
            modal2.style.display = 'flex';

            // Ambil nilai dari input fields pada modal pertama
            var modal1 = document.getElementById('myModal' + categoryId);
            var nama = modal1.querySelector("#recipient-name").value;
            var nomorhp = modal1.querySelector("#handphone").value;
            var alamat = modal1.querySelector("#alamat-text").value;

            // Set nilai pada modal kedua
            var modal2 = document.getElementById('myModal2' + categoryId);
            modal2.querySelector("#detail-nama").value = nama;
            modal2.querySelector("#detail-nomorhp").value = nomorhp;
            modal2.querySelector("#detail-alamat").value = alamat;

        }

        function tutupModal2(categoryId) {
            var modal2 = document.getElementById('myModal2' + categoryId);
            modal2.style.display = 'none';
        }

        function kembaliKeModalPertama(categoryId) {
            tutupModal2(categoryId);
            bukaModal(categoryId);
        }

        window.onclick = function(event) {
            if (event.target.classList.contains('modal-container')) {
                event.target.style.display = 'none';
            }
        };

        function lakukanPembayaran() {
            alert("Pembayaran berhasil!");
            tutupModal2();
            document.getElementById("recipient-name").value = "";
            document.getElementById("handphone").value = "";
            document.getElementById("alamat-text").value = "";
        }
    </script>
</body>

</html>
<?php /**PATH D:\KULIAH\KULIAH\Praktikum Pemweb\CatShop1\resources\views/welcome.blade.php ENDPATH**/ ?>