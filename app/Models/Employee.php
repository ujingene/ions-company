<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;


class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'company_id', 'email', 'phone'];

    protected $with = [
        'company'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
