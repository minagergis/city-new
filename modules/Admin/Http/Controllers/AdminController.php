<?php namespace Modules\Admin\Http\Controllers;

use Carbon\Carbon;
use Pingpong\Modules\Routing\Controller;
use Analytics;

class AdminController extends Controller {

	/**
	 * Initializer.
	 *
	 * @return \AdminController
	 */
	public function __construct()
	{
		if(!\Session::has('lang')) {
			\Session::put('lang', 'all');
		}
	}

	public function index()
	{

        //$analyticsData = Analytics::getVisitorsAndPageViews(7);
        //$analyticsData = Analytics::getTopReferrers();
        //$analyticsData = Analytics::getTopBrowsers();
       // $analy=new Analytics();
        //$analyticsData = $analy->getVisitorsAndPageViews(7);;
        //dd($analyticsData);
        return view('admin::index');
	}

}