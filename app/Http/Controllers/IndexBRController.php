<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\B1R401;
use App\Models\B1R402;
use App\Models\B1R403;
use App\Models\B1R301;
use App\Models\B1R302;
use App\Models\B1R303;
use App\Models\B1R201;
use App\Models\B1R202;
use App\Models\B1R203;
use App\Models\B2R401;
use App\Models\B2R402;
use App\Models\B2R403;
use App\Models\B2R301;
use App\Models\B2R302;
use App\Models\B2R303;
use App\Models\B2R201;
use App\Models\B2R202;
use App\Models\B2R203;


class IndexBRController extends Controller
{
    public function index()
    {
        $b1r401 = B1R401::all();
        $b1r402 = B1R402::all();
        $b1r403 = B1R403::all();
        $b1r301 = B1R301::all();
        $b1r302 = B1R302::all();
        $b1r303 = B1R303::all();
        $b1r201 = B1R201::all();
        $b1r202 = B1R202::all();
        $b1r203 = B1R203::all();
        $b2r401 = B2R401::all();
        $b2r402 = B2R402::all();
        $b2r403 = B2R403::all();
        $b2r301 = B2R301::all();
        $b2r302 = B2R302::all();
        $b2r303 = B2R303::all();
        $b2r201 = B2R201::all();
        $b2r202 = B2R202::all();
        $b2r203 = B2R203::all();

        $b1r401schedfrom = B1R401::select('schedulefrom')->get();
        $b1r401schedto = B1R401::select('scheduleto')->get();
        $b1r401col = B1R401::select('id','subject','professor','schedulefrom','scheduleto','created_at','updated_at')->get();
        
        $b1r402schedfrom = B1R402::select('b1r402schedulefrom')->get();
        $b1r402schedto = B1R402::select('b1r402scheduleto')->get();
        $b1r402col = B1R402::select('id', 'b1r402subject', 'b1r402professor', 'b1r402schedulefrom', 'b1r402scheduleto', 'created_at', 'updated_at')->get();

        $b1r403schedfrom = B1R403::select('b1r403schedulefrom')->get();
        $b1r403schedto = B1R403::select('b1r403scheduleto')->get();
        $b1r403col = B1R403::select('id', 'b1r403subject', 'b1r403professor', 'b1r403schedulefrom', 'b1r403scheduleto', 'created_at', 'updated_at')->get();

        $b1r301schedfrom = B1R301::select('b1r301schedulefrom')->get();
        $b1r301schedto = B1R301::select('b1r301scheduleto')->get();
        $b1r301col = B1R301::select('id', 'b1r301subject', 'b1r301professor', 'b1r301schedulefrom', 'b1r301scheduleto', 'created_at', 'updated_at')->get();

        $b1r302schedfrom = B1R302::select('b1r302schedulefrom')->get();
        $b1r302schedto = B1R302::select('b1r302scheduleto')->get();
        $b1r302col = B1R302::select('id', 'b1r302subject', 'b1r302professor', 'b1r302schedulefrom', 'b1r302scheduleto', 'created_at', 'updated_at')->get();

        $b1r303schedfrom = B1R303::select('b1r303schedulefrom')->get();
        $b1r303schedto = B1R303::select('b1r303scheduleto')->get();
        $b1r303col = B1R303::select('id', 'b1r303subject', 'b1r303professor', 'b1r303schedulefrom', 'b1r303scheduleto', 'created_at', 'updated_at')->get();

        $b1r201schedfrom = B1R201::select('b1r201schedulefrom')->get();
        $b1r201schedto = B1R201::select('b1r201scheduleto')->get();
        $b1r201col = B1R201::select('id', 'b1r201subject', 'b1r201professor', 'b1r201schedulefrom', 'b1r201scheduleto', 'created_at', 'updated_at')->get();

        $b1r202schedfrom = B1R202::select('b1r202schedulefrom')->get();
        $b1r202schedto = B1R202::select('b1r202scheduleto')->get();
        $b1r202col = B1R202::select('id', 'b1r202subject', 'b1r202professor', 'b1r202schedulefrom', 'b1r202scheduleto', 'created_at', 'updated_at')->get();

        $b1r203schedfrom = B1R203::select('b1r203schedulefrom')->get();
        $b1r203schedto = B1R203::select('b1r203scheduleto')->get();
        $b1r203col = B1R203::select('id', 'b1r203subject', 'b1r203professor', 'b1r203schedulefrom', 'b1r203scheduleto', 'created_at', 'updated_at')->get();
        
        $b2r401schedfrom = B2R401::select('b2r401schedulefrom')->get();
        $b2r401schedto = B2R401::select('b2r401scheduleto')->get();
        $b2r401col = B2R401::select('id','b2r401subject','b2r401professor','b2r401schedulefrom','b2r401scheduleto','created_at','updated_at')->get();
        
        $b2r402schedfrom = B2R402::select('b2r402schedulefrom')->get();
        $b2r402schedto = B2R402::select('b2r402scheduleto')->get();
        $b2r402col = B2R402::select('id', 'b2r402subject', 'b2r402professor', 'b2r402schedulefrom', 'b2r402scheduleto', 'created_at', 'updated_at')->get();

        $b2r403schedfrom = B2R403::select('b2r403schedulefrom')->get();
        $b2r403schedto = B2R403::select('b2r403scheduleto')->get();
        $b2r403col = B2R403::select('id', 'b2r403subject', 'b2r403professor', 'b2r403schedulefrom', 'b2r403scheduleto', 'created_at', 'updated_at')->get();

        $b2r301schedfrom = B2R301::select('b2r301schedulefrom')->get();
        $b2r301schedto = B2R301::select('b2r301scheduleto')->get();
        $b2r301col = B2R301::select('id', 'b2r301subject', 'b2r301professor', 'b2r301schedulefrom', 'b2r301scheduleto', 'created_at', 'updated_at')->get();

        $b2r302schedfrom = B2R302::select('b2r302schedulefrom')->get();
        $b2r302schedto = B2R302::select('b2r302scheduleto')->get();
        $b2r302col = B2R302::select('id', 'b2r302subject', 'b2r302professor', 'b2r302schedulefrom', 'b2r302scheduleto', 'created_at', 'updated_at')->get();

        $b2r303schedfrom = B2R303::select('b2r303schedulefrom')->get();
        $b2r303schedto = B2R303::select('b2r303scheduleto')->get();
        $b2r303col = B2R303::select('id', 'b2r303subject', 'b2r303professor', 'b2r303schedulefrom', 'b2r303scheduleto', 'created_at', 'updated_at')->get();

        $b2r201schedfrom = B2R201::select('b2r201schedulefrom')->get();
        $b2r201schedto = B2R201::select('b2r201scheduleto')->get();
        $b2r201col = B2R201::select('id', 'b2r201subject', 'b2r201professor', 'b2r201schedulefrom', 'b2r201scheduleto', 'created_at', 'updated_at')->get();

        $b2r202schedfrom = B2R202::select('b2r202schedulefrom')->get();
        $b2r202schedto = B2R202::select('b2r202scheduleto')->get();
        $b2r202col = B2R202::select('id', 'b2r202subject', 'b2r202professor', 'b2r202schedulefrom', 'b2r202scheduleto', 'created_at', 'updated_at')->get();

        $b2r203schedfrom = B2R203::select('b2r203schedulefrom')->get();
        $b2r203schedto = B2R203::select('b2r203scheduleto')->get();
        $b2r203col = B2R203::select('id', 'b2r203subject', 'b2r203professor', 'b2r203schedulefrom', 'b2r203scheduleto', 'created_at', 'updated_at')->get();

        

        return view('page.index', compact(
            'b1r401','b1r401schedfrom','b1r401schedto', 'b1r401col',
            'b1r402','b1r402schedfrom','b1r402schedto', 'b1r402col',
            'b1r403','b1r403schedfrom','b1r403schedto', 'b1r403col',
            'b1r301','b1r301schedfrom','b1r301schedto', 'b1r301col',
            'b1r302','b1r302schedfrom','b1r302schedto', 'b1r302col',
            'b1r303','b1r303schedfrom','b1r303schedto', 'b1r303col',
            'b1r201','b1r201schedfrom','b1r201schedto', 'b1r201col',
            'b1r202','b1r202schedfrom','b1r202schedto', 'b1r202col',
            'b1r203','b1r203schedfrom','b1r203schedto', 'b1r203col', 
            'b2r401','b2r401schedfrom','b2r401schedto', 'b2r401col',
            'b2r402','b2r402schedfrom','b2r402schedto', 'b2r402col',
            'b2r403','b2r403schedfrom','b2r403schedto', 'b2r403col',
            'b2r301','b2r301schedfrom','b2r301schedto', 'b2r301col',
            'b2r302','b2r302schedfrom','b2r302schedto', 'b2r302col',
            'b2r303','b2r303schedfrom','b2r303schedto', 'b2r303col',
            'b2r201','b2r201schedfrom','b2r201schedto', 'b2r201col',
            'b2r202','b2r202schedfrom','b2r202schedto', 'b2r202col',
            'b2r203','b2r203schedfrom','b2r203schedto', 'b2r203col'
        ));
    }

}
