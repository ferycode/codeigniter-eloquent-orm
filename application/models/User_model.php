<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
*
*/
class User_model extends Eloquent
{
    protected $table = 'users';
    public $timestamps = false;
}