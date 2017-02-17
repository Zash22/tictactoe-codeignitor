<?php
class Scores_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
        public function get_scores($limit)
        {
                        $limit;
                        $start_row=0;

                        $this->db->order_by("id", "DESC");
                        $query = $this->db->get('scores', $limit, $start_row);

                        $scores =  $query->result_array();

                        return $scores;
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
    public function get_dated_scores($start, $end)
    {
        $start_row = 0;
        $limit = 0;

        $this->db->order_by("id", "DESC");
        $this->db->where('created_at >=', $start);
        $this->db->where('created_at <=', $end);

        $query = $this->db->get('scores', $limit, $start_row);

        $scores = $query->result_array();

        return $scores;
    }

}
