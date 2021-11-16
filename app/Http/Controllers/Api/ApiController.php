<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use PhpParser\Node\Expr\FuncCall;
use App\Models\Employee;

class ApiController extends Controller
{
    // CREATE API - POST
    public function createEnployee(Request $request) {

        // Validation
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:employees",
            "phone_no" => "required",
            "gender" => "required",
            "age" => "required"
        ]);

        // create data
        $employee = new Employee();

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone_no->$request->phone_no;
        $employee->gender = $request->gender;
        $employee->age = $request->age;
        $employee->save();

        // send response
        return response()->json([
            "status" => 1,
            "message" => 'Enpregado cadastrado com sucesso!'
        ]);
    }

    // LIST API - GET
    public function listEmployees() {

    }

    // SINGLE DETAIL API - GET
    public function getSingleEmployee($id) {

    }

    // UPADTAE API - PUT
    public function updateEmployee(Request $request, $id) {

    }

    // DELETE API - DELETE
    public function deleteEmployee($id) {

    }
}
