<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table='teams';

    protected $fillable = ['name', 'shortname', 'tla', 'crest'];

    protected $hidden = ['id'];

    public function getTeams()
    {
        return Team::all();
    }

    public function getTeamById($id)
    {
        return Team::find($id);
    }

}
