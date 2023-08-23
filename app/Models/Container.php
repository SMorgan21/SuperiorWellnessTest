<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $table = 'containers';

    protected $fillable = [
        'container_number',
        'port_due_date',
        'warehouse_due_date',
        'shipper_reference_number',
        'shipper_invoice_number',
        'shipping_invoice_number',
        'number_items_in_container',
    ];
}
