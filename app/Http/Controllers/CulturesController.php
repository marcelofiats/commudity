<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use App\Models\Culture;
use App\Models\Activity;
use App\Models\Cultures;
use Illuminate\Http\Request;

class CulturesController extends Controller
{
    
    public function index()
    {
        $titlePage = "Cultures";

        $cultures = Culture::where('deleted', 0)->get();

        return view('listCultures')->with(compact('titlePage', 'cultures'));
    }

    public function detail($id_culture)
    {
        $titlePage = 'Detalhes';

        $culture =  Culture::where('id', $id_culture)
        ->with('unit_type')
        ->with(['activities.farms', 'activities.farms.producer'])
        ->with(['activities' => function($activity){
            $activity->orderBy('year', 'asc');
        }])
        ->get()->first();

        return view('detailsCulture')->with(compact('titlePage', 'culture'));
    }
}
