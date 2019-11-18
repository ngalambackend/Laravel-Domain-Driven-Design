<?php

namespace App\Http\Controllers\UserReview;

use App\Domain\UserReview\UserReviewRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
	
    protected $repository;

    public function __construct(UserReviewRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       
        $page = ($request->has('paginate')) ? $request->get('paginate') : 9;

        $result =  $this->repository->allWithPagination($page);
        return response()->json([
	        'status_code' => 200,
	        'data' => $result,
	    ], 200);
    }
}
