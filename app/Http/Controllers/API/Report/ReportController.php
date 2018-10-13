<?php

namespace App\Http\Controllers\API\Report;

use App\Http\Controllers\API\Base\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $reports = Report::all();
        return $this->showAll($reports);
    }

}
