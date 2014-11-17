<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<div class="header_slide wrap">
	<div class="header_bottom_left">				
		<div class="categories">
			<ul>
				<h3>Categories</h3>
				<li><a href="#">Mobile Phones</a></li>
				<li><a href="#">Desktop</a></li>
				<li><a href="#">Laptop</a></li>
				<li><a href="#">Accessories</a></li>
				<li><a href="#">Software</a></li>
				<li><a href="#">Sports &amp; Fitness</a></li>
				<li><a href="#">Footwear</a></li>
				<li><a href="#">Jewellery</a></li>
				<li><a href="#">Clothing</a></li>
				<li><a href="#">Home Decor &amp; Kitchen</a></li>
				<li><a href="#">Beauty &amp; Healthcare</a></li>
				<li><a href="#">Toys, Kids &amp; Babies</a></li>
			</ul>
		</div>					
	</div>
	<div class="header_bottom_right">					 
		<div class="slider">					     
			<div id="slider">
				<div id="mover">
					<div id="slide-1" class="slide">			                    
						<div class="slider-img">
							<?php echo $this->Html->image('slide-1-image.png', array('alt' => 'learn more')); ?>									    
						</div>
						<div class="slider-text">
							<h1>Clearance<br><span>SALE</span></h1>
							<h2>UPTo 20% OFF</h2>
							<div class="features_list">
								<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
							</div>
							<a href="preview.html" class="button">Shop Now</a>
						</div>			               
						<div class="clear"></div>				
					</div>	
					<div class="slide">
						<div class="slider-text">
							<h1>Clearance<br><span>SALE</span></h1>
							<h2>UPTo 40% OFF</h2>
							<div class="features_list">
								<h4>Get to Know More About Our Memorable Services</h4>							               
							</div>
							<a href="preview.html" class="button">Shop Now</a>
						</div>		
						<div class="slider-img">
							<?php echo $this->Html->image('slide-3-image.jpg', array('alt' => 'learn more')); ?>
						</div>						             					                 
						<div class="clear"></div>				
					</div>
					<div class="slide">						             	
						<div class="slider-img">
							<?php echo $this->Html->image('slide-2-image.jpg', array('alt' => 'learn more')); ?>
						</div>
						<div class="slider-text">
							<h1>Clearance<br><span>SALE</span></h1>
							<h2>UPTo 10% OFF</h2>
							<div class="features_list">
								<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
							</div>
							<a href="preview.html" class="button">Shop Now</a>
						</div>	
						<div class="clear"></div>				
					</div>												
				</div>		
			</div>
			<div class="clear"></div>					       
		</div>
	</div>
	<div class="clear"></div>
</div>

<div class="main">
    <div class="content wrap">
    	<div class="content_top">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					<?php echo $this->Html->image("feature-pic1.jpg", array(
					    "alt" => "",
					    'url' => array('controller' => 'produtos','action' => 'view',1)
					)); ?>
					
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$620.87</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<?php echo $this->Html->image("feature-pic2.jpg", array(
					    "alt" => "",
					    'url' => array('controller' => 'produtos','action' => 'view',2)
					)); ?>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$899.75</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				<?php echo $this->Html->image("feature-pic3.jpg", array(
					    "alt" => "",
					    'url' => array('controller' => 'produtos','action' => 'view',3)
					)); ?>
					 <h2>Lorem Ipsum is simply </h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$599.00</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<?php echo $this->Html->image("feature-pic4.jpg", array(
					    "alt" => "",
					    'url' => array('controller' => 'produtos','action' => 'view',4)
					)); ?>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$679.87</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>				     
				</div>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <?php echo $this->Html->image("new-pic1.jpg", array(
					    "alt" => "",
					    'url' => array('controller' => 'produtos','action' => 'view',1)
					)); ?>				
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$849.99</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <?php echo $this->Html->image("new-pic2.jpg", array(
					    "alt" => "",
					    'url' => array('controller' => 'produtos','action' => 'view',1)
					)); ?>		
					 <h2>Lorem Ipsum is simply </h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$599.99</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					 <?php echo $this->Html->image("new-pic3.jpg", array(
					    "alt" => "",
					    'url' => array('controller' => 'produtos','action' => 'view',1)
					)); ?>		
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$799.99</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <?php echo $this->Html->image("new-pic4.jpg", array(
					    "alt" => "",
					    'url' => array('controller' => 'produtos','action' => 'view',1)
					)); ?>		
					 <h2>Lorem Ipsum is simply </h2>					 
					 <div class="price-details">
				       
					       		<div class="add-cart">								
									<h4><a href="preview.html">Download</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
			</div>
    </div>
 </div>