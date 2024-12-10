<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public $backendPath = 'backend.';

    public $pagePath;

    public function __construct()
    {
        $this->pagePath = $this->backendPath . 'pages.';
    }
}
