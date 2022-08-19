<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class BasicauthFilter implements FilterInterface
{
	public function before(RequestInterface $request)
	{ 
       // print_r($_SERVER);
        if(empty($_SERVER['PHP_AUTH_USER'])){
            die('you must be login');
        }else{
         $username = isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : "";
	     $password = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : "";
       //  echo  $username;
       //  echo  $password;
         if($username != "admin" || $password != "admin123"){
            die('Invalid Credentials');
        }
         }
    
	}

	public function after(RequestInterface $request, ResponseInterface $response)
	{
		//
	}
}