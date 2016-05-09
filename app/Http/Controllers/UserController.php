<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    /**
     * @param $id
     * @return mixed
     */
    public function showProfile($id)
    {
        $user = [
            'uid' => 1,
            'username' => 'buicongdang',
            'fullname' => 'Dang Bui',
            'email' => 'bdangvn@gmail.com'
        ];
        if(view()->exists('email.customer')) {
            echo '1';
            die;
        }

        return view('user.profile', ['user' => $user]);
    }
}
