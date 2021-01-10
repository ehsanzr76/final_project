<?php

namespace ehsan\Media\models;

use ehsan\Business\models\Business;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $casts = [
        'files' => 'json'
    ];










}
