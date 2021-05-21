<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use Barryvdh\DomPDF\Facade as PDF;
class ResumesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
        // $idd=1;
        // $resume = Resume::findOrFail($idd);
        return view('resume', compact(['request']));
    }
    public function indexx($resume)
    {
        // return $resume;
        return view('resume', compact(['resume']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resume = new Resume();

        $resume->native_language = $request->native_language;
        $resume->other_language = $request->other_language;
        $resume->name = $request->name;
        $resume->birth_day = $request->birth_day;
        $resume->email = $request->email;
        $resume->bio = $request->bio;
        $resume->degree = $request->degree;
        $resume->university = $request->university;
        $resume->graduation_date = $request->graduation_date;
        $resume->exp_company = $request->exp_company;
        $resume->exp_name = $request->exp_name;
        $resume->exp_description = $request->exp_description;
        $resume->skills = $request->skills;
        $resume->certificate_name = $request->certificate_name;
        $resume->certificate_issuer = $request->certificate_issuer;
        $resume->certificate_date = $request->certificate_date;
        $resume->gpa = $request->gpa;

        $input = $request->all();
        if ($file = $request->file('file')) {
            $fname = $file->getClientOriginalName();
            $file->move('images',$fname); // first param is where to move the file, sec is the name of the file
            $input['path'] = $fname;
            $resume->path = $fname;
        }
        //  return $resume;
        $resume->save();

        
        

        // $resume->create([
        //     'name'=>$name,
        //     'birth_day'=>$birth_day,
        //     'email'=>$email,
        //     'bio'=>$bio,
        //     'degree'=>$degree,
        //     'university'=>$university,
        //     'graduation_date'=>$graduation_date,
        //     'exp_company'=>$exp_company,
        //     'exp_name'=>$exp_name,
        //     'exp_description'=>$exp_description,
        //     'skills'=>$skills,
        //     'certificate_name'=>$certificate_name,
        //     'certificate_name'=>$certificate_name,
        //     'certificate_issuer'=>$certificate_issuer,
        //     'certificate_date'=>$certificate_date,
        //     'native_language'=>$native_language,
        //     'other_language'=>$other_language,
        //     'gpa'=>$gpa,
        //     'path'=>$fName,
        // ]);


        return $this->indexx($resume);
        // return redirect('/CV',compact(['request']));

        // return redirect('/CV',compact(['resume']));
        // return view('resume', compact(['request']));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function pdf(){
        $pdf = PDF::loadView('resume');
        return $pdf->download('resume.pdf');
        

    }
}
