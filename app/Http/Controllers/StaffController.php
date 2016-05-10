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
        return view('staff.create');
    }




}
