<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matauang extends Model
{
    protected $table = 'matauangs';
    protected $primaryKey = 'KodeMataUang';
    public $incrementing = false;
    protected $fillable = ['KodeMataUang','NamaMataUang','Nilai'];
}
