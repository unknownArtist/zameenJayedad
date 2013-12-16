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

        $propertyDate = PropertyHits::where('property_id','=',1)->groupBy('hits_on')->get();
        $propertyHits = PropertyHits::where('property_id','=',1)
                                    ->select(DB::raw('COUNT(hits_on) as totalHits'))
                                    ->groupBy('hits_on')
                                    ->get();
        $data = array();
        foreach ($propertyHits as $key => $value) {
            $data[] = $value->totalHits;
        }

        $data = str_replace('"',"",json_encode($data));

        return View::make('report.report')
                   ->with('total',$total)
                   ->with('date',$propertyDate->lists('hits_on'))
                   ->with('totalHits',$data)
                   // ->with('totalHits',$propertyHits->lists('totalHits'))
                   ->with('forRent',$for_rent_count)
                   ->with('forSale',$for_sale_count);

    }




}