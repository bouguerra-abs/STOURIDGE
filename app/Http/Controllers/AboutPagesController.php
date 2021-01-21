<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\About;

class AboutPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $abouts = About::all();

        return view('pages.abouts.list', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
            'name' => 'required|string',
            'profile' => 'required|string',
            'email' => 'required|email',
            'phone' => 'numeric|required',
            'skill1' => 'required|string',
            'skill2' => 'required|string',
            'skill3' => 'required|string',
            'skill4' => 'required|string',
            'skill5' => 'required|string',
            'skill6' => 'required|string',
            'skill7' => 'required|string',
        ]);

        $abouts = new About;
        $abouts->title = $request->title;
        $abouts->description = $request->description;
        $abouts->name = $request->name;
        $abouts->profile = $request->profile;
        $abouts->email = $request->email;
        $abouts->phone = $request->phone;
        $abouts->skill1 = $request->skill1;
        $abouts->skill2 = $request->skill2;
        $abouts->skill3 = $request->skill3;
        $abouts->skill4 = $request->skill4;
        $abouts->skill5 = $request->skill5;
        $abouts->skill6 = $request->skill6;
        $abouts->skill7 = $request->skill7;

        $image_file = $request->file('image');
        Storage::putFile('public/img/', $image_file);
        $abouts->image = "storage/img/".$image_file->hashName();

        $abouts->save();

        return redirect()->route('admin.abouts.create')->with('success', 'New About Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $about = About::find($id);
        return view('pages.abouts.edit', compact('about'));
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
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
            'name' => 'required|string',
            'profile' => 'required|string',
            'email' => 'required|email',
            'phone' => 'numeric|required',
            'skill1' => 'required|string',
            'skill2' => 'required|string',
            'skill3' => 'required|string',
            'skill4' => 'required|string',
            'skill5' => 'required|string',
            'skill6' => 'required|string',
            'skill7' => 'required|string',
        ]);

        $abouts = About::find($id);
        $abouts->title = $request->title;
        $abouts->description = $request->description;
        $abouts->name = $request->name;
        $abouts->profile = $request->profile;
        $abouts->email = $request->email;
        $abouts->phone = $request->phone;
        $abouts->skill1 = $request->skill1;
        $abouts->skill2 = $request->skill2;
        $abouts->skill3 = $request->skill3;
        $abouts->skill4 = $request->skill4;
        $abouts->skill5 = $request->skill5;
        $abouts->skill6 = $request->skill6;
        $abouts->skill7 = $request->skill7;

        if($request->file('image')) {
            $image_file = $request->file('image');
            Storage::putFile('public/img/', $image_file);
            $abouts->image = "storage/img/".$image_file->hashName();
        }

        $abouts->save();

        return redirect()->route('admin.abouts.list')->with('success', 'About Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        @unlink(public_path($about->image));
        $about->delete();

        return redirect()->route('admin.abouts.list')->with('success', 'About Deleted Successfully');
    }
}
