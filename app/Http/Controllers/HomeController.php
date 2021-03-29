<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Lead;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('guest.home');
    }

    public function contatti()
    {
        return view('guest.contatti');
    }

    public function contattiSent(Request $request)
    {
        $data = $request->all();
        $newLead = new Lead();
        $newLead->fill($data);
        $newLead->save();
        Mail::to('info@boolpress.com')->send(new SendNewMail($newLead));

        return redirect()->route('guest.contatti.inviato')->with('status', 'ok');
    }

    public function contattiInviato()
    {
        return view('guest.inviato');
    }
}
