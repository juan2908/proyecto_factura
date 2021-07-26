<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_of_invoices',
        'Date_and_Time',
        'name_users',
        'nit',
        'name_buyer',
        'nit_buyer',
        'amount',
        'unit_value',
        'total_value',
        'value_without_iva',
        'iva',
        'amount_to_be_paid',
        'description'
    ];
}
