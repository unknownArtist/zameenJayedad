<?php

class ReportController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getReport()
    {
        $agend_id =  Sentry::getUser()->id;
        $for_sale_count =  Profolio::where('purpose','=','For Sale')->where('agent_id',$agend_id)->count();
        $for_rent_count =  Profolio::where('agent_id',$agend_id)->where('purpose','=','For Rent')->count();
        $total = Profolio::where('agent_id',$agend_id)->count();
        return View::make('report.report')
                   ->with('total',$total)
                   ->with('forRent',$for_rent_count)
                   ->with('forSale',$for_sale_count);

    }




}