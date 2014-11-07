<?php
/**
 * Created by PhpStorm.
 * User: Merili
 * Date: 9/17/14
 * Time: 6:20 PM
 */

class users extends Controller{
    public $requires__auth = true;
    function index(){
        $this->users = get_all("SELECT * FROM user");

    }
    function view(){
        $user_id = $this->params[0];
        $this->user = get_first("SELECT * FROM user WHERE user_id = $user_id");

    }
}