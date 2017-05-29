<?php namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class PostCategory extends Model {

  protected $table    = 'post_category';
  protected $fillable = ['post_id', 'category_id'];

  public function post() {
    return $this->belongsTo('Modules\Admin\Models\Post');
  }

  public function category() {
    return $this->belongsTo('Modules\Admin\Models\Category');
  }

}