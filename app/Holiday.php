<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    //
    protected $table = 'holidays';
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';
}
