<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\CreditApplication;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['model', 'price', 'stock'];

    public function creditApplications()
    {
        return $this->hasMany(CreditApplication::class);
    }
}
