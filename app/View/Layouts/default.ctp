<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>

<!DOCTYPE HTML>
<head>
	<title>e-Book Fácil</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php
		echo $this->Html->css(array('global', 'style', 'slider','easy-responsive-tabs'));
		//echo $this->Html->script(array(,'move-top','easing','startstop-slider,jquery-1.7.2.min,slider.min.jquery,easyResponsiveTabs,jquery.accordion'));
		echo $this->Html->script('jquery-1.7.2.min');
		echo $this->Html->script('move-top');
		echo $this->Html->script('easing');
		echo $this->Html->script('startstop-slider');
		echo $this->Html->script('slides.min.jquery');
		echo $this->Html->script('script');
		echo $this->Html->script('easyResponsiveTabs');
		echo $this->Html->script('jquery.accordion');
		echo $this->Html->script('jquery.easing');
		echo $this->Html->script('slides.min.jquery');
	?>

</head>


<body>
		<div class="wrap">
			<div class="header">
				<div class="headertop_desc">
					<div class="call">
						<p><span>Need help?</span> call us <span class="number">1-22-3456789</span></span></p>
					</div>
					<div class="account_desc">
						<ul>
							<li><a href="#">Register</a></li>
							<li><a href="#">Login</a></li>
							<li><a href="#">Delivery</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">My Account</a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
				<div class="header_top">
					<div class="logo">
						<?php
							echo $this->Html->image("logo.png", array(
							'url' => array('controller' => 'index.php')
							));
						?>

					</div>
					<div class="cart">
						<p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
							<ul class="dropdown">
								<li>you have no items in your Shopping cart</li>
							</ul>
						</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="header_bottom">
				<div class="menu">
					<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="delivery.html">Delivery</a></li>
						<li><a href="news.html">News</a></li>
						<li><a href="contact.html">Contact</a></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="search_box">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="">
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="wrap">	
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h4>Information</h4>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="delivery.html">Orders and Returns</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
					<ul>
						<li><a href="contact.html">Sign In</a></li>
						<li><a href="index.html">View Cart</a></li>
						<li><a href="#">My Wishlist</a></li>
						<li><a href="#">Track My Order</a></li>
						<li><a href="contact.html">Help</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
					<ul>
						<li><span>+91-123-456789</span></li>
						<li><span>+00-123-000000</span></li>
					</ul>
					<div class="social-icons">
						<h4>Follow Us</h4>
						<ul>
							<li><a href="#" target="_blank"><?php echo $this->Html->image('facebook.png');?> </a></li>
							<li><a href="#" target="_blank"><?php echo $this->Html->image('twitter.png');?> </a></li>
							<li><a href="#" target="_blank"><?php echo $this->Html->image('skype.png');?> </a></li>
							<li><a href="#" target="_blank"> <?php echo $this->Html->image('dribbble.png');?></a></li>
							<li><a href="#" target="_blank"> <?php echo $this->Html->image('linkedin.png');?></a></li>
							<div class="clear"></div>
						</ul>
					</div>
				</div>
			</div>			
		</div>
		<div class="copy_right">
			<p>Company Name © All rights Reseverd | Design by  <a href="http://w3layouts.com">W3Layouts</a> </p>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop"><span id="toTopHover"> </span></a>	     
</body>
