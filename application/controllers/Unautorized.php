<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unautorized extends CI_Controller
{

	public function index()
	{
		echo "Access Denied!";
	}
}
