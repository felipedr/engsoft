 <div class="main wrap">
    <div class="content">
    	
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
						   <?php echo $this->Html->image($livro['foto_capa'], array(
					    "alt" => ""
					    
					)); ?>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2><?php echo  $livro['nome']; ?> </h2>
					<p><?php echo  $livro['descricao']; ?></p>					
					
					
				<div class="share-desc" style="">
					
					<div class="button"><span>
					<?php 
						echo $this->Html->link(
						    'Download',
						    '/livros/download/'.$livro['id'],
						    array( 'target' => '_blank')
						);
					?>
					</span></div>					
					<div class="clear"></div>
				</div>
				 
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					
					<li>Detalhes</li>
					<li>Comentários</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					
				 <div class="product-tags">
						 <p>Autor : <?php echo  $livro['autor']; ?><br>
						 Número de downloads: <?php echo  $livro['downloads']; ?></p>
					
			    </div>	

				<div class="review">
					
				  <div class="your-review">
				  	 <h3>Como você avalia este livro?</h3>
				  	  <p>Deixe seu comentário</p>
				  	  <form>
					    	<div>
						    	<span><label>Nome/Apelido<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div><span><label>Título<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>						
						    <div>
						    	<span><label>Comentário<span class="red">*</span></label></span>
						    	<span><textarea> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Enviar Comentário"></span>
						  </div>
					    </form>
				  	 </div>				
				</div>
			</div>
		 </div>
	 </div>
	    <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
   
        </div>
				<div class="rightsidebar span_3_of_1">
					<h2>Gêneros</h2>
					 <?php foreach ($generos as $genero): ?>
				    <li>
				        <?php echo $this->Html->link($genero['generos']['nome'],'#'); ?>
				        
				    </li> 
				<?php endforeach; ?> 
    				
 				</div>
 		</div>
 	</div>
    </div>