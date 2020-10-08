<?php


class Khachhang
{
    private $Tên;
    private $NgaySinh;
    private $diachi;



    public function __construct($Tên, $NgaySinh, $diachi)
    {
        $this->Tên = $Tên;
        $this->NgaySinh = $NgaySinh;
        $this->diachi = $diachi;

    }


    public function getTên()
    {
        return $this->Tên;
    }


    public function setTên($Tên)
    {
        $this->Tên = $Tên;
    }


    public function getNgaySinh()
    {
        return $this->NgaySinh;
    }


    public function setNgaySinh($NgaySinh)
    {
        $this->NgaySinh = $NgaySinh;
    }

    public function getDiachi()
    {
        return $this->diachi;
    }


    public function setDiachi($diachi)
    {
        $this->diachi = $diachi;
    }




}