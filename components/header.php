
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title ?? 'Электронная библиотека'?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="site-wrap">


	<header class="site-navbar" role="banner">
		<div class="container-fluid">
			<div class="row align-items-center">

				<div class="col-12 search-form-wrap js-search-form">
					<form method="get" action="#">
						<input type="text" id="s" class="form-control" placeholder="Search...">
						<button class="search-btn" type="submit"><span class="icon-search"></span></button>
					</form>
				</div>

				<div class="col-4 site-logo">
					<a href="/" class="text-black h2 mb-0">Электронная библиотека</a>
				</div>

				<div class="col-8 text-right">
					<nav class="site-navigation" role="navigation">
						<ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
							<li><a href="/">Каталог</a></li>
							<li><a href="books_list_category.php?cat_id=<?=1?>">Фантастика</a></li>
							<li><a href="books_list_category.php?cat_id=<?=2?>">Детективы</a></li>
							<li><a href="books_list_category.php?cat_id=<?=3?>">Приключения</a></li>														
							
						</ul>
					</nav>
					<a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
			</div>

		</div>
	</header>