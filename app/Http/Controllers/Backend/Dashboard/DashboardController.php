<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;

class DashboardController extends BackendController
{
    public function index() {

        //key => value
        $this->data('username','ram');
        $this->data('email','ram@gmail.com');
        return view($this->pagePath . 'dashboard.index', $this->data);
    }
}
