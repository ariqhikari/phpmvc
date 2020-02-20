<?php

class Siswa
{
    public function index()
    {
        $this->view("templates/header");
        $this->view("siswa/index");
        $this->view("templates/footer");
    }
}
