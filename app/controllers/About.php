<?php

class About
{
    public function index($nama = "Ariq", $pekerjaan = "Pelajar")
    {
        echo "Halo nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo "about/page";
    }
}
