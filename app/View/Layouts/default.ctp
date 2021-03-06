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
						<p><span>Dúvidas?</span> ligue  <span class="number">(11) 91234-5678</span></span></p>
					</div>
					<div class="account_desc">
						<ul>
							<li><a href="#">Registre-se</a></li>
							<li><a href="#">Login</a></li>
							<li><a href="#">Minha conta</a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
				<div class="header_top">
					<div class="logo">
						<?php
							echo $this->Html->image("logo.jpg", array(
							'url' => array('controller' => 'index.php')
							));
						?>

					</div>
					
				</div>
				<div class="clear"></div>
			</div>
			<div class="header_bottom">
				<div class="menu">
					<ul>
						<li class="active"><?php
							echo $this->Html->link(
							    'Principal',
							   	array('controller' => 'index.php')
							);
						?></li>
						<li><?php
							echo $this->Html->link(
							    'Sobre nós',
							    array(
							        'controller' => 'about',
							        'action' => 'view'
							    )
							);
						?></li>
						
						<div class="clear"></div>
					</ul>
				</div>
				<div class="search_box">
					<form>
						<input type="text" value="Busca" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Busca';}">
						<input type="submit" value="">
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<?php echo $this->fetch('content'); ?>
	<div class="footer">
		<div class="wrap">	
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h4>Informações</h4>
					<ul>
						<li>
						<?php
							echo $this->Html->link(
							    'Sobre nós',
							    array(
							        'controller' => 'about',
							        'action' => 'view'
							    )
							);
						?>
						</li>
				
						<li>
						<?php
							echo $this->Html->link(
							    'FAQ',
							    array(
							        'controller' => 'about',
							        'action' => 'faq'
							    )
							);
						?>
						</li>
						
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Minha conta</h4>
					<ul>
						<li><a href="contact.html">Login</a></li>
						<li><a href="index.html">Minha conta</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contato</h4>
					<ul>
						<li><span>(11) 91234-5678</span></li>
						<li><span>contato@ebookfacil.com</span></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4 social-icons">
					
					<h4>Siga-nos</h4>
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
		<div class="copy_right">
			<p>e-Book Fácil © All rights Reseverd | Design by  <a href="http://w3layouts.com">W3Layouts</a> </p>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop"><span id="toTopHover"> </span></a>	     
</body>
