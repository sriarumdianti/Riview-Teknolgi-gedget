<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="asset/icon.png" />
	<link rel="stylesheet" href="css/admin.css" />
	<!-- Boxicons CDN Link -->
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Rekomendasi Gadget</title>
</head>

<body>
	<div class="sidebar">
		<div class="logo-details">
			<i class="bx bx-category"></i>
			<span class="logo_name">Logo</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="admin.php" class="active">
					<i class="bx bx-grid-alt"></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="categories.php">
					<i class="bx bx-box"></i>
					<span class="links_name">Data</span>
				</a>
			</li>
			<li>
				<a href="login.php">
					<i class="bx bx-log-out"></i>
					<span class="links_name">Log out</span>
				</a>
			</li>
		</ul>
	</div>
	<section class="home-section">
		<nav>
			<div class="sidebar-button">
				<i class="bx bx-menu sidebarBtn"></i>
			</div>
		</nav>
		<div class="home-content">
			<h3>Input Rekomendasi Gadget</h3>
			<div class="form-login">
				<form id="gadgetForm" onsubmit="saveGadgetData(event)">
					<label for="categories">Nama Gadget</label>
					<input class="input" type="text" name="gadget_name" id="gadget_name" placeholder="Nama Gadget" required />
					<label for="price">Harga</label>
					<input class="input" type="text" name="price" id="price" placeholder="Harga" required />
					<label for="description">Deskripsi</label>
					<input class="input" type="text" name="description" id="description" placeholder="Deskripsi" required />
					<label for="photo">Foto</label>
					<input type="file" name="photo" id="photo" style="margin-bottom: 20px" required />
					<button type="submit" class="btn btn-simpan" name="simpan">Simpan</button>
				</form>
			</div>
		</div>
	</section>
	<script src="js/categories-entry.js"></script>
</body>
</html>