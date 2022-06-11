<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Categoria extends MongoModel implements Authenticatable
{
    use AuthenticableTrait;
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;
    protected $table = 'categoria';

}
