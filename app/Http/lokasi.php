<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    protected $table = 'lokasis';
    protected $primaryKey = 'KodeLokasi';
    public $incrementing = false;
    protected $fillable = ['KodeLokasi','NamaLokasi','Tipe'];
}
