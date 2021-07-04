<?php


class M_Minimarket extends CI_Model
{

    public function simpanDataMinimarket($s)
    {
        $this->db->insert('daftarjualan_tb', $s);
    }


    public function showDataMinimarket()
    {
        return $this->db->get('daftarjualan_tb')->result();
    }

    public function getDataMinimarketDetail($id_jualan)
    {
        return $this->db->get_where('daftarjualan_tb', array('id_jualan' => $id_jualan))->row();
    }
}
