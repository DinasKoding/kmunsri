<?php

$this->load->view('home/title', $title);
$this->load->view('home/header');
$this->load->view($content);
$this->load->view('home/footer');

?>