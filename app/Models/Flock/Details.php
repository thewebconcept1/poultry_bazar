<?php

namespace App\Models\Flock;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table = 'flock_details';

    protected $primaryKey = 'fd__id';

    protected $fillable = [
        'fd_bedding',
        'fd_brooder_fuel',
        'fd_doc',
        'fd_electricity',
        'fd_feed',
        'fd_generator_fuel',
        'fd_mess',
        'fd_medicine',
        'fd_shed_preparation',
        'fd_salary',
        'fd_vaccine',
        'fd_washing',
        'fd_other',
        'fd_feed_consumed',
        'fd_water',
        'fd_mortality',
        'fd_medicine_consumed',
        'fd_vaccine_consumed',
        'fd_note',
    ];

    public $timestamps = true;
}
