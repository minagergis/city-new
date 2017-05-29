<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class PostCategory extends Model {

  protected $table    = 'post_category';
  protected $fillable = ['post_id', 'category_id'];

  public function posts() {
    return $this->belongsTo('post');
  }

  public function categories() {
    return $this->belongsTo('category');
  }

}