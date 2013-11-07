<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function sendTo($to,$data = array())
 	{

	  Mail::send('emails.registration',$data, function($message) use($to)
	  {
	   $message->to($to)
	        ->subject('Complete');
	  });
	}

}