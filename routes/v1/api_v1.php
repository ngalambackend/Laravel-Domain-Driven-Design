<?php
	Route::group(['prefix' => 'v1'], function () {
		
		/* User Review */
		Route::get('review', ['as' => 'review.index', 'uses' => 'UserReview\UserReviewController@index']);
		// Route::get('review/{id}', ['as' => 'review.show', 'uses' => 'UserReview\UserReviewController@show']);
		// Route::post('review', ['as' => 'review.store', 'uses' => 'UserReview\UserReviewController@store']);
		// Route::put('review/{id}', ['as' => 'review.update', 'uses' => 'UserReview\UserReviewController@update']);
		// Route::delete('review/{id}', ['as' => 'review.delete', 'uses' => 'UserReview\UserReviewController@destroy']);

    });
    
    

?>
