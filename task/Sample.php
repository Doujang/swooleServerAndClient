<?php
defined('BASE_PATH') OR exit('No direct script access allowed');
require_once dirname(__FILE__) . '/TaskInterface.php';

class Sample implements TaskInterface
{

    public static function doTask($data = array())
    {
    	echo "it is ok";
    }
}
