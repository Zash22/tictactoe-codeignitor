<?php
class Scores_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
        public function get_scores($limit)
        {
                if ($slug === FALSE)
                {
                        $limit=5;
                        $start_row=0;

                        $this->db->order_by("id", "DESC");
                        $query = $this->db->get('scores', $limit, $start_row);
                        return $query->result_array();
                }

                $query = $this->db->get_where('scores', array('slug' => $slug));
                return $query->row_array();
        }
    
        public function set_scores()
        {
            $this->load->helper('url');

            $data = array(

                'player1' => $this->input->post('player1'),
                'player2' => $this->input->post('player2'),
                'winner' => $this->input->post('winner')
            );
            log_message('info', 'new game scores added in db > data: '.print_r($data, true));
            return $this->db->insert('scores', $data);
        }
}
