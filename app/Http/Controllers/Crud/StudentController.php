<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lib\CustomError;
use App\Lib\Student;
use App\Models\StudentModel;
use App\Http\Requests\StoreRegistationDetails;

class StudentController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }

    public function registrationForm()
    {
        try
        {
            return view('students\registration');
        }
        catch(\Exception $e){
            CustomError::error($e->getMessage(). " " . $e->getFile() . $e->getLine());
            return view('welcome');
        }
    }

    public function studentDetailsPage()
    {
        try{
            return view('students\all_student_details');
        }
        catch(\Exception $e)
        {   
            CustomError::error($e->getMessage(). " " . $e->getFile() . $e->getLine());
            return view('welcome');
        }
    }

    public function saveStudentDetails(StoreRegistationDetails $request)
    {
        try
        {
            $studentData = $request->toArray();
            if(!empty($studentData)){
                $saveData = Student::saveStudentDetails($studentData);
                if($saveData){
                    return redirect()->back()->with('message', 'Student details submitted successfully and student Registered.');
                }
                else{
                    return redirect()->back()->with('errors', 'Unable to save details. Please try again.');
                }
            }
            throw new \Exception('No data for save student registration details');
            

        }
        catch(\Exception $e)
        {
            CustomError::logError($e);
            return redirect()->back()->with('errors', 'Unable to save details. Please try again.');
        }
        
    }

    public function allStudentDetails()
    {
        try{
                $users = StudentModel::select('*')->get();
                return datatables()->of($users)->make(true);
        }
        catch(\Exception $e)
        {
            CustomError::logError($e);
            return [];
        }
    }

}
