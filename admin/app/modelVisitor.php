<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelVisitor extends Model
{
    public $table='visitor';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=false;

}
