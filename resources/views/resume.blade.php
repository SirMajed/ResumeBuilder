<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/resume.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

    <div class="container">
        <div class="header">
            <div class="full-name">
                <span class="first-name">{{$request->name}}</span>
            </div>
            <div class="contact-info">
                <span class="email">Email: </span>
                <span class="email-val">{{$request->email}}</span>
                <span class="separator"></span>
                <span class="phone">Birthday: </span>
                <span class="phone-val">{{$request->birth_day}}</span>
            </div>

            <div class="about">
                <span class="desc">
                    {{$request->bio}}
                </span>
            </div>
        </div>
        <div class="details">
            <div class="section">
                <div class="section__title">Experience</div>
                <div class="section__list">
                    <div class="section__list-item">
                        <div class="left">
                            <div class="name">{{$request->exp_company}}</div>
                            <div class="addr">{{$request->exp_name}}</div>
                            <div class="duration">{{$request->exp_description}}</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="section">
                <div class="section__title">Education</div>
                <div class="section__list">
                    <div class="section__list-item">
                        <div class="name">{{$request->university}}</div>
                        <div class="text">{{$request->degree}} | Graduated at {{$request->graduation_date}}</div>
                        <div class="text">GPA: {{$request->gpa}}</div>
                    </div>

                    <div class="section__list-item">
                        <div class="section__title">Skills</div>
                        @php
                        // echo str_replace(",", "\r\n", $request->skills);
                        $skills = $request->skills;
                        $arr = explode(",", $skills);
                        @endphp





                        <ul>
                            @foreach ($arr as $skill)
                            <p class="name"z>{{$skill}}</p>
                            @endforeach
                        </ul>
                    </div>
                </div>



                

            </div>


            <div class="section__title">Certificates</div>
                <div class="section__list">
                        
                    
                    <div class="section__list-item">
                        <div class="name">{{$request->certificate_name}}</div>
                        <div class="text">{{$request->certificate_issuer}} | {{$request->certificate_date}}</div>
                    </div>



            <div class="section">
                <div class="section__title">
                    Languages
                </div>
                <div class="section__list">
                    <div class="section__list-item">
                        {{$request->native_language}}
                        <span class="separator">|</span>
                        {{$request->other_language}}

                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>

    <div class="button">
        <button onclick="window.print();" class="btn"><i class="fa fa-download"></i> Download CV</button>
    </div>

</body>

</html>
