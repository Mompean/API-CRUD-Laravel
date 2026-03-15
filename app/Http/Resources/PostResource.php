<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'musica' => $this->musica,
            'album' => $this->album,
            'artista' => $this->artista,
            'ano_de_lancamento' => $this->ano_de_lancamento,
            'created_at' => $this->created_at,
        ];
    }
}
