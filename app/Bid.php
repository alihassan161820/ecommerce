<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
            protected $table = 'bid';
            public $timestamps = false;
            public $primaryKey  = 'auction_id';

}
