<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class InvoiceDetail extends Model{
        protected $table = 'invoice_detail';
        protected $fillable = ['invoice_id','product_id','quantity','unit_price'];

        public function product(){
            return $this->belongsTo(Product::class, 'product_id');
        }
    }


?>