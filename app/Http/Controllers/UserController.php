<?php

namespace weiwait\OnlineChess\Http\Controllers;

use Illuminate\Http\Request;

use weiwait\OnlineChess\Http\Requests;
use weiwait\OnlineChess\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo DB::select('select * from users');
    }

}
