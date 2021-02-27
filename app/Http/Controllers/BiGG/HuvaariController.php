<?php

namespace App\Http\Controllers\BiGG;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Models\Huvaari;

class HuvaariController extends Controller
{
    public function index()
    {
        $pageTitle = 'Хичээлийн хуваарь';
        $pageName = 'huvaari';
        $huvaari = Huvaari::orderBy('created_at', 'desc')->paginate(9);

        $activeMenu = activeMenu($pageName);

        return view('bigg/pages/'.$pageName.'/index', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName,
            'huvaari' => $huvaari,
            'user' => Auth::guard('bigg')->user()
        ]);
    }

    public function add()
    {
        $pageTitle = 'Хичээл нэмэх';
        $pageName = 'huvaari';

        $activeMenu = activeMenu($pageName);

        return view('bigg/pages/'.$pageName.'/add', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName,
            'user' => Auth::guard('bigg')->user()
        ]);
    }

    public function bagsh($id)
    {
        $pageTitle = 'Багшийн хуваарь';
        $pageName = 'huvaari';

        $activeMenu = activeMenu($pageName);

        return view('bigg/pages/'.$pageName.'/huvaari', [
            'first_page_name' => $activeMenu['first_page_name'],
            'page_title' => $pageTitle,
            'page_name' => $pageName,
            'user' => Auth::guard('bigg')->user()
        ]);
    }
}
