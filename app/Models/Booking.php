<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'status','location','name','address','image'
    ];

    public function getEncryptedIdAttribute(){
        return encrypt($this->booking_id);
    }

    public function scopePending($query){
        return $query->where('status',0);
    }
    public function scopeActive($query){
        return $query->where('status',1);
    }
    public function scopePayment($query){
        return $query->where('status',2);
    }

    public function getImageUrlAttribute(){
        return asset('public/images/'.$this->customer_image);
    }

    protected $appends = ['encrypted_id','image_url'];
}
