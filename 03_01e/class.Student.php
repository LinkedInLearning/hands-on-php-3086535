<?php

require_once( 'class.Person.php' );

class Student extends Person {
	private $gpa;
	private $major;
	private $address;

	public function __construct( $name, $dob, $address, $major = 'Undeclared' ) {
		parent::__construct( $name, $dob );
		$this->address = $address;
		$this->major = $major;

		$this->gpa = null;
	}

	public function get_address() {
		return $this->address;
	}

	public function get_major() {
		return $this->major;
	}

	public function get_gpa() {
		return $this->gpa;
	}
	
	public function set_address( $address ) {
		$this->address = $address;
	}

	public function set_major( $major ) {
		$this->set_major = $major;
	}

	public function set_gpa( $gpa ) {
		$this->gpa = $gpa;
	}

	public function calculate_gpa( $grades, $credits ) {
		$this->set_gpa( $grades / $credits );
		return $this->gpa;
	}

}