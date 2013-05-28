<?php
if(!defined('IN')) die('bad request');
include_once(CROOT . 'controller' . DS . 'core.class.php');

class appController extends coreController
{
	function __construct()
	{
		parent::__construct();
	}
}