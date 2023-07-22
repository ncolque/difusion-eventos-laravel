<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Mensaje extends Model implements Searchable
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'asunto', 'fecha', 'hora', 'user_id', 'evento_id'
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('buscar.resultado', $this->id);

        return new SearchResult(
            $this,
            $this->asunto,
            $url
        );
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function evento(){
        return $this->belongsTo(Evento::class);
    }
}
