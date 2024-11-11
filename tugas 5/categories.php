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
			<h3>Rekomendasi Gadget</h3>
			<button type="button" class="btn btn-tambah">
				<a href="categories-entry.php">Tambah Data</a>
			</button>
			<table class="table-data">
				<thead>
					<tr>
						<th scope="col" style="width: 20%">Foto</th>
						<th>Nama Gadget</th>
						<th scope="col" style="width: 20%">Deskripsi</th>
						<th scope="col" style="width: 15%">Harga</th>
						<th scope="col" style="width: 30%">Aksi</th>
					</tr>
				</thead>
				<tbody id="gadgetTableBody">
					<!-- Data akan diisi dengan JavaScript -->
				</tbody>
			</table>
		</div>
	</section>
	<script src="js/categories.js"></script>
</body>
</html>