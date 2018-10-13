<?php

namespace App\Http\Controllers\API\Language;

use App\Http\Controllers\API\Base\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $languages = Language::all();
        return $this->SuccessResponse($languages);
    }

}
