<?php

namespace App\Models\Vouchers;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Quote
 * @package App\Models\Vouchers
 */
class Quote extends Model
{
    // Table definition
    protected $table = 'quotes';

    // Disable timestamps
    public $timestamps = false;

    // Fillable db fields
    protected $fillable = [
        'voucher_id',
    ];
}
