<?php

namespace App\Http\Controllers\personel;

use App\Http\Controllers\Controller;
use App\Models\applicant\User1AOEAA;
use App\Models\applicant\User1Applicant;
use App\Models\applicant\User1Education;
use App\Models\applicant\User1Eligibility;
use App\Models\applicant\User1Experience;
use App\Models\applicant\User1LD;
use App\Models\applicant\User1OutstandingAccomplishment;
use App\Models\applicant\User1PerformanceRating;
use App\Models\applicant\User1Training;
use App\Models\Application;
use App\Models\personel\AvailableJobs;
use App\Models\personel\AvailablePosition;
use App\Models\personel\User2Signatory;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade\Pdf;
use ConvertApi\ConvertApi;

use function Pest\Laravel\json;

class PersonelMainController extends Controller
{
    function index() {
        $jobs = AvailableJobs::all();
        $positions = AvailablePosition::orderBy('id','DESC')->get();

        return view('personel.mainPage')
        ->with('jobs', $jobs)
        ->with('positions', $positions);
    }

    function signatoriesPage() {
        $signatory = User2Signatory::all();

        return view('personel.pages.signatoriesPage')
        -> with('signatory', $signatory);
    }

    function individualEvaluationResult() {
        $jobs = AvailableJobs::where('type', 'Related Teaching') -> orWhere('type', 'None Teaching') -> get();

        return view('personel.pages.individualEvaluationResult')
            ->with('jobs', $jobs);
    }

    function addJobs(Request $request) {
        $validated = $request->validate([
            'position' => ['required'],
            'education' => ['required'],
            'experience' => ['required'],
            'plantilla_item_no' => ['required'],
            'training' => ['required'],
            'eligibility' => ['required'],
            'salaryGrade' => ['required'],
            'monthlySalary' => ['required'],
            'placeOfAssignment' => ['required'],
            'postingDate' => ['required'],
            'closingDate' => ['required'],
        ]);

        $validated2 = [
            'id' => IdGenerator::generate(['table' => 'available_jobs', 'length' => 8, 'prefix' => date('y')]),
            'position' => $validated['position'],
            'type' => '',
            'category' => $request->category,
            'education' => $validated['education'],
            'experience' => $validated['experience'],
            'plantilla_item_no' => $validated['plantilla_item_no'],
            'training' => $validated['training'],
            'eligibility' => $validated['eligibility'],
            'salary_grade' => $validated['salaryGrade'],
            'monthly_salary' => $validated['monthlySalary'],
            'competency' => $request->competency,
            'place_of_assignment' => $validated['placeOfAssignment'],
            'posting_date' => $validated['postingDate'],
            'closing_date' => $validated['closingDate'],
        ];

        $positionType = AvailablePosition::where('position_title', $validated['position'])->first();

        if($positionType->id == 100) {
            $validated2['type'] = 'Teaching';
        } else if ($positionType->id <= 99 && $positionType->id >= 88) {
            $validated2['type'] = 'Related Teaching';
        } else {
            $validated2['type'] = 'Non Teaching';
        }

        $addJobs = AvailableJobs::create($validated2);

        if($addJobs) {
            notify()->success('Jobs Added Sucessfully');
            return redirect('/personel') -> with('message', 'Jobs Added Sucessfully');
        } else {
            notify()->error('Failed to add Jobs');
            return back() -> with('message', 'Jobs Failed to Add');
        }
    }

    function generateLetter() {
        
    }

    function viewApplicants(Request $request) {
        $data = Application::where('job_id', $request->jobID)->get();
        $applicants = User1Applicant::all();
        $education = User1Education::all();
        $training = User1Training::all();
        $experience = User1Experience::all();

        return view('personel.pages.jobApplicant')
        ->with('application', $data)
        ->with('applicants', $applicants)
        ->with('education', $education)
        ->with('jobID', $request->jobID)
        ->with('training', $training)
        ->with('experience', $experience);
    }

