<?php

class Pdf extends CI_Controller
{

    public $pdf;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('scores_model');
        $this->load->helper('url_helper');
        $this->load->helper('html');

    }

    public function index()
    {

        $data = array(

            'startdate' => $this->input->post('st'),
            'enddate' => $this->input->post('ed'),
        );

        $start = $this->prepareDates($data['startdate']);
        $end = $this->prepareDates($data['enddate']);

        $scores = $this->scores_model->get_dated_scores($start, $end);

        $this->preparePdf($scores);
    }

    public function view($slug = NULL)
    {
    }

    public function preparePdf($scores)
    {

        $this->load->library('Pdf');

        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle('Game Results');
        $pdf->SetHeaderMargin(30);
        $pdf->SetTopMargin(20);
        $pdf->setFooterMargin(20);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetDisplayMode('real', 'default');

        $w = array(40, 35, 40, 75);

        foreach ($scores as $count => $score) {

            $equal = $count % 2;
            $newPage = $count % 20;

            if ($newPage === 0) {
                $pdf->AddPage();
                $fill = $pdf->SetFillColor(0, 0, 0);
                $pdf->SetTextColor(255, 255, 255);
                $pdf->Cell($w[0], 6, "Player 1", 'LR', 0, 'L', $fill);
                $pdf->Cell($w[1], 6, "Player 2", 'LR', 0, 'L', $fill);
                $pdf->Cell($w[2], 6, "Winner", 'LR', 0, 'L', $fill);
                $pdf->Cell($w[3], 6, "Date", 'LR', 0, 'L', $fill);
                $pdf->Ln();

            }

            if ($equal == 0) {
                $fill = $pdf->SetFillColor(232, 232, 232);
                $pdf->SetTextColor(0, 0, 0);

            } else {
                $fill = 0;
                $pdf->SetTextColor(0, 0, 0);

            }

            $pdf->Cell($w[0], 6, $score['player1'], 'LR', 0, 'L', $fill);
            $pdf->Cell($w[1], 6, $score['player2'], 'LR', 0, 'L', $fill);
            $pdf->Cell($w[2], 6, $score['winner'], 'LR', 0, 'L', $fill);
            $pdf->Cell($w[3], 6, $score['created_at'], 'LR', 0, 'L', $fill);
            $pdf->Ln();

        }

        $pdf->Output('Game_Scores.pdf', 'D');
    }

    public function prepareDates($date)
    {

        $date = explode("/", $date);
        $date = $date[2] . "-" . $date[0] . "-" . $date[1];

        return $date;

    }

}
