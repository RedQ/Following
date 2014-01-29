<?php

class ProfileController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('profile.index');
	}


	public function edit_profile(){
		
		return View::make('profile.edit');
	}



}
