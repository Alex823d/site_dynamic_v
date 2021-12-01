<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CompanyController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function about_us()
    {



        return view('client.pages.company.about_us');
    }


    public function testimonials()
    {


        return view('client.pages.company.testimonials');
    }

    public function legal_docs()
    {


        return view('client.pages.company.legal_docs');
    }

    public function faq()
    {


        return view('client.pages.company.faq');
    }

    public function contact_us()
    {


        return view('client.pages.company.contact_us');
    }
}
