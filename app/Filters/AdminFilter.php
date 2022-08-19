<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
	public function before(RequestInterface $request)
	{ 
       // print_r($_SERVER);
        if(empty($_SERVER['PHP_AUTH_USER'])){
            die('You must be login first');
        }else{
         $username = isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : "";
	     $password = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : "";
       //  echo  $username;
       //  echo  $password;
         if($username != "admin" || $password != "admin1234"){
            die('Invalid Credentials');
        }
         }
    
	}

	public function after(RequestInterface $request, ResponseInterface $response)
	{
		//
	}
}