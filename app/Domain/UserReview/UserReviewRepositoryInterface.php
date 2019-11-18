<?php

namespace App\Domain\UserReview;

use App\Domain\UserReview\Entities\UserReview;

interface UserReviewRepositoryInterface
{

	/**
	 * all data with pagination
	 * @param  int $paginate 
	 * @param  array $request  
	 * @return [type]           
	 */
	public function allWithPagination($paginate);

	/**
	 * find data by ID
	 * @param  int $id 
	 * @return App\Domain\UserReview\Entities\UserReview     
	 */
	public function findById($id);

	/**
	 * store new data
	 * @param  UserReview $model 
	 * @return App\Domain\UserReview\Entities\UserReview
	 */
	public function store(UserReview $model);

	/**
	 * delete data from database
	 * @param  UserReview $model 
	 * @return boolean            
	 */
	public function delete(UserReview $model);
}   