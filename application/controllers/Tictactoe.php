<?php
class Tictactoe extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('scores_model');
                $this->load->helper('url_helper');
                $this->load->helper('html');
        }


        public function index()
        {
                $limit = 5;
            
                $data['scores'] = $this->scores_model->get_scores($limit);
                $data['scores'] = $this->formatDate($data['scores']);

                $data['title'] = 'TicTacToe';
                $this->load->view('templates/header', $data);
                $this->load->view('tictactoe/index', $data);
                $this->load->view('templates/footer');
        }

        public function view()
        {

        }
    
        public function create()
        {
        }

        public function formatDate($scores) {

            foreach ($scores as $key => $score) {

                $date = $scores[$key]['created_at'];
                $date = explode( " ", $date);
                $date = $date[0];
                $scores[$key]['created_at'] = $date;
            }

            return $scores;
        }

}
