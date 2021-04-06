<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $with= ['location', 'origin'];
    protected $fillable =['name','location_id'];
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function origin()
    {
        return $this->belongsTo(Origin::class);
    }
}
