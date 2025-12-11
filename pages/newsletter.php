<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Newsletter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
	<link rel="icon" href="/CGT-141-Final-Website/img/icon.png">
	<link rel="icon" href="/img/icon.png">
	<link rel="stylesheet" href="../css/main.css">
	<script src="../js/javascript.js" type="text/javascript"></script>
	<!--<link rel="stylesheet" href="/CGT-141-Final-Website/css/main.css"> -->
</head>
<body>
	<!-- Page Container -->
	<div class="container-fluid bg-page p-0">
		<!-- Navbar -->
		<?php include '../php/header.php'; ?>
		<!--about us-->
		<div class="container bg-light p-5">
			<h1 class="text-center">Want to stay up to date on all of our updates? Sign up for our newsletter here:</h1>
			<hr />
			<form action="../php/newsSubmitted.php" method="post">
				<div class="form-group py-3">
					<label for="emailAddress">Email Address</label>
					<input type="email" required class="form-control" id="emailAddress" placeholder="Enter a valid email address" />
				</div>
				<div class="form-group py-3">
					<label for="firstName">First Name</label>
					<input type="text" required class="form-control" id="firstName" placeholder="Your first name" />
				</div>
				<div class="form-group py-3">
					<label for="lastName">Last Name</label>
					<input type="text" required class="form-control" id="lastName" placeholder="Your last name" />
				</div>
				<div class="form-group py-3">
					<label for="mothersMaidenName">Your Mother's Maiden Name</label>
					<input type="text" required class="form-control" id="mothersMaidenName" placeholder="Please" />
				</div>
				<div class="form-group py-3">
					<label for="petName">The name of your childhood pet</label>
					<input type="text" required class="form-control" id="petName" placeholder="Greg" />
				</div>
				<div class="form-group py-3">
					<label for="siblingMiddleName">What is your oldest sibling's middle name?</label>
					<input type="text" required class="form-control" id="siblingMiddleName" placeholder="Cornelius" />
				</div>
				<div class="form-group py-3">
					<label for="dateOfBirth">Please enter your date of birth (we will be verifying this!)</label>
					<input type="datetime-local" required class="form-control" id="dateOfBirth"/>
				</div>
				<div class="form-group py-3">
					<label for="phone">Please enter your current phone number</label>
					<input type="tel" id="phone" required class="form-control"/>
				</div>
				<div class="form-group py-3">
					<label for="sellData"> Do you want us to sell your phone number and personal data to telemarketers? <label>
					<input class="form-group-input" type="checkbox" id="sellData" name="SellingYourData" checked disabled>
				</div>
				<div class="form-group py-3">
					<button class="btn btn-dark" type="submit">Submit</button>
				</div>
			</form>
		</div>
		<!--Footer-->
		<?php include '../php/footer.php'; ?>
	</div>
</body>
</html>