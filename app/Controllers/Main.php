<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
class Main extends BaseController
{
    public function index ($name = null)
    {
        $text = "Hello world";
        if(lis_null($name))
        {
            $text .=$name. $this ->angka(5);
        }
         echo $text;

    }
    private function angka($angka)
    {
        return $angka*$angka;
    }

}
