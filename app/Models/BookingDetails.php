<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetails extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
    public function serviceman()
    {
        return $this->belongsTo(Serviceman::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
