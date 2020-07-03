<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['id', 'pertanyaan'];

    public function jawaban()
    {
    	return $this->hasMany(Jawaban::class);
    }

}
