<?php


namespace Larabookir\Gateway\Model;

use Illuminate\Database\Eloquent\Model;

class Paypal extends Model
{
    protected $table = 'Gateway_paypal';
    protected $fillable = [
        'default_product_name',
        'default_shipment_price',
        // set your paypal credential
        'client_id',
        'secret',

        'mode',
        'http.ConnectionTimeOut',
        'log.LogEnabled',
        'log.FileName',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'call_back_url',
        'log.LogLevel'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User','userHasModel','user_id','model_id');
    }
}