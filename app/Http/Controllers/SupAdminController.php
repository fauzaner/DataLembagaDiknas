<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sup_admin/sup_admin');
    }
}
