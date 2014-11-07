<?php
class logout extends Controller
{
    function index()
    {
        session_destroy();
        header('Location: '.BASE_URL);
    }
}