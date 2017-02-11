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
                $data['title'] = 'TicTacToe';
                $this->load->view('templates/header', $data);
                $this->load->view('tictactoe/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
        }
    
        public function create()
        {
        }
}
