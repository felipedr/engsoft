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
				<h3>Gêneros</h3>
				 <?php foreach ($generos as $genero): ?>
				    <li>
				        <?php echo $this->Html->link($genero['generos']['nome'],'#'); ?>
				        
				    </li> 
				<?php endforeach; ?> 
				
			</ul>
		</div>					
	</div>
	<div class="header_bottom_right">					 
		<div class="slider">					     
			<div id="slider">
				<div id="mover">
					<div id="slide-1" class="slide">			                    
						<div class="slider-img">
							<?php echo $this->Html->image('terror.jpg'); ?>									    
						</div>
						<div class="slider-text">
							<h1>Livros de</h1><br><h2><b><span>TERROR</span></b></h2>
							<h2>Muahahaawawa!</h2>
							<div class="features_list">
								<h4>Confira as aterorizantes novidades na<br> nossa sessão de terror</h4>							               
							</div>
							<a href="#" class="button">Visualizar</a>
						</div>			               
						<div class="clear"></div>				
					</div>	
					<div class="slide">
						<div class="slider-text">
							<h1>Você gosta de<br><span>LER?</span></h1>
							<h2>Tomara que sim!</h2>
							<div class="features_list">
								<h4>Veja em nosso blog os beneficios da<br> leitura em nossas vidas.</h4>							               
							</div>
							<a href="#" class="button">Visualizar</a>
						</div>		
						<div class="slider-img">
							<?php echo $this->Html->image('livros_capa_2.jpg'); ?>
						</div>						             					                 
						<div class="clear"></div>				
					</div>
					<div class="slide">						             	
						<div class="slider-img">
							<?php echo $this->Html->image('livros_capa_3.jpg'); ?>
						</div>
						<div class="slider-text">
							<h1>Você conhece<br><span>POE?</span></h1>
							<h2>Como não?</h2>
							<div class="features_list">
								<h4>Conheça mais sobre esse grande autor da literatura mundial.</h4>							               
							</div>
							<a href="#" class="button">Visualizar</a>
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
    		<h3>Novos livros</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">Todos os livros</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">

		
				 <?php foreach ($ultimos as $ultimo): ?>
				    <div class="grid_1_of_4 images_1_of_4">
				        <?php echo $this->Html->image($ultimo['livros']['foto_capa'], array(
					    "alt" => "",
					    'url' => array('controller' => 'produtos','action' => 'view',$ultimo['livros']['id'])
					)); ?>
				        <h2><?php echo $ultimo['livros']['nome']?> </h2>	
				        <div class="price-details">
				       
					       		<div class="add-cart">								
									<h4>
									<?php 
									echo $this->Html->link(
										    'Download',
										    '/produtos/view/'.$ultimo['livros']['id']
										);
									?>
									</h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				   
				<?php endforeach; ?> 
				
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Mais baixados</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">Todos os livros</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				 <?php foreach ($mais_baixados as $livro): ?>
				    <div class="grid_1_of_4 images_1_of_4">
				        <?php echo $this->Html->image($livro['livros']['foto_capa'], array(
					    "alt" => "",
					    'url' => array('controller' => 'produtos','action' => 'view',$livro['livros']['id'])
					)); ?>
				        <h2><?php echo $livro['livros']['nome']?> </h2>	
				        <div class="price-details">
				       
					       		<div class="add-cart">								
									<h4>
									<?php 
									echo $this->Html->link(
										    'Download',
										    '/produtos/view/'.$livro['livros']['id']
										);
									?>
									</h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				   
				<?php endforeach; ?> 
			</div>
    </div>
 </div>