<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class InvitationCode extends Model
{
    protected $table = 'invitation_code';
    protected $primaryKey = 'id';
    public $timestamps = FALSE;
}
