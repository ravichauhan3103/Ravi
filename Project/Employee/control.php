<?php
    class control
    {
        function __construct()
        {
            $Path=$_SERVER['PATH_INFO'];
            switch($Path)
            {
                case '/home';
                include_once('index.php');
                break;

                case '/add_cat';
                include_once('add_cat.php');
                break;

                case '/add_loc';
                include_once('add_loc.php');
                break;

                case '/manage_loc';
                include_once('manage_loc.php');
                break;

                case '/manage_adv';
                include_once('manage_adv.php');
                break;

                case '/manage_contact';
                include_once('manage_contact.php');
                break;

                case '/manage_user';
                include_once('manage_user.php');
                break;

                default :
                echo "Page not found";
            
            }
        }
    }
    $obj=new control;
?>