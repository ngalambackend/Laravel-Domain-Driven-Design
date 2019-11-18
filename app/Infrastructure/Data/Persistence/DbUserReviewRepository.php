<?php

namespace App\Infrastructure\Data\Persistence;

use App\Domain\UserReview\UserReviewRepositoryInterface;
use App\Domain\UserReview\Entities\UserReview;

class DbUserReviewRepository implements UserReviewRepositoryInterface
{

    /**
     * @var App\Domain\UserReview\Entities\UserReview
     */
	protected $model;

    /**
     * DbAdministratorRepository constructor
     * @param UserReview $model [description]
     */
	public function __construct(UserReview $model)
	{
		$this->model = $model;
	}

    /**
     * get resources from database [pagination]
     * @param  int $paginate 
     * @param  array $filters  
     * @return App\Domain\UserReview\Entities\UserReview
     */
	public function allWithPagination($paginate)
	{
		$collection = $this->model->newQuery();
		return $collection->orderBy('created_at', 'desc')->paginate($paginate);

	}

    /**
     * find resource by ID
     * @param  int $id 
     * @return App\Domain\UserReview\Entities\UserReview;     
     */
	public function findById($id)
	{
		return $this->model->find($id);
	}

	/**
     * @param UserReview $model
     * @return bool
     */
    public function store(UserReview $model)
    {
        return $model->save();
    }

    /**
     * @param UserReview $model
     * @return bool|null
     */
    public function delete(UserReview $model)
    {
        return $model->delete($id);
    }
}