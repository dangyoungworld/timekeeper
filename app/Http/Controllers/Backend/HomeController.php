<?php
/**
 * Created by PhpStorm.
 * User: buicongdang
 * Date: 5/8/16
 * Time: 12:00 PM
 */
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

class HomeController extends Controller{

    public function __construct()
    {

    }

    /**
     * @author: buicongdang
     */
    public function index()
    {
        $url = round('author');
        return $url;
    }

}