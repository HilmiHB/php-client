<?php

class RecognizeImAPIResultObject {
	protected $id 		= NULL;
	protected $name 	= '';
	protected $location	= array();
	
	public function __construct($jsonData) {
		$this->id 	= $jsonData['id'];
		$this->name 	= $jsonData['name'];
		foreach ($jsonData['location'] as $point) {
			$this->location[] = (array) $point;
		}
	}

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function getLocation() {
		return $this->location;
	}

	public function __toString() {
		return $this->name;
	}
}