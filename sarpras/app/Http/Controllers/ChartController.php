<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use DB;

class ChartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function googleLineChart()
    {
        $visitor = Visitor::select(
                        DB::raw("day(created_at) as year"),
                        DB::raw("SUM(click) as total_click"),
                        DB::raw("SUM(viewer) as total_viewer"))
                    ->orderBy(DB::raw("YEAR(created_at)"))
                    ->groupBy(DB::raw("YEAR(created_at)"))
                    ->get();

        $result[] = ['Year','Click','Viewer'];
        foreach ($visitor as $key => $value) {
            $result[++$key] = [$value->year, (int)$value->total_click, (int)$value->total_viewer];
        }

        return view('google-line-chart')
                ->with('visitor',json_encode($result));
    }
}
