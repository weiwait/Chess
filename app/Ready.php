<?php

namespace weiwait\OnlineChess;

use Illuminate\Database\Eloquent\Model;

class Ready extends Model
{
    protected $table = 'ready';

    public $timestamps = true;

    protected $fillable = ['user_id', 'ready', 'victory'];

    public function freshTimestamp() {
        return time();
    }

    public function getDateFormat()
    {
        return 'U';
    }

    public function fromDateTime($value) {
        return $value;
    }
}
