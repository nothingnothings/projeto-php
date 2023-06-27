<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// CONTRACT DE AUTHENTICATION DO LARAVEL... (é tipo uma INTERFACE. Precisa ser satisfeita)
use Illuminate\Contracts\Auth\Authenticatable;

//satisfazemos a interface de 'Authenticable' por meio do __TRAIT__ de 'Authenticable', que também é built-in no laravel.


class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable; //satisfazemos a interface de 'Authenticable' por meio do __TRAIT__ de 'Authenticable', que também é built-in no laravel.
    use HasFactory;
}
