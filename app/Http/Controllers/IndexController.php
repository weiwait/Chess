<?php

namespace weiwait\OnlineChess\Http\Controllers;

use Illuminate\Http\Request;

use weiwait\OnlineChess\Http\Requests;
use weiwait\OnlineChess\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index.index');
    }

}
