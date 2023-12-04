<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;


class Pet extends Model
{
    public function save(array $options = [])
    {
        // Se nenhum autor tiver sido atribuído, atribua o id do usuário atual como autor do post
        if (!$this->informante_id && Auth::user()) {
            $this->informante_id = Auth::user()->getKey();
        }

        return parent::save();
    }
    public function informante()
    {
        return $this->belongsTo(User::class, 'informante_id', 'id');
    }
    public function dono()
    {
        return $this->belongsTo(User::class, 'dono_id', 'id');
    }
}
