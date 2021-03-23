<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Product extends Model{
        protected $table = 'products';
        protected $fillable = ['name','cate_id','price','short_desc','detail','image'];


        public function category(){
            return $this->belongsTo(Category::class , 'cate_id');
        }

        public function galleries(){
            return $this->hasMany(Galleries::class , 'product_id');
        }
    }


?>