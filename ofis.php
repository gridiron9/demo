<?php


$content1 = "<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like <strong>Aldus PageMaker</strong> including versions of Lorem Ipsum.";

$content2 = "Contrary to popular belief, Lorem Ipsum is not simply <strong>random text</strong>. It has roots in a piece of classical Latin literature from 45 BC, making it over <strong>2000 years old</strong>. <strong>Richard McClintock</strong>, a Latin professor at <strong>Hampden-Sydney College in Virginia</strong>, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections<sub> 1.10.32</sub> of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet..' comes from a line in section<sub> 1.10.32</sub>.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from 'de Finibus Bonorum et Malorum' by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by <strong>H. Rackham.</strong>";
$content3 = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a <strong>more-or-less normal distribution of letters</strong>, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";
$content4 = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a <strong>passage of Lorem Ipsum</strong>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over <strong>200 Latin words</strong>, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";
	
	
		
	
	if ( isset($_GET["search"])){
   		 $word = $_GET["search"];
      // echo $word;
     // while (strpos($content, $word)>0) {
      		$content1 = str_replace($word, "<strong>".$word."</strong>", $content1);
      //	}	
       		$content2 = str_replace($word, "<strong>".$word."</strong>", $content2);
      		$content3 = str_replace($word, "<strong>".$word."</strong>", $content3);
      		$content4 = str_replace($word, "<strong>".$word."</strong>", $content4);
  }
       
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Demo Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styleofis.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a href="#" class="navbar-brand"><img src="img/loho.png" style="width: 75px; border-radius:29%; "></a>
			<button class="navbar-toggler" type="button" data-toggle = "collapse"
		data-target="#navbarResponsive">
			<span class = "navbar-toggler-icon"></span>
		</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item" active>
						<a href="#" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">About us</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Products</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Contacts</a>
					</li>
				</ul>

				<select class="nav-select">
					<option class="nav-option">Aze</option>
					<option class="nav-option">Eng</option>
					<option class="nav-option">Rus</option>
				</select>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 main">
				<h1 class="head"> DUA </h1>
					<h2 class="head">Duanin terkibi</h2>
						<h5 id="C1" class="head">What is Lorem Ipsum?</h5>
						<p> <img src="img/test.jpg" alt="Picture of lorem Ipsum" class="img" width="200px"; height="auto" style="float: left">
							<?php echo $content1;?></p>
							<h5 id="C2"> Where does it come from? </h5>
						<p> <?php echo $content2;?></p>	
							<h5 id="C3"> Why do we use it? </h5>
						<p> <?php echo $content3;?>
							<iframe width="560" height="315" src="https://www.youtube.com/embed/EIdkOWmQaaw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</p>
							<h5 id="C4"> Where can I get some? </h5>
						<p> <?php echo $content4;?>

						</p>
							<iframe width="100%" height="20%" src="https://www.openstreetmap.org/export/embed.html?bbox=-0.004017949104309083%2C51.47612752641776%2C0.00030577182769775396%2C51.478569861898606&layer=mapnik"> ></iframe>
							
			</div>
		
	
			<div class="col-lg-4">
				<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<input type="submit"> 
				<input type="text" name="search" class="btn1" >
				</form>
				<br>
				<br>
				<br>
				<ul class="content">
					<li>Dua</li>
					<li>Duanin Terkibi</li>
					<ol>
					<li>
						<a class="trans" href="#C1" style="scroll-behavior: smooth;">Chapter one</a>
					</li>
					<li>
						<a class="trans" href="#C2" style="scroll-behavior: smooth;">Chapter two</a>
					</li>
					<li>
						<a class="trans" href="#C3" style="scroll-behavior: smooth;">Chapter thee</a>
					</li>
					<li>
						<a class="trans" href="#C4" style="scroll-behavior: smooth;">Chapter four</a>
					</li>
					</ol>
				</ul>
				
				
			</div>
	</div>	
</div>


</body>
</html>