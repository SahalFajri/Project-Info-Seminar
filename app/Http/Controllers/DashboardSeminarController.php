<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardSeminarController extends Controller
{
    public function index()
    {
        return view('dashboard.seminars.index', [
            'seminars' => Seminar::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('dashboard.seminars.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:seminars',
            'seminar_date' => 'required|date',
            'seminar_time' => 'required',
            'link' => 'required',
            'image' => 'required|image|file|max:5120',
            'body' => 'required'
        ]);

        $validatedData['image'] = $request->file('image')->store('seminar-images');


        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        Seminar::create($validatedData);

        return redirect('/dashboard/seminars')->with('success', 'Seminar baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function show(Seminar $seminar)
    {
        return view('dashboard.seminars.show', [
            'seminar' => $seminar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function edit(Seminar $seminar)
    {
        return view('dashboard.seminars.edit', [
            'seminar' => $seminar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seminar $seminar)
    {
        $rules = [
            'title' => 'required|max:255',
            'link' => 'required',
            'image' => 'image|file|max:5120',
            'body' => 'required'
        ];

        if ($request->slug != $seminar->slug) {
            $rules['slug'] = 'required|unique:seminars';
        }

        if ($request->seminar_date != null) {
            $rules['seminar_date'] = 'date';
        }

        if ($request->seminar_time != null) {
            $rules['seminar_time'] = '';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('seminar-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        Seminar::where('id', $seminar->id)
            ->update($validatedData);

        return redirect('/dashboard/seminars')->with('success', 'Seminar telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seminar $seminar)
    {
        if ($seminar->image) {
            Storage::delete($seminar->image);
        }
        Seminar::destroy($seminar->id);

        return redirect('/dashboard/seminars')->with('success', 'Seminar telah dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Seminar::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
