<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migrate extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
        $this->load->helper('url'); //elérési út miatt be kell tölteni
        //$this->load->library('session');
		$this->input->is_cli_request() or exit('Migrations can only be run from CLI'); //csak parancsorból fogad el kérést a migration-ra
		$this->load->library('migration'); // mindíg a seed legyen a magasabb sorszámú
	}

	public function seed()
	{
		if ($this->migration->latest() === FALSE) {
			show_error($this->migration->error_string());
		}
	}
    public function fresh($seed = "") // mindíg az update versiont használjuk
	{
		if ($this->migration->version(0) === FALSE) {
			show_error($this->migration->error_string());
		} else {
			if ($seed == "seed") {
				if ($this->migration->latest() === FALSE) {
					show_error($this->migration->error_string());
				}
			} else {
				if ($this->migration->current() === FALSE) {
					show_error($this->migration->error_string());
				}
			}
		}
	}
	
}

/* End of file Migrate.php */
