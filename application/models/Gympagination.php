<?php

class Gympagination extends CI_Model {

    protected $table = 'gym';

    public function __construct() {
        parent::__construct();
    }

    public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->where('is_active', 1);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function searchLocation($location) {
        $this->db->like('gymCity', $location);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function searchaddress($address) {

        $this->db->like('gymCity', $address);
        $query = $this->db->get($this->table);
        return $query->result();
        //print_r($query->result());
    }
}