<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notifishow');
    }

    public function notificationsShow()
    {
        $notifications = Notifications::all();

        $data = [];
        foreach ($notifications as $item) {

            $tmp = json_decode($item->data);

            $data[] = [
                'id'            => $item['attributes']['id'],
                'type'          => $item->type,
                'created_at'    => $item->created_at,
                'read_at'       => $item->read_at,
                'name'          => $tmp->name,
                'email'         => $tmp->email,
                'phone'         => $tmp->phone
            ];
        }

        return view('notifishow')->with([
            'data' => $data
        ]);
    }

    public function events_read(Request $request)
    {
        $thisUser = Auth::user();
        $notifies = $request->request->all();
        if(empty($notifies['notify_id'])){
            return back()->with(['message' => 'Ничего не выбрано']);
        }else{
            $allnotify = $thisUser->Notifications;
            foreach ($allnotify as $item){
                foreach($notifies['notify_id'] as $n){
                    if($item->toArray()['id'] == $n){
                        $item->markAsRead();
                    }
                }
            }
            return back()->with(['message' => 'Ок']);
        }
    }
}
