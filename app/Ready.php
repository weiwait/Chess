<?php

namespace weiwait\OnlineChess;

use Illuminate\Database\Eloquent\Model;

class Ready extends Model
{
    protected $table = 'ready';

    public $timestamps = true;

    protected $fillable = ['user_id', 'ready', 'victory'];

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($val)
    {
        return $val;
    }
}
