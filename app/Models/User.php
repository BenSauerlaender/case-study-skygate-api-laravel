<?php

namespace App;

use App\Models\EmailChangeRequest;
use App\Models\RefreshToken;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function refreshToken()
    {
        return $this->hasOne(RefreshToken::class);
    }

    public function emailChangeRequest()
    {
        return $this->hasOne(EmailChangeRequest::class);
    }
}
