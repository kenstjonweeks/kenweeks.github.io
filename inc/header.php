<html>

	<head>
		<title><?php echo $pageTitle;?></title>
		<meta name="viewport" content="width=device-width, intial-scale=1.0" charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">

			<div class="nav <?php if($pageTitle == 'Tower Code | Credentials' || $pageTitle == 'Tower Code | Work &amp; Projects' || $pageTitle == "Suggest Form") {
				echo 'ori_nav';
				}?>">

			<a href="index.php"><img class="navlogo" src="img/logo.png"/></a>

			<h1>Tower Code | Kenneth Weeks' Portfolio</h1>
				
				<ul class="topUN">
					<li class="topNav"><a href="index.php">Home</a></li>
					<li class="topNav"><a href="catalog.php?page=skills">Skills</a></li>
					<li class="topNav"><a href="catalog.php?page=work">Work</a></li>
					<li class="topNav"><a href="suggest.php">Contact</a></li>
				</ul>

			</div>


