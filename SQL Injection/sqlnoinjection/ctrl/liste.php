<?php
class liste {
	private $liste;	
	private $resolver;
	
	public function __construct(mdl_liste $mdl, resolver $resolver){
		$this->login = $mdl;
		$this->resolver = $resolver;
	}
	
	public function show() { 
		if (!empty($_POST))
			$liste = $this->login->select($_POST['search']);
		else	
			$liste = $this->login->all();
		include 'view/show_liste.php';
	}
}

?>