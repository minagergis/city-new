<?php namespace Modules\Admin\Models;


use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Category extends Model
{
  use Translatable;

  protected $table = 'category';
  public $useTranslationFallback = true;

  public $translatedAttributes = ['slug','name','description'];

  protected $fillable = ['parent', 'media_id','icon'];

  public function media()
  {
    return $this->hasOne('Modules\Admin\Models\Media', 'id', 'media_id');
  }

  public function post(){
      return $this->hasMany('Modules\Admin\Models\Post', 'post_category', 'post_id', 'category_id');
  }

}