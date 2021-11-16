<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
<?php 
	$title="about page";
	include 'inc-head.php';
	
	?>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="menu">
						<a href="about.html">About</a>
						<ul class="primary">
							<li class="">
								<a href="product.html">Product</a>
							</li>
						</ul>
					</li>
					<li class="menu selected">
						<a href="blog.html">Blog</a>
						<ul class="secondary">
							<li>
								<a href="singlepost.html">Single post</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>Blog</h1>
				</div>
			</div>
			<div class="blog">
				<div class="featured">
					<ul>
						<li>
							<img src="images/new-chills.png" alt="">
							<div>
								<h1>NEW CHILLS FOR SUMMER</h1>
								<span>By Admin on November 28, 2023</span>
								<p>You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template.</p>
								<a href="singlepost.html" class="more">Read More</a>
							</div>
						</li>
						<li>
							<img src="images/berries.png" alt="">
							<div>
								<h1>BERRIES ON THE GROVE</h1>
								<span>By Admin on November 28, 2023</span>
								<p>You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template.</p>
								<a href="singlepost.html" class="more">Read More</a>
							</div>
						</li>
					</ul>
					<a href="blog.html" class="load">Load More</a>
				</div>
				<div class="sidebar">
					<h1>Recent Posts</h1>
					<img src="images/on-diet.png" alt="">
					<h2>ON THE DIET</h2>
					<span>By Admin on November 28, 2023</span>
					<p>You can replace all this text with your own text. You can remove any link to our website from this website template.</p>
					<a href="singlepost.html" class="more">Read More</a>
				</div>
			</div>
		</div>
		<?php include 'inc-footer.php'?>
	</div>
</body>
</html>
