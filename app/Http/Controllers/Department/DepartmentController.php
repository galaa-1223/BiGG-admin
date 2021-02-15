<?php

namespace App\Http\Controllers\Department;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Traits\Helpers;

class DepartmentController extends Controller
{
    use Helpers;

    public function dashboard()
    {
        $pageTitle = 'Хянах самбар';
        $pageName = 'dashboard';

        $activeMenu = $this->activeMenu($pageName);

        return view('department/pages/'.$pageName.'/index', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName
        ]);
    }
}