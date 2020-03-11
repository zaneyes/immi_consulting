<?php
    class Fswscore {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // Get all NOCs
        public function getAllNocs() {
            $this->db->query("SELECT noc_numeric_code, noc_title
                                FROM noc_list");
            // Assign Results
            $results = $this->db->resultSet();
        
            return $results;
        }
        
    }