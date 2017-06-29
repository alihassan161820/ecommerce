<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Auction;

class Bid extends Model
{
        protected $table = 'bid';
        public $timestamps = false;
        public $primaryKey  = 'auction_id';

        public function auction(){
                return $this->belongsTo(Auction::class);
         }

}
