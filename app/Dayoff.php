<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dayoff extends Model
{
    //
    protected $table = 'dayoffs';
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';
}
