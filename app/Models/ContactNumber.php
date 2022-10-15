<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ContactNumber extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'phonebook_id','phone_no'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
