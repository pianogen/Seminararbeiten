<?php

class XmlClass {
	
	private $xml;
	
	public function __construct() {
		$this->xml = new SimpleXmlElement("<contact/>");
	}
	
	public function AddAttribute($name, $value) {
		if (!empty($value)) {
			$this->xml->addAttribute($name, $value);
		}
	}
		
	public function AddElement($node, $value) {
		if (!empty($value)) {
			$this->xml->addChild($node, $value);
		}
	}
	
	public function getXml() {
		return $this->xml->asXml();
	}
	
	public function checkSchema($result) {
		$dom= new DOMDocument();
		$dom->loadXML($result);
		return ($dom->schemaValidate("schema.xsd"));
	}
}


?>