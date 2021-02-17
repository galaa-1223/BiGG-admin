<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Teachers;

class TeachersController extends Controller
{
    private $status_code = 200;
    private $error_code = 500;

    public function teacherLogin(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                "code" => "required",
                "password" => "required"
            ]
        );

        if($validator->fails())
        {
            return response()->json([
                "status" => "failed",
                "validation_error" => $validator->errors(),
            ],500);
        }

        $teacher_code_status = Teachers::where("code", $request->code)->first();

        if(!is_null($teacher_code_status))
        {
            $password_status = Teachers::where("code", $request->code)->where("password", $request->password)->first();

            if(!is_null($password_status)) {
                $teacher = $this->teacherDetail($request->code);

                return response()->json(["status" => $this->status_code, "success" => true, "message" => "Амжилттай нэвтэрлээ!", "data" => $teacher]);
            
            } else {
                return response()->json(["status" => "failed", "success" => false, "message" => "Нууц үг худлаа байна!"], $this->error_code);
            }

        } else {
            return response()->json(["status" => "failed", "success" => false, "message" => "Бүртгэлтэй кодтой багш алба байна!"], $this->error_code);
        }
    }

    public function teacherDetail($code) 
    {
        $teacher = array();

        if($code != "") {
            $teacher = Teachers::where("code", $code)->first();
            return $teacher;
        }
    }

    public function teacherList()
    {
        $teacher = array();

        $teacher = Teachers::all();
            return $teacher;
    }
}
