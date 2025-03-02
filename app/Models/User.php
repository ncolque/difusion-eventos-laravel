<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class User extends Authenticatable implements Searchable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = false;

    protected $fillable = [
        'name',
        'apellido',
        'email',
        'password',
        'tipo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('buscar.resultado', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }

    public function eventos(){
        return $this->hasMany(Evento::class);
    }

    public function mensajes(){
        return $this->hasMany(Mensaje::class);
    }
}
