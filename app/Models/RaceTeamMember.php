<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RaceTeamMember extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'race_team_members';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'image', 'facebook', 'twitter', 'instagram'];

    
}
