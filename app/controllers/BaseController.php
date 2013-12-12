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
	public function ImageCrop($image,$path,$width,$height,$desiredImagename)
    { 	
        $img = Input::file($image);

        $ext = $img->getClientOriginalExtension();

        if (Input::hasFile($image)) {
            $upload_path = $_SERVER['DOCUMENT_ROOT'] . "/" . "uploads/".$path;

            if (!is_dir($upload_path))
                mkdir($upload_path);
            if(!$desiredImagename)
            {
                $imageName = "image".rand().date(time()).".".$ext;
            }else
                {
                   $imageName =  $desiredImagename; 
                }
        try {
                $success = Image::make($img
                    	 ->getRealPath())
                    	 ->resize($width, $height,true)
                    	 ->save($upload_path."/". $imageName);

                if ($success) {
                    try {
                        
                        return $imageName;
                    } catch (Sentry\SentryException $e) {
                        
                        return false;
                    }
                } else {
                    return false;
                }
            } catch (Exception $e) {
                return false;
            }
        }
        return false;
    }

}