<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Add_People_Table extends CI_Migration { //file nevet írjuk általában a Class névként

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
	}

	public function up() //fgv. azt írja le mi történjen ha lefut a migration
	{
		$this->dbforge->add_field(array( //dbforge-ba arrayt kell felvenni
			'id' => array(
				'type' => 'INT',
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
			),
			'age' => array(
				'type' => 'INT',
				'constraint' => '3',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('people');
	}

	public function down() //fgv. azt írja le mi történjen migrationt vissza akarjuk vonni
	{
		$this->dbforge->drop_table('poeple');
	}
}

/* End of file Add_People_Table.php */


?>