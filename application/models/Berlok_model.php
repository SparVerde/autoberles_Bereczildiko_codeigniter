<?php 
//a kilistáztatáshoz egy új model-t hozok létre

defined('BASEPATH') OR exit('No direct script access allowed');

class Berlok_model extends CI_Model {

    public function __construct() { //construct function
        parent::__construct(); //ősosztály meghívása
        $this->load->database(); // adatbázis meghívása
    }
    //és egy függvényt írunk a listázásra a modelben
    public function berlok_listazasa()
    {
        //query builder a lekérdezést különboző függvényelből rakja össza, pl. get ->('tábla név') mondent kilistáz, de beírható limit ('táblanév,x,y), get helyett lehet select('mit'), vagy db->insert('tábla név', data tömb: 'kulcs'melyik oszlop=> ' mit' )
        return $this->db->get('berlok')->result_array(); // adjuk vissza a beillesztéskor létrejött id-t
    }

    public function displayrecordsById($id) // nem működik
	{
	$query=$this->db->query("select * from 'berlok' where 'nev'='".$id."'");
	return $query->result();
	}

    public function berlok_listazasa2($id)
    {
        //query builder a lekérdezést különboző függvényelből rakja össza, pl. get ->('tábla név') mondent kilistáz, de beírható limit ('táblanév,x,y), get helyett lehet select('mit'), vagy db->insert('tábla név', data tömb: 'kulcs'melyik oszlop=> ' mit' )
        return $this->db->select('berlok', $id)->result_array(); // adjuk vissza a beillesztéskor létrejött id-t
    }

//autok rögzítése függvény a modelben
    public function berlo_rogzitese($data)
    {
        $this->db->insert('berlok', $data);
        return $this->db->insert_id();
    }
    public function berlo_rogzitese2($nev)
    {
        $this->db->update('berlok', 'nev',$nev); //nem jó a syntaxis!!!
        //return $this->db->update_id();
    }

    public function update_record()
    {
        //$query=$this->db->query("UPDATE berlok SET nev='$nev' where id='3'");
        //$query=$this->db->query("UPDATE `berlok` SET `nev`='$nev' where `id`='3'");
        $this->db->where('id', 3 );
		$this->db->update('nev', $nev);
    }

    

    
}

/* End of file Berlok_model.php */


?>