<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardFAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.faq.index', [
            'title' => 'Frequently Asked Questions',
            'faqs' => FAQ::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faqs = FAQ::all();
        return view('admin.dashboard.faq.create', ['faqs' => $faqs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        DB::table('faq')->insert([
            'id' => $request['id'],
            'question' => $request['question'],
            'answer' => $request['answer']

        ]);

        return redirect('/admin/dashboard/faq')->with('success', 'FAQ berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faqs = DB::table('faq')->find($id);
        return view('admin.dashboard.faq.edit', ['faqs' => $faqs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        DB::table('faq')
        ->where('id', $id)
        ->update([
            // 'id' => $request['id'],
            'question' => $request['question'],
            'answer' => $request['answer']
        ]);
        return redirect('/admin/dashboard/faq')->with('success', 'FAQ berhasil diubah.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = FAQ::find($id);

        $faq->delete();

        return redirect('/admin/dashboard/faq')->with('success', 'FAQ berhasil dihapus.');
    }
}
