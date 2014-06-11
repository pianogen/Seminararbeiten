<?php
class basex {
	private $basex;
	private $resolver;
	
	public function __construct(mdl_basex $mdl , resolver $resolver){
		$this->basex = $mdl;
		$this->resolver = $resolver;
	}
	
	public function select() {
		include_once 'view/view_search.php';
	}
	
	public function view() {
		$this->basex->execute("open contacts");
		$result=array();
		$search = $_POST['titel'];
		$test = $this->basex->execute("xquery //contact[(@name='".$search."') or (@code='".strtoupper($search)."')]");
		$test = "<root>" . $test . "</root>";
		$test = simplexml_load_string($test);
		$this->basex->close();
		include_once 'view/view_search_result.php';
	}
	public function create(){
		include_once 'view/view_create.php';
	}
	
	public function modify()
	{
		include_once 'mdl/class.xml.php';
		$add = new XmlClass();
		$add->AddAttribute("name", $_POST['name']);
		$add->AddAttribute("code", strtoupper($_POST['code']));
		$add->AddElement("person",$_POST['person']);
		$add->AddElement("street", $_POST['street']);
		$add->AddElement("plz",$_POST['plz']);
		$add->AddElement("city",$_POST['city']);
		$add->AddElement("mail",$_POST['mail']);
		$add->AddElement("number", $_POST['number']);
		$add->AddElement("provider", $_POST['provider']);
		$result = $add->getXml();
		if($add->checkSchema($result)) {
			$this->basex->execute("open contacts");
			if ($this->basex->execute("xquery //contact[(@code='".strtoupper($_POST['code'])."')]") == "") 
				$this->basex->add(strtoupper($_POST['code']).".xml", $result);
			else
				$this->basex->replace(strtoupper($_POST['code'])."xml", $result);
		}
		else
		{
			$schemaFailed= "yes";
		}
		$this->basex->close();
		include_once 'view/view_create_result.php';
		
		
	}
	
	public function add()
	{
		include_once 'mdl/class.xml.php';
		$add = new XmlClass();
		if ($_POST["Datei"] != "") {
			$xml = simplexml_load_file($_POST['Datei']);
			$this->basex->execute("open contacts");
			$exist = $this->basex->execute("xquery //contact[(@code='".strtoupper(substr($_POST['Datei'], -7, 3))."')]");
			if ($add->checkSchema($xml->asXml())) {
				if ($exist == "")
					$this->basex->add(strtoupper(substr($_POST['Datei'], -7)),$xml->asXml());
				else
					$this->basex->replace(strtoupper(substr($_POST['Datei'], -7)),$xml->asXml());
			}
			else 
			{
				$schemaFailed = "yes";
			}
			$this->basex->close();
		}
		else
		{
			$nofile = true;
		}
		include_once 'view/view_create_result.php';
	}
	
	public function delete() {
		$search = $_POST['titel'];
		if ($search != "") {
			$this->basex->execute("open contacts");
			if ($this->basex->execute("xquery //contact[(@name='".$search."') or (@code='".strtoupper($search)."')]") != "") {
				$this->basex->execute("xquery delete node //contact[(@name='".$search."') or (@code='".$search."')]");
				$delete = "yes";
			}
			else
			{
				$delete = "no";
			}
			$this->basex->close();
		}
		else {
			$nofile = true;
		}
		include_once 'view/view_create_result.php';
	}
	 
	
} ?>