<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\CreditApplication;

class Instalment extends Model
{
    use HasFactory;

    protected $fillable = ['credit_application_id', 'number', 'amount', 'due_date', 'paid'];

    public function creditApplication()
    {
        return $this->belongsTo(CreditApplication::class);
    }
}
