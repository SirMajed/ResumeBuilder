<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css\app.css')}}">
    <link rel="stylesheet" href="{{asset('css\resume.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function printCV(){
            document.getElementsByClassName("button")[0].style.visibility = "hidden";
            window.print();
            document.getElementsByClassName("button")[0].style.visibility = "";

        }
    </script>
</head>

<body>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>


    <div class="container">
        @if ($resume->path != null)
        <div class="relative w-24 h-24">
            <img class="ring-2 ring-gray-800 w-20 h-20 inline object-cover w-16 h-16 mr-2 rounded-full  border-gray-100 shadow-sm" src="images/{{ $resume->path}}" alt="user image" />
          </div>
        @endif
        
        <div class="header">
            
            <div class="full-name">
                <span class="first-name">{{  $resume->name}}</span>
            </div>
            <div class="contact-info">
                <span class="email">Email: </span>
                <span class="email-val">{{  $resume->email}}</span>
                <span class="separator"></span>
                <span class="phone">Birthday: </span>
                <span class="phone-val">{{  $resume->birth_day}}</span>
            </div>

            <div class="about">
                <span class="desc">
                    {{  $resume->bio}}
                </span>
            </div>
        </div>
        <div class="details">

            @if (  $resume->exp_company != null)
            <div class="section">
                <div class="section__title">Experience</div>
                <div class="section__list">
                    <div class="section__list-item">
                        <div class="left">
                            <div class="name">{{  $resume->exp_company}}</div>
                            <div class="addr">{{  $resume->exp_name}}</div>
                            <div class="duration">{{  $resume->exp_description}}</div>
                        </div>
                    </div>

                </div>
            </div>
            @endif
            


            <div class="section">
                <div class="section__title">Education</div>
                <div class="section__list">
                    <div class="section__list-item">
                        <div class="name">{{  $resume->university}}</div>
                        <div class="text">{{  $resume->degree}} | Graduated at {{  $resume->graduation_date}}</div>
                        <div class="text">GPA: {{  $resume->gpa}}</div>
                    </div>

                    <div class="section__list-item">
                        <div class="section__title">Skills</div>
                        @php
                        // echo str_replace(",", "\r\n",   $resume->skills);
                        $skills = $resume->skills;
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
                        <div class="name">{{  $resume->certificate_name}}</div>
                        <div class="text">{{  $resume->certificate_issuer}} | {{  $resume->certificate_date}}</div>
                    </div>

            <div class="section">
                <div class="section__title">
                    Languages
                </div>
                <div class="section__list">
                    <div class="section__list-item">
                        {{  $resume->native_language}}
                        <span class="separator">|</span>
                        @if (  $resume->other_language != null)
                        {{  $resume->other_language}}
                        @endif
                        

                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>

    <div class="button">
        <button onclick="printCV();" class="btn"><i class="fa fa-download"></i> Download CV</button>
    </div>

</body>

</html>
