<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'business_logo',
        'legal_name',
        'business_email',
        'business_phone',
        'branded_domain',
        'business_website',
        'business_niche',
        'business_type',
        'business_industry',
        'registration_id_type',
        'registration_number',
        'regions_of_operations',
        'street_address',
        'city',
        'postal_code',
        'state',
        'country',
        'time_zone',
        'platform_language',
        'rep_first_name',
        'rep_last_name',
        'rep_email',
        'rep_job_position',
        'rep_phone',
    ];
}
