<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRate extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'hotel_rate';
    protected $primaryKey = 'id';
    protected $fillable = ['hotel_id','adult_rate','child_rate','start_date','end_date'];
}
