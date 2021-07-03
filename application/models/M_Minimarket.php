<?php


class M_Minimarket extends CI_Model
{

    public function simpanDataMinimarket($this)
    {
        $this->db->insert('daftarjualan_tb', $this);
    }
}
