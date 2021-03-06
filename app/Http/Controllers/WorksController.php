<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = DB::table('works')->orderBy('id', 'desc')->get();

        return view('works.index')->with([
            'data' => $works
       ]);
    }

    public function getWork($id)
    {
        $work = Works::whereId($id)->first();

        $data['title'] = $work->title;
        $data['description'] = $work->description;
        $data['img'] = $work->img;

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = new Works();

        $work->fill($request->all());

        if ($request->hasFile('preview_img')) {
            $filename = uniqid('user', true) . '.' . $request->file('preview_img')->getClientOriginalExtension();
            //$request->file('preview_img')->storeAs('works_img', $filename);
            $request->file('preview_img')->move(public_path("/img"), $filename);
            $work->preview_img = $filename;
        }
        if ($request->hasFile('img')) {
            $filename = uniqid('user', true) . '.' . $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move(public_path("/img"), $filename);
            $work->img = $filename;
        }

        $work->save();

        return redirect()->route('works.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Works::whereId($id)->first();
        return view('works.edit')->with([
           'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $work = Works::whereId($id)->first();
        $work->fill($request->all());

        if ($request->hasFile('preview_img')) {
            $filename = uniqid('user', true) . '.' . $request->file('preview_img')->getClientOriginalExtension();
            //$request->file('preview_img')->storeAs('works_img', $filename);
            $request->file('preview_img')->move(public_path("/img"), $filename);
            $work->preview_img = $filename;
        }
        if ($request->hasFile('img')) {
            $filename2 = uniqid('user', true) . '.' . $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move(public_path("/img"), $filename2);
            $work->img = $filename2;
        }

        $work->save();
        return redirect()->route('works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Works::destroy($id);
        return redirect()->route('works.index');
    }
}
