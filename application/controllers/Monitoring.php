<?php 

class Monitoring extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_suhu');
    }

    public function index()
    {
        $this->load->view('monitoring/monitoring');
    }

    public function suhu(){
        $data['suhu'] = $this->M_suhu->all();
        $this->load->view('monitoring/suhu', $data);
    }
   
    public function humi(){
        $data['humidity'] = $this->M_suhu->all();
        $this->load->view('monitoring/humidity', $data);
    }

    public function kirim()
    {
        $suhu = $this->uri->segment(3);
        $kelembaban = $this->uri->segment(4);

        $DataUpdate = array(
            'temperature' => $suhu,
            'humidity' => $kelembaban
        );

        $this->M_suhu->update($DataUpdate);
        echo "Data Dikirimkan";
    }
}

?>