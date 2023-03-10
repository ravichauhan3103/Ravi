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

                case '/about';
                include_once('about.php');
                break;

                case '/services';
                include_once('services.php');
                break;

                case '/booking';
                include_once('booking.php');
                break;

                case '/contact';
                include_once('contact.php');
                break;

                default :
                echo "Page not found";
            
            }
        }
    }
    $obj=new control;
?>