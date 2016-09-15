<?php

namespace weiwait\OnlineChess\Http\Controllers;

use GuzzleHttp\ClientInterface;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use weiwait\OnlineChess\Matching;
use weiwait\OnlineChess\Ready;

class ReadyController extends Controller
{
    private $ready;

    public function __construct()
    {
//        set_time_limit(120);
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
        $data = $this->matching();
        return $fighting = [
            'self' => $this->ready->id,
            'opponentId' => $data['opponent'],
            'me' => $data['me']
        ];

    }

    private function matching()
    {
        $checkMe = $this->checkBeMatch($this->ready->id);
        if ($checkMe != false) {
            $data = ['opponent' => $checkMe->opponent, 'me' => false];
            return $data;
        }
        $opponent1 = Ready::where('victory', '<', $this->ready->victory)
            ->where(function ($query) {
                $query->where('ready', 1);
            })
            ->orderBy('victory', 'desc')
            ->first();
        $opponent2 = Ready::where('victory', '>', $this->ready->victory)
            ->where(function ($query) {
                $query->where('ready', 1);
            })
            ->orderBy('victory', 'asc')
            ->first();
        if ($opponent1 != null) {
            $checkOpponent1 = $this->checkBeMatch($opponent1->user_id);
            if ($checkOpponent1 == false) {
                Ready::where('user_id', $opponent1->user_id)
                    ->update(['ready' => 0]);
                Ready::where('user_id', $this->ready->id)
                    ->update(['ready' => 0]);
                Matching::create([
                    'self' => $this->ready->id,
                    'opponent' => $opponent1->user_id
                ]);
                Matching::create([
                    'self' => $opponent1->user_id,
                    'opponent' => $this->ready->id
                ]);
                $data = ['opponent' => $opponent1->user_id, 'me' => true];
                return $data;
            }
        }
        if ($opponent2 != null) {
            $checkOpponent2 = $this->checkBeMatch($opponent2->user_id);
            if ($checkOpponent2 == false) {
                Ready::where('user_id', $opponent2->user_id)
                    ->update(['ready' => 0]);
                Ready::where('user_id', $this->ready->id)
                    ->update(['ready' => 0]);
                Matching::create([
                    'self' => $this->ready->id,
                    'opponent' => $opponent2->user_id
                ]);
                Matching::create([
                    'self' => $opponent2->user_id,
                    'opponent' => $this->ready->id
                ]);
                $data = ['opponent' => $opponent2->user_id, 'me' => true];
                return $data;
            }
        }
        sleep(5);
        return $this->matching();
    }

    private function checkBeMatch($id)
    {
        $result = Matching::where('self', $id)->first();
        return $result == null ? false : $result;
    }

    public function unsetReady($id)
    {
        Ready::where('user_id', $id)->delete();
        Matching::where('self', $id)->delete();
    }
}
