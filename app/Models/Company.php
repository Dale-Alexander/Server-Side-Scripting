<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'website', 'email'];

    //Relation between company and contacts
    // One company has many contacts
    public function contacts(){// "contacts" and not "contact", that is simply the naming convention
        return $this->hasMany(Contact::class);
    }
}
