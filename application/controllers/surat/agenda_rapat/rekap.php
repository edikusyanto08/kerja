<?php

class rekap extends SYGAAS_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->load->view( 'surat/agenda_rapat/rekap');
	}
}