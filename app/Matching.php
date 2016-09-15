<?php

namespace weiwait\OnlineChess;

use Illuminate\Database\Eloquent\Model;

class Matching extends Model
{
    protected $table = 'matching';

    public $timestamps = true;

    protected $fillable = ['self', 'opponent'];

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
