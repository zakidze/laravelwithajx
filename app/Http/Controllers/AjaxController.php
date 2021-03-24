<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index(Request $request)
    {
        $model = new Ajax();
        $model->name = $request->post('name');
        $model->email = $request->post('email');
        if ($model->save()) {
            return 'succeed';
        } else {
            return 'failed';
        }
    }
}
