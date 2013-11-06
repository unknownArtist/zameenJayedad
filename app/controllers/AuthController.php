<?php

class AuthController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getRegister()
	{
		
		return View::make('auth.register')
				   ->with("countries",Config::get('listconfig.countries'))
				   ->with('roles',    Config::get('listconfig.roles'))
				   ->with('cities',    Config::get('listconfig.cities'));
	}
	public function postRegister()
	{
		return "post";
	}

}