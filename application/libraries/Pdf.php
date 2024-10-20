<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 12/23/2015
 * Time: 10:24 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
include_once(APPPATH . 'libraries/tcpdf.php');
class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
}