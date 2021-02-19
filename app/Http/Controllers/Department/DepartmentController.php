<?php

namespace App\Http\Controllers\Department;

use App\Http\Requests;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function dashboard()
    {
        $pageTitle = 'Хянах самбар';
        $pageName = 'dashboard';

        $activeMenu = activeMenu($pageName);

        return view('department/pages/'.$pageName.'/index', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName
        ]);
    }
}