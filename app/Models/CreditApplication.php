<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Phone;
use App\Models\Instalment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CreditApplication extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'phone_id', 'amount', 'term', 'status'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }

    public function instalments()
    {
        return $this->hasMany(Instalment::class);
    }
}
