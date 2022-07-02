<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    protected $table='matches';

    protected $fillable = ['name', 'shortname', 'tla', 'crest'];

    protected $hidden = ['id'];

    ///////////////////////////////////////////////////////////////////RELATIONSHIP///////////////////
    /**
     * Get the team that owns the Match
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teamHome()
    {
        return $this->belongsTo(Team::class, 'hometeam_id');
    }
    public function teamAway()
    {
        return $this->belongsTo(Team::class, 'awayteam_id');
    }

}
