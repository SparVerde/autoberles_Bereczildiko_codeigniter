<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Seed_People_Table extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		$this->load->database();
		$this->faker = Faker\Factory::create(); //random generálásra használható
	}

	public function up()
	{
		$knevek = ['Péter', 'Ildi', 'Mari', 'Ádám', 'Zoli', 'Judit', 'Vali', 'Andrea'];
        $vnevek = ['Toth', 'Kiss', 'Nagy', 'Balog', 'Kovács'];
        $mailek = ['gmail.com', 'gmail.hu', 'freemail.hu', 'hotmail.com'];

		for ($i=0; $i < 10; $i++) { 	
			$fo = [
                "name" => $this->faker->name(),
				//"name" => implode(", ", $this->faker->randomElements($vnevek)+ $this->faker->randomElements($knevek)),
				"name" => $this->faker->email(),
                //"email" => implode(", ", $this->faker->unique()->randomElements($vnevek) + $this->faker->randomElements($knevek)+"@"+$this->faker->randomElements($mailek)),
				"age" => $this->faker->numberBetween(20, 80),
			];
			$this->db->insert('people', $fo);
		}
	}

	public function down()
	{
		$this->db->truncate('people');
	}
}

/* End of file Seed_People_Table.php */


?>