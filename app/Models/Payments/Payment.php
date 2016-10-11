<?php

namespace App\Models\Payments;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment
 * @package App\Models\Payments
 */
class Payment extends Model
{
    use SoftDeletes;

    // Table definition
    protected $table = 'payments';

    // Fillable db fields
    protected $fillable = [
        'voucher_id',
        'payment_method_id',
        'paid_amount',
        'op_transaction_id',
        'op_message',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    /**
     * Returns the associated payment method
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paymentMethod()
    {
        return $this->belongsTo('App\Models\Payments\PaymentMethod', 'payment_method_id');
    }

    /**
     * Get all attachments
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function attachments()
    {
        return $this->morphMany('App\Models\Attachment', 'commentable');
    }

    /**
     * Get all notes
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function notes()
    {
        return $this->morphMany('App\Models\Note', 'notable');
    }
}
