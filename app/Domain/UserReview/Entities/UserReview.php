<?php

namespace App\Domain\UserReview\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserReview extends Model
{
    use SoftDeletes;
	
	/**
	 * @var string
	 */
	protected $table = 'user_review';

		/**
	 * @var [columns]
	 */
	protected $fillable = [
        'order_id',
        'product_id',
        'user_id',
        'rating',
        'review'
    ];
}
