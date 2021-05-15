<?php

namespace App\Lib;

use App\Lib\CustomError;
use App\Models\StudentModel as Model;
use Illuminate\Support\Facades\Storage;

class Student
{

    public static function saveStudentDetails(array $studentData):bool
    {   
        try{
            $response = false;
            $studentName = $studentData['name'];
            $imageFile = $studentData['image'];
            $imageName = $imageFile->getClientOriginalName();
            $storeImage = Storage::disk('public')->put($studentName,$imageFile);
            
            $studentModel = new Model();
            $studentModel->student_name = $studentData['name'];
            $studentModel->grade = $studentData['grade'];
            $studentModel->image = $imageName;
            $studentModel->date_of_birth = $studentData['dateofbirth'];            
            $studentModel->address = $studentData['address'];
            $studentModel->city = $studentData['city'];
            $studentModel->country = $studentData['country'];
            $response = $studentModel->save();
            return $response;
        }
        catch(\Exception $e)
        {
            CustomError::logError($e);
            return false;
        }

    }

}
