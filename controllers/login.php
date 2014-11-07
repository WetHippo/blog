<?php
class login extends Controller
{
    public $requires_auth = true;

    function index()
    {
        header('Location: '.BASE_URL);

    }
}