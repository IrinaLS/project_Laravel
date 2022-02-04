<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
	public static $availableFields = [
		'id','title','author','status','description','created_at'
	];
	protected $fillable = [
		'category_id',
		'title',
		'slug',
		'author',
		'status',
		'description'
	];
	
	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}
	// protected $guarded = ['id'] указывается только то, что запрещено
	/*public function getTitleAttribute($value)  //AKSESSORIES
	{
		return mb_strtoupper($value);
	}
	protected $casts = [    //CASTS
		'display' => 'boolean'
	];	*/
}
