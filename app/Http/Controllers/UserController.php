<?php

namespace App\Http\Controllers;

use App\Models\datamodel;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // using eloquent model donot use get()
            $model = datamodel::orderby('PersonID','ASC');
            return app('datatables')->eloquent($model)
                //adding index or s.no
                ->addIndexColumn()
                ->addColumn('action', function($model){
                //adding buttons to datatable
                $btn = '<a href="view_'.$model->PersonID.'" class="edit btn btn-primary btn-sm">View</a>
                        <a href="delete_'.$model->PersonID.'" class="edit btn btn-danger btn-sm">Delete</a>';
                return $btn;
                })
                ->toJson();
        }
        return view('users');
    }
}
