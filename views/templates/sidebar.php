<section id="sidebar">
	<nav>
		<a href="<?php echo $domain ?>" id="page1-link" class="link">Main</a>
		<a href="?page=collection" id="page2-link" class="link">Collection</a>
		<a href="?page=3" id="page3-link" class="link">link3</a>
		<a href="?page=4" id="page4-link" class="link">link4</a>
		<a href="?page=5" id="page5-link" class="link">link5</a>
	</nav>
</section>


<?php 
//NAVIGATION YO
	if(isset($_GET['page'])) {
		$page = $_GET['page'];

		switch($page) {

			case "1":
				$pageToLoad = 'pages/page1.php';
			break;
			case "collection":
				$pageToLoad = 'pages/collection.php';
			break;
			case "3":
				$pageToLoad = 'pages/page3.php';
			break;
			case "4":
				$pageToLoad = 'pages/page4.php';
			break;
			case "5":
				$pageToLoad = 'pages/page5.php';
			break;

		}
	}
	else {
		$pageToLoad = 'pages/page1.php';
	}

	

?>