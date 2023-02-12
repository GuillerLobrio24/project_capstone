<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class DeleteDataController extends Controller
{
    public function deleteData($id = null,$subject = null,$professor = null,$schedulefrom = null,$scheduleto = null,$created_at = null,$updated_at = null) {
        
        B1R401::where('id', $id)->delete();
        B1R401::where('subject', $subject)->delete();
        B1R401::where('professor', $professor)->delete();
        B1R401::where('schedulefrom', $schedulefrom)->delete();
        B1R401::where('scheduleto', $scheduleto)->delete();
        B1R401::where('created_at', $created_at)->delete();
        B1R401::where('updated_at', $updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab1r402($b1r402id = null,$b1r402subject = null,$b1r402professor = null,$b1r402schedulefrom = null,$b1r402scheduleto = null,$b1r402created_at = null,$b1r402updated_at = null) {

        B1R402::where('id', $b1r402id)->delete();
        B1R402::where('b1r402subject', $b1r402subject)->delete();
        B1R402::where('b1r402professor', $b1r402professor)->delete();
        B1R402::where('b1r402schedulefrom', $b1r402schedulefrom)->delete();
        B1R402::where('b1r402scheduleto', $b1r402scheduleto)->delete();
        B1R402::where('created_at', $b1r402created_at)->delete();
        B1R402::where('updated_at', $b1r402updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab1r403($b1r403id = null,$b1r403subject = null,$b1r403professor = null,$b1r403schedulefrom = null,$b1r403scheduleto = null,$b1r403created_at = null,$b1r403updated_at = null) {

        B1R403::where('id', $b1r403id)->delete();
        B1R403::where('b1r403subject', $b1r403subject)->delete();
        B1R403::where('b1r403professor', $b1r403professor)->delete();
        B1R403::where('b1r403schedulefrom', $b1r403schedulefrom)->delete();
        B1R403::where('b1r403scheduleto', $b1r403scheduleto)->delete();
        B1R403::where('created_at', $b1r403created_at)->delete();
        B1R403::where('updated_at', $b1r403updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab1r301($b1r301id = null,$b1r301subject = null,$b1r301professor = null,$b1r301schedulefrom = null,$b1r301scheduleto = null,$b1r301created_at = null,$b1r301updated_at = null) {

        B1R301::where('id', $b1r301id)->delete();
        B1R301::where('b1r301subject', $b1r301subject)->delete();
        B1R301::where('b1r301professor', $b1r301professor)->delete();
        B1R301::where('b1r301schedulefrom', $b1r301schedulefrom)->delete();
        B1R301::where('b1r301scheduleto', $b1r301scheduleto)->delete();
        B1R301::where('created_at', $b1r301created_at)->delete();
        B1R301::where('updated_at', $b1r301updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab1r302($b1r302id = null,$b1r302subject = null,$b1r302professor = null,$b1r302schedulefrom = null,$b1r302scheduleto = null,$b1r302created_at = null,$b1r302updated_at = null) {

        B1R302::where('id', $b1r301id)->delete();
        B1R302::where('b1r302subject', $b1r302subject)->delete();
        B1R302::where('b1r302professor', $b1r302professor)->delete();
        B1R302::where('b1r302schedulefrom', $b1r302schedulefrom)->delete();
        B1R302::where('b1r302scheduleto', $b1r302scheduleto)->delete();
        B1R302::where('created_at', $b1r302created_at)->delete();
        B1R302::where('updated_at', $b1r302updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab1r303($b1r303id = null,$b1r303subject = null,$b1r303professor = null,$b1r303schedulefrom = null,$b1r303scheduleto = null,$b1r303created_at = null,$b1r303updated_at = null) {

        B1R303::where('id', $b1r303id)->delete();
        B1R303::where('b1r303subject', $b1r303subject)->delete();
        B1R303::where('b1r303professor', $b1r303professor)->delete();
        B1R303::where('b1r303schedulefrom', $b1r303schedulefrom)->delete();
        B1R303::where('b1r303scheduleto', $b1r303scheduleto)->delete();
        B1R303::where('created_at', $b1r303created_at)->delete();
        B1R303::where('updated_at', $b1r303updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab1r201($b1r201id = null,$b1r201subject = null,$b1r201professor = null,$b1r201schedulefrom = null,$b1r201scheduleto = null,$b1r201created_at = null,$b1r201updated_at = null) {

        B1R201::where('id', $b1r201id)->delete();
        B1R201::where('b1r201subject', $b1r201subject)->delete();
        B1R201::where('b1r201professor', $b1r201professor)->delete();
        B1R201::where('b1r201schedulefrom', $b1r201schedulefrom)->delete();
        B1R201::where('b1r201scheduleto', $b1r201scheduleto)->delete();
        B1R201::where('created_at', $b1r201created_at)->delete();
        B1R201::where('updated_at', $b1r201updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab1r202($b1r202id = null,$b1r202subject = null,$b1r202professor = null,$b1r202schedulefrom = null,$b1r202scheduleto = null,$b1r202created_at = null,$b1r202updated_at = null) {

        B1R202::where('id', $b1r202id)->delete();
        B1R202::where('b1r202subject', $b1r202subject)->delete();
        B1R202::where('b1r202professor', $b1r202professor)->delete();
        B1R202::where('b1r202schedulefrom', $b1r202schedulefrom)->delete();
        B1R202::where('b1r202scheduleto', $b1r202scheduleto)->delete();
        B1R202::where('created_at', $b1r202created_at)->delete();
        B1R202::where('updated_at', $b1r202updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab1r203($b1r203id = null,$b1r203subject = null,$b1r203professor = null,$b1r203schedulefrom = null,$b1r203scheduleto = null,$b1r203created_at = null,$b1r203updated_at = null) {

        B1R203::where('id', $b1r303id)->delete();
        B1R203::where('b1r203subject', $b1r203subject)->delete();
        B1R203::where('b1r203professor', $b1r203professor)->delete();
        B1R203::where('b1r203schedulefrom', $b1r203schedulefrom)->delete();
        B1R203::where('b1r203scheduleto', $b1r203scheduleto)->delete();
        B1R203::where('created_at', $b1r203created_at)->delete();
        B1R203::where('updated_at', $b1r203updated_at)->delete();

        return redirect('');
    }

    // ----

    public function deleteDatab2r401($b2r401id = null,$b2r401subject = null,$b2r401professor = null,$b2r401schedulefrom = null,$b2r401scheduleto = null,$b2r401created_at = null,$b2r401updated_at = null) {

        B2R401::where('id', $b2r401id)->delete();
        B2R401::where('b2r401subject', $b2r401subject)->delete();
        B2R401::where('b2r401professor', $b2r401professor)->delete();
        B2R401::where('b2r401schedulefrom', $b2r401schedulefrom)->delete();
        B2R401::where('b2r401scheduleto', $b2r401scheduleto)->delete();
        B2R401::where('created_at', $b2r401created_at)->delete();
        B1R401::where('updated_at', $b2r401updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab2r402($b2r402id = null,$b2r402subject = null,$b2r402professor = null,$b2r402schedulefrom = null,$b2r402scheduleto = null,$b2r402created_at = null,$b2r402updated_at = null) {

        B2R402::where('id', $b2r402id)->delete();
        B2R402::where('b2r402subject', $b2r402subject)->delete();
        B2R402::where('b2r402professor', $b2r402professor)->delete();
        B2R402::where('b2r402schedulefrom', $b2r402schedulefrom)->delete();
        B2R402::where('b2r402scheduleto', $b2r402scheduleto)->delete();
        B2R402::where('created_at', $b2r402created_at)->delete();
        B1R402::where('updated_at', $b2r402updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab2r403($b2r403id = null,$b2r403subject = null,$b2r403professor = null,$b2r403schedulefrom = null,$b2r403scheduleto = null,$b2r403created_at = null,$b2r403updated_at = null) {

        B2R403::where('id', $b2r403id)->delete();
        B2R403::where('b2r403subject', $b2r403subject)->delete();
        B2R403::where('b2r403professor', $b2r403professor)->delete();
        B2R403::where('b2r403schedulefrom', $b2r403schedulefrom)->delete();
        B2R403::where('b2r403scheduleto', $b2r403scheduleto)->delete();
        B2R403::where('created_at', $b2r403created_at)->delete();
        B2R403::where('updated_at', $b2r403updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab2r301($b2r301id = null,$b2r301subject = null,$b2r301professor = null,$b2r301schedulefrom = null,$b2r301scheduleto = null,$b2r301created_at = null,$b2r301updated_at = null) {

        B2R301::where('id', $b2r301id)->delete();
        B2R301::where('b2r301subject', $b2r301subject)->delete();
        B2R301::where('b2r301professor', $b2r301professor)->delete();
        B2R301::where('b2r301schedulefrom', $b2r301schedulefrom)->delete();
        B2R301::where('b2r301scheduleto', $b2r301scheduleto)->delete();
        B2R301::where('created_at', $b2r301created_at)->delete();
        B2R301::where('updated_at', $b2r301updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab2r302($b2r302id = null,$b2r302subject = null,$b2r302professor = null,$b2r302schedulefrom = null,$b2r302scheduleto = null,$b2r302created_at = null,$b2r302updated_at = null) {

        B2R302::where('id', $b2r302id)->delete();
        B2R302::where('b2r302subject', $b2r302subject)->delete();
        B2R302::where('b2r302professor', $b2r302professor)->delete();
        B2R302::where('b2r302schedulefrom', $b2r302schedulefrom)->delete();
        B2R302::where('b2r302scheduleto', $b2r302scheduleto)->delete();
        B2R302::where('created_at', $b2r302created_at)->delete();
        B2R302::where('updated_at', $b2r302updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab2r303($b2r303id = null,$b2r303subject = null,$b2r303professor = null,$b2r303schedulefrom = null,$b2r303scheduleto = null,$b2r303created_at = null,$b2r303updated_at = null) {

        B2R303::where('id', $b2r303id)->delete();
        B2R303::where('b2r303subject', $b2r303subject)->delete();
        B2R303::where('b2r303professor', $b2r303professor)->delete();
        B2R303::where('b2r303schedulefrom', $b2r303schedulefrom)->delete();
        B2R303::where('b2r303scheduleto', $b2r303scheduleto)->delete();
        B2R303::where('created_at', $b2r303created_at)->delete();
        B2R303::where('updated_at', $b2r303updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab2r201($b2r201id = null,$b2r201subject = null,$b2r201professor = null,$b2r201schedulefrom = null,$b2r201scheduleto = null,$b2r201created_at = null,$b2r201updated_at = null) {

        B2R201::where('id', $b2r201id)->delete();
        B2R201::where('b2r201subject', $b2r201subject)->delete();
        B2R201::where('b2r201professor', $b2r201professor)->delete();
        B2R201::where('b2r201schedulefrom', $b2r201schedulefrom)->delete();
        B2R201::where('b2r201scheduleto', $b2r201scheduleto)->delete();
        B2R201::where('created_at', $b2r201created_at)->delete();
        B2R201::where('updated_at', $b2r201updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab2r202($b2r202id = null,$b2r202subject = null,$b2r202professor = null,$b2r202schedulefrom = null,$b2r202scheduleto = null,$b2r202created_at = null,$b2r202updated_at = null) {

        B2R202::where('id', $b2r202id)->delete();
        B2R202::where('b2r202subject', $b2r202subject)->delete();
        B2R202::where('b2r202professor', $b2r202professor)->delete();
        B2R202::where('b2r202schedulefrom', $b2r202schedulefrom)->delete();
        B2R202::where('b2r202scheduleto', $b2r202scheduleto)->delete();
        B2R202::where('created_at', $b2r202created_at)->delete();
        B2R202::where('updated_at', $b2r202updated_at)->delete();

        return redirect('');
    }

    public function deleteDatab2r203($b2r203id = null,$b2r203subject = null,$b2r203professor = null,$b2r203schedulefrom = null,$b2r203scheduleto = null,$b2r203created_at = null,$b2r203updated_at = null) {

        B2R203::where('id', $b2r203id)->delete();
        B2R203::where('b2r203subject', $b2r203subject)->delete();
        B2R203::where('b2r203professor', $b2r203professor)->delete();
        B2R203::where('b2r203schedulefrom', $b2r203schedulefrom)->delete();
        B2R203::where('b2r203scheduleto', $b2r203scheduleto)->delete();
        B2R203::where('created_at', $b2r203created_at)->delete();
        B2R203::where('updated_at', $b2r203updated_at)->delete();

        return redirect('');
    }

    

}
