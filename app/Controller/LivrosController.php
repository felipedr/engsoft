<?php
class LivrosController extends AppController {


	public function view($id){
		$this->loadModel('generos');
		$generos = $this->generos->find('all');
		$this->set('generos', $generos);
		$this->loadModel('livro');
		$livro = $this->livro->findById($id);
		$this->set('livro', $livro['livro']);
	}

	public function download($id){
		$this->loadModel('livro');
		$livro = $this->livro->findById($id);
		
		$this->livro->id=$id;
    	$this->livro->saveField('downloads', $livro['livro']['downloads'] + 1);



        $arquivo = $livro['livro']['nome_arquivo'];

        $caminho = 'files/'.$arquivo;           
  
        header('Content-Description: File Transfer');

        header("Content-Type: application/pdf");
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Transfer-Encoding: binary');
        header("Content-Length: " . filesize($caminho));
        header("Content-Disposition: attachment; filename=" . $arquivo); 
        ob_clean();
        flush();
        readfile($caminho); 

	}

}