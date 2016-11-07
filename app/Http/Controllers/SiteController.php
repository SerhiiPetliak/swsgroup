<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NewMessage;
use App\User;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = DB::table('works')->orderBy('id', 'desc')->skip(config('portfolio.skip'))->take(config('portfolio.get'))->get();
        return view('site.index')->with([
           'works' => $works
        ]);
    }

    public function sendContact(Request $request)
    {
        $user = User::find(1);
        $data = [];
        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['phone'] = $request->get('phone');
        $user->notify(new NewMessage($data));

        return 1;
    }

}
