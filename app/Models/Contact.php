<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Enable mass assignment
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'address', 'company_id'];

    // Relation between company and contacts
    // One contact belongs to one company
        public function company(){// "contacts" and not "contact", that is simply the naming convention
        return $this->belongsTo(Company::class);
    }
}

