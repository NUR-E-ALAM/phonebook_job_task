<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ContactEmails;
use App\Models\ContactNumber;
use Yajra\DataTables\EloquentDataTable;

class PhoneBook extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id','name','phones','emails','photo','favorite'
    ];

    public function contact_phones()
    {
        return $this->hasMany(ContactNumber::class,'phonebook_id','id');
    }
    public function contact_emails()
    {
        return $this->hasMany(ContactEmails::class,'phonebook_id','id');
    }
}
