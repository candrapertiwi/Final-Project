<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    protected $table = 'adoptions';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'shelter_id',
        'pet_id',
        'user_idNumber',
        'name',
        'adopter_age',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'postal',
        'occupation',
        'salary',
        'no_of_pet_owned',
        'pets_description',
        'home_question',
        'rent_time',
        'animal_permission',
        'rehomed_question',
        'rehomed_description',
        'family_member',
        'other_information',
        'status',
        'delivery_date',
        'feedback'
    ];

    protected $dates = [
        'delivery_date'
    ];
}
