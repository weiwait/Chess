<?php

namespace weiwait\OnlineChess\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use weiwait\OnlineChess\Http\Requests;
use weiwait\OnlineChess\Http\Controllers\Controller;
use weiwait\OnlineChess\Ready;

class ReadyController extends Controller
{
    private $ready;

    public function __construct()
    {
        $this->ready = Auth::user();
    }

    public function ready()
    {
        $result = Ready::where('user_id', $this->ready->id)->first();
        if ($result == null) {
            Ready::create([
                'user_id' => $this->ready->id,
                'ready' => 1,
                'victory' => $this->ready->victory
            ]);
        }
        $this->matching();
    }

    private function matching()
    {
        $opponent1 = Ready::where('victory', '<', $this->ready->victory)
            ->orderBy('victory', 'desc')
            ->first();
        $opponent2 = Ready::where('victory', '>', $this->ready->victory)
            ->orderBy('victory', 'asc')
            ->first();

        

        dd($opponent1);
        dd($opponent2);
    }
}
