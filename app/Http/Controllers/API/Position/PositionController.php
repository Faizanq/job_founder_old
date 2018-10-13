<?php

namespace App\Http\Controllers\API\Position;

use App\Http\Controllers\API\Base\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $positions = Position::all();
        return $this->showAll($positions);
    }

}