    function applicantInfo(Request $request) {
        $validated = $request->validate([
            'application_id' => ['required'],
        ]);
        $application = Application::where('id', $validated['application_id'])->first();
        $applicant = User1Applicant::where('id', $application['user1_applicant_id'])->first();
        $job = AvailableJobs::where('id', $application->job_id)->first();

        $educationalAttainment = User1Education::where('user1_applicant_id', $applicant->id)->get();
        $experience = User1Experience::where('user1_applicant_id', $applicant->id)->get();
        $training = User1Training::where('user1_applicant_id', $applicant->id)->get();
        $eligibility = User1Eligibility::where('user1_applicant_id', $applicant->id)->get();
        $performanceRating = User1PerformanceRating::where('user1_applicant_id', $applicant->id)->get();
        $outstandingAccomplishment = User1OutstandingAccomplishment::where('user1_applicant_id', $applicant->id)->get();
        $aoeaa = User1AOEAA::where('user1_applicant_id', $applicant->id)->get();
        $ld = User1LD::where('user1_applicant_id', $applicant->id)->get();

        
        return view('personel.pages.applicant_info')
        ->with('user', $applicant)
        ->with('educationalAttainment', $educationalAttainment)
        ->with('experience', $experience)
        ->with('training', $training)
        ->with('eligibility', $eligibility)
        ->with('performanceRating', $performanceRating)
        ->with('outstandingAccomplishment', $outstandingAccomplishment)
        ->with('aoeaa', $aoeaa)
        ->with('ld', $ld)
        ->with('application', $application)
        ->with('job', $job);
    }

    function evaluateApplicant(Request $request) {

        $validated = $request->validate([
            'id' => ['required'],
            'education' => ['required'],
            'experience' => ['required'],
            'training' => ['required'],
            'eligibility' => ['required'],
        ]);

        $validated2 = [
            'education' => $validated['education'],
            'experience' => $validated['experience'],
            'training' => $validated['training'],
            'eligibility' => $validated['eligibility'],
            'date_evaluated' => '',
        ];

        $mydate = getdate(date("U"));
        $validated2['date_evaluated'] = $mydate['mon'].'-'.$mydate['mday'].'-'.$mydate['year'];

        $evaluate = Application::where('id', $validated['id']) -> update($validated2);

        if($evaluate) {
            $data = Application::where('job_id', $request->jobID)->get();
            $applicants = User1Applicant::all();
            $education = User1Education::all();
            $training = User1Training::all();
            $experience = User1Experience::all();
    
            notify()->success('Evaluated sucesssfully');
            return view('personel.pages.jobApplicant')
            ->with('application', $data)
            ->with('applicants', $applicants)
            ->with('education', $education)
            ->with('jobID', $request->jobID)
            ->with('training', $training)
            ->with('experience', $experience);
        } else {
            notify()->error('Failed to Evaluate');
            return back();
        }
    }

    function addRemarks(Request $request) {

        $updateRemarks = Application::where('id', $request->id)->update(['remarks' => $request->remarks]);

        return response()->json($updateRemarks);
    }

    function printEvaluationLetter(Request $request) {
        $application = Application::where('id', $request->id)->first();
        $applicant = User1Applicant::where('id', $application->user1_applicant_id)->first();
        $job = AvailableJobs::where('id', $application->job_id)->first();
        $ducation = User1Education::where('user1_applicant_id', $applicant->id)->get();
        $experience = User1Experience::where('user1_applicant_id', $applicant->id)->get();
        $training = User1Training::where('user1_applicant_id', $applicant->id)->get();
        $eligibility = User1Eligibility::where('user1_applicant_id', $applicant->id)->get();

        $validated2 = [
            'date_evaluated' => '',
            'address' => $applicant->street.', '.$applicant->barangay.', '.$applicant->city_municipality.', '.$applicant->province,
            'applicant' => $applicant,
            'job' => $job,
            'application' => $application,
            'education' => $ducation,
            'experience' => $experience,
            'training' => $training,
            'eligibility' => $eligibility,
        ];

        $mydate = getdate(date("U"));
        $validated2['date_evaluated'] = $mydate['month'].' '.$mydate['mday'].', '.$mydate['year'];


        $pdf = Pdf::loadView('personel.pdf.evaluationResult', $validated2);
        return $pdf->download('invoice.pdf');
    }

    function addSignatories(Request $request) {
        $validated = $request->validate([
            'name' => ['required'],
            'position' => ['required'],
        ]);

        $validated2 = [
            'id' => IdGenerator::generate(['table' => 'user2_signatories', 'length' => 10, 'prefix' => date('y')]),
            'name' => $validated['name'],
            'position' => $validated['position'],
            'annex_e_and_annex_f' => $request->annex,
            'initial_evaluation_result' => $request->ier,
            'hrmpsb_chair' => $request->hrmpasbChair,
            'hrmpsb_member' => $request->hrmpasbMember,
            'hrmpsb_secretariat' => $request->hrmpasbSecretariat,
        ];

        $addSignatories = User2Signatory::create($validated2);

        if($addSignatories) {
            notify()->success('Added Successfully!');
            return back();
        } else {
            notify()->success('Added Failed!');
            return back();
        }
    }
}
