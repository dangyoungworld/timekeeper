<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

use App\Http\Requests;

class StaffController extends Controller
{
    /**
     *
     */
    public function __construct()
    {

    }

    /**
     *
     */
    public function index()
    {

    }

    /**
     *
     */
    public function create()
    {
        if(request('post')) {
            echo '111';
        }
        return view('staff.create');
    }




}
