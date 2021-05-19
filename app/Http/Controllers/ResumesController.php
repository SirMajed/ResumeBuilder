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
    public function index()
    {
        //
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
        //return $request;
        $native_language = $request->native_language;
        $other_language = $request->other_language;
        $name = $request->name;
        $birth_day = $request->birth_day;
        $email = $request->email;
        $bio = $request->bio;
        $degree = $request->degree;
        $university = $request->university;
        $graduation_date = $request->graduation_date;
        $exp_company = $request->exp_company;
        $exp_name = $request->exp_name;
        $exp_description = $request->exp_description;
        $skills = $request->skills;
        $certificate_name = $request->certificate_name;
        $certificate_issuer = $request->certificate_issuer;
        $certificate_date = $request->certificate_date;
        $gpa = $request->gpa;
        $resume = Resume::firstOrNew();
        $resume->create([
            'name'=>$name,
            'birth_day'=>$birth_day,
            'email'=>$email,
            'bio'=>$bio,
            'degree'=>$degree,
            'university'=>$university,
            'graduation_date'=>$graduation_date,
            'exp_company'=>$exp_company,
            'exp_name'=>$exp_name,
            'exp_description'=>$exp_description,
            'skills'=>$skills,
            'certificate_name'=>$certificate_name,
            'certificate_name'=>$certificate_name,
            'certificate_issuer'=>$certificate_issuer,
            'certificate_date'=>$certificate_date,
            'native_language'=>$native_language,
            'other_language'=>$other_language,
            'gpa'=>$gpa,
        ]);

        return view('resume', compact(['request']));
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
