<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<!-- NAVIGATION -->
	<nav class = "navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img style="width: auto; heigh: 40px" src="img/rsz_bootstraplogo.png">
		</a>

  			<div class="collapse navbar-collapse" id="navbarResponsive">
  				<ul class = "navbar-nav ml-auto">
  					<li class="nav-item active">
  						<a class="nav-link" href="#">Home</a>
  					</li>
  					<li class="nav-item">
  						<a class = "nav-link" href="#"> About Us</a>
  					</li>
  					<li class="nav-item">
  						<a class = "nav-link" href="#"> About Us</a>
  					</li>
  					<li class="nav-item">
  						<a class = "nav-link" href="#"> About Us</a>
  					</li>
  					<li class="nav-item">
  						<a class = "nav-link" href="#"> About Us</a>
  					</li>
  					<li>
  					    <select>
  					    	 <option value="eng " class="active">Eng</option>
 							 <option value="azerb">Aze</option>
  							 <option value="rus">Rus</option>
						</select> 
  					</li>
  				</ul>
  			</div>
		</div>
	</nav>

<!-- TITLE -->
<div class="container padding">
	<div class="row padding">
	<div class="col-md-8 col-sm-12 title">
		<h1 align="center"> Nikola Tesla</h1>
		
		<p>
			<img src="img/tesla.jpg" style="float: right;" data-file-width="231" data-file-height="355" width="170" height="261">
Born and raised in the Austrian Empire, Tesla received an advanced education in engineering and physics in the 1870s and gained practical experience in the early 1880s working in telephony and at Continental Edison in the new electric power industry. He emigrated to the United States in 1884, where he would become a naturalized citizen. He worked for a short time at the Edison Machine Works in New York City before he struck out on his own. With the help of partners to finance and market his ideas, Tesla set up laboratories and companies in New York to develop a range of electrical and mechanical devices. His alternating current (AC) induction motor and related polyphase AC patents, licensed by Westinghouse Electric in 1888, earned him a considerable amount of money and became the cornerstone of the polyphase system which that company would eventually market.

Attempting to develop inventions he could patent and market, Tesla conducted a range of experiments with mechanical oscillators/generators, electrical discharge tubes, and early X-ray imaging. He also built a wireless-controlled boat, one of the first ever exhibited. Tesla became well known as an inventor and would demonstrate his achievements to celebrities and wealthy patrons at his lab, and was noted for his showmanship at public lectures. </p>

</div>

<!--col4-->
<div class="col-md-4 ">
	
	<div class="categories">
		<div class="cat-body">
			<h4 class="cat-title">Categories</h4>
			<ol >
	 		<li>
	 			<a href="#">fizika</a>
	 		</li>
	 		<li>
	 			<a href="#">riyaziyyat</a>
	 		</li>
	 		<li>
	 			<a href="#">kimya</a>
	 		</li>
	 		<li>
	 			<a href="#">biologiya</a>
	 		</li>
	 	</ol>
				</div>	
			</div>
			<br>
    <div class= "tags">
    	<h3>Tags</h3>
    	<ol>
	 		<li>
	 			<a href="#">fizika</a>
	 		</li>
	 		<li>
	 			<a href="#">riyaziyyat</a>
	 		</li>
	 		<li>
	 			<a href="#">kimya</a>
	 		</li>
	 		<li>
	 			<a href="#">biologiya</a>
	 		</li>
	 	</ol>
	 	
    </div>
    <form class="form-horizontal">
    	
    	<h4>Subscribe</h4>
    	<br>
    	<div class="form-group">
    	<label class="control-label" for="email">Email:</label>
    	
    	<input size = "35" class="form-control" type="email" id="email" name="email" placeholder="enter your email"  required />
    	
    	</div>
		<button type = "button" name="submit" class="btn btn-primary" value="Submit"> Submit</button>
    </div>
    </form>
</div>


</div>
</div>
<!--Social icons-->
<footer>
<div class="container padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>

</div>
</footer>

</body>
</html>