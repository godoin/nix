<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Client;
use App\Models\EventPackage;
use App\Models\Coordinator;
use App\Models\Review;

class BookingDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'booking_id',
        'event_date',
        'event_time',
        'guests',
        'venue',
        'budget',
        'message',
        'status',
        'client_id',
        'package_id',
        'coordinator_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function eventPackage()
    {
        return $this->belongsTo(EventPackage::class, 'package_id');
    }

    public function coordinator()
    {
        return $this->belongsTo(Coordinator::class, 'coordinator_id');
    }

    public function review()
    {
        return $this->hasOne(Review::class, 'booking_id');
    }
}
