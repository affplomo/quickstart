<?php
/**
 * Created by PhpStorm.
 * User: axels
 * Date: 2016-04-21
 * Time: 18:04
 */

namespace Account\Login;

use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

public class LoginController{
    public function __construct(){ }

    public function login(){
        $aLoginDetails = Input::all();

        return view('account', ['aDetails' => $aLoginDetails]);
    }
}