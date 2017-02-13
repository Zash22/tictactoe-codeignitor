<?php
class Scores extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('scores_model');
                $this->load->helper('url_helper');
                $this->load->helper('html');

        }

        public function index()
        {

            $limit = 0;

            $data['scores'] = $this->scores_model->get_scores($limit);

            $data['title'] = 'Scores';


            $this->load->view('templates/header', $data);

            $this->load->view('scores/index', $data);
            $this->load->view('templates/footer', $data);
        }

        public function view($slug = NULL)
        {
        }
    
        public function create()
        {
                $limit = 5;
                $this->scores_model->set_scores();

                $data['scores'] = $this->scores_model->get_scores($limit);
                $data['scores'] = $this->formatDate($data['scores']);

                $this->load->view('scores/scores', $data);
        }
        }
}
