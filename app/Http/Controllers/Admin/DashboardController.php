<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\VideoTag;
use App\Service\WebsiteTrafficService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(public WebsiteTrafficService $traffic){

    }

    public function index(){
        $totalSermons = Media::video()->count();
        $totalSermonTag = VideoTag::active()->count();

        $totalUniqueVisitors = $this->traffic->getAllUniqueVisitors();
        $todayVisitors = $this->traffic->getTodayUniqueVisitors();
        $mostVisitedPage = $this->traffic->getMostVisitedPages();
        $visitorsByDevice = $this->traffic->getVisitorByDeviceType();
        return view('admin.dashboard',compact('totalSermons','totalUniqueVisitors','todayVisitors','mostVisitedPage',
            'visitorsByDevice', 'totalSermonTag'));
    }
}
