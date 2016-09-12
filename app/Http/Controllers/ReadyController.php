<?php

namespace weiwait\OnlineChess\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use weiwait\OnlineChess\Http\Requests;
use weiwait\OnlineChess\Http\Controllers\Controller;

class ReadyController extends Controller
{
    private $id = 0;

    public function __construct() {
        $this->id = Auth::user()->id;
    }

    public function ready()
    {
        $result = \Ready::create(['userId' => $this->id]);
    }
}
