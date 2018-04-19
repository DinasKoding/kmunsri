<?php

$this->load->view('body/title', $title);
$this->load->view('body/header.php');
$this->load->view($content);
$this->load->view('body/footer');

?>