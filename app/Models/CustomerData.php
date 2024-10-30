<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerData extends Model
{
    protected $table = 'customer_data';

	protected $fillable = [
		'nama',
		'no_telp',
		'alamat',
		'usia',
		'berat_badan',
		
	];
}
