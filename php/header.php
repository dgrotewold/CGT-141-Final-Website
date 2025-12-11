<nav class="navbar navbar-expand-xl h3 pb-0">
	<div class="container-fluid p-0">
		<a class="navbar-brand text-white" href="../">
			<img class="img-fluid m-4" src="../img/header.png" alt="logo" style="min-width:360px; max-width:30%;" />
		</a>
		<button class="navbar-toggler navbar-dark m-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item m-auto px-3">
					<a class="nav-link active text-white" aria-current="page" href="../">Home</a>
				</li>
				<li class="nav-item dropdown text-white m-auto px-3">
					<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Destinations
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="../pages/spain.php">Spain</a></li>
						<li><a class="dropdown-item" href="../pages/dubai.php">Dubai</a></li>
						<li><a class="dropdown-item" href="../pages/toronto.php">Toronto</a></li>
						<li><a class="dropdown-item" href="../pages/france.php">France</a></li>
						<li><a class="dropdown-item" href="../pages/hongkong.php">Hong Kong</a></li>
						<li><a class="dropdown-item" href="../pages/chongqing.php">Chongqing</a></li>
					</ul>
				</li>
				<li class="nav-item m-auto px-3">
					<a class="nav-link text-white" href="../pages/aboutus.php">About</a>
				</li>
				<li class="nav-item m-auto px-3">
					<a class="nav-link text-white text-nowrap" href="../pages/contactus.php">Contact Us</a>
				</li>
			</ul>
		</div>
		<form class="d-flex m-auto w-75 px-3" role="search" action="javascript:searchFunction()" style="max-width:400px">
			<input class="navbar-form w-100 me-a" type="text" name="search" placeholder="Search" id="searchForm" aria-label="Search" />
			<button class="btn btn-dark" type="submit">Search</button>
		</form>
	</div>
</nav>