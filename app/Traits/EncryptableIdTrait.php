<?php
namespace App\Traits;

use Illuminate\Support\Facades\Crypt;

trait EncryptableIdTrait
{
    public function getRouteKeyName()
    {
        return 'encrypted_id';
    }

    public function getIdAttribute()
    {
        return Crypt::decrypt($this->attributes['id']);
    }

    public function setIdAttribute($value)
    {
        $this->attributes['id'] = Crypt::encrypt($value);
    }
}
