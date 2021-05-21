<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/bootstrap-tagsinput.js')}}"></script>
    <script src="{{asset('js/bootstrap-tagsinput-angular.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/corejs-typeahead/1.3.1/bloodhound.min.js" integrity="sha512-EvIw6kLsqQVDyosPz7YK2se/aTtTMs4q5LaG69ng7CukLR02uUp1CiyrL1Le/0jY6nqFAvCpjkOUPvIzTqv6UA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $("input:radio").attr("checked", false);
        $(document).ready(function () {

        $('input[type="radio"]').click(function () {
            if ($(this).attr("value") == "no") {
                $("#toShow").hide();
            }
            if ($(this).attr("value") == "yes") {
                $("#toShow").show();

            }
        });

        $('input[type="radio"]').trigger('click');  // trigger the event
        });
    </script>
    <script>
        updateList = function() {
      var input = document.getElementById('imageUpload');
      var output = document.getElementById('fileName');

      output.innerHTML = '<ul>';
      for (var i = 0; i < input.files.length; ++i) {
        output.innerHTML +=input.files.item(i).name;
      }
    }
    </script>
    <style>


.required {
  color: red;
}
    </style>
</head>
<body>
    <div class="flex bg-white items-center justify-center  mt-32 mb-32">
        <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
          <div class="flex justify-center py-4">
            <div class="flex bg-purple-200 rounded-full md:p-4 p-2 border-2 border-purple-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
            </div>
          </div>
      
          <div class="flex justify-center">
            <div class="flex">
              <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Resume Builder</h1>
            </div>
          </div>



          <form method="POST" action="{{action('ResumesController@store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @csrf


            <div class="grid grid-cols-1 mt-5 mx-7">
              <h2 class="uppercase text-1xl text-gray-700 font-bold">Personal information section</h2>
              <hr>
              <br>
              <label  class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Full Name <span class="required">*</span></label>
              <input required   name="name" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ex: Majed Ahmed Alghamdi" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
              <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Birthday <span class="required">*</span></label>
                <input  required  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" min="1970-01-01" name="birth_day" type="date" /></div>
              <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Email Address <span class="required">*</span></label>
                <input required type="email"    name="email" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ex: example@example.com" />
              </div>
            </div>

            <div class="grid grid-cols-1 mt-5 mx-7">
              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tell us about your self <span class="required">*</span></label>
              <textarea required name="bio" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"  type="text" placeholder="Who are you"  ></textarea>
            </div>



          <div class="grid grid-cols-1 mt-5 mx-7">
            <h2 class="uppercase text-1xl text-gray-700 font-bold">Degree section</h2>
            <hr>
            <br>
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Degree <span class="required">*</span></label>
            <input required  name="degree" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ex: Bachelor" />
          </div>
      
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
            <div class="grid grid-cols-1">
              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">University Name <span class="required">*</span></label>
              <input  required name="university" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ex: King Abdulaziz University" />
            </div>
            <div class="grid grid-cols-1">
              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">GPA (out of 5) <span class="required">*</span></label>
              <input  required type="number" step=".01" name="gpa" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ex: 4.50" />
            </div>
          </div>
      
          
      
          <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Graduation Date <span class="required">*</span></label>
            <input required  class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" min="2000-01-01" name="graduation_date" type="date" />
          </div>


        <div class="mt-5 mx-7">
          <h2 class="uppercase text-1xl text-gray-700 font-bold">Experience section</h2>
            <hr>
            <br>
        <label>Do you have previous experience? <span class="required">*</span></label>
        <br>
        <input type="radio" name="hasExperience" value="yes">
        <label for="yes">Yes</label>
        <br>
        <input type="radio" name="hasExperience" value="no">
        <label for="no">No</label>
        </div>



        <div id="toShow" style='display:none'>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">

            <div class="grid grid-cols-1">
              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Company Name</label>
              <input name="exp_company" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ex: BTC Company" />
            </div>

            <div class="grid grid-cols-1">
              <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Position Name</label>
              <input name="exp_name" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ex: IT Technican" />
            </div>

          </div>

          <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Description</label>
            <textarea  name="exp_description" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"  type="text" placeholder="What did you do"></textarea>
          </div>

        </div>


        
        <div class="grid grid-cols-1 mt-5 mx-7">
          <h2 class="uppercase text-1xl text-gray-700 font-bold">Skills section</h2>
            <hr>
            <br>
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Skills <span class="required">*</span></label>
           <small class="text-gray-500">Seperate each skill by comma ( , )</small>
            <input required  data-role="tagsinput"  name="skills" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Seperate by ( , )" />
        </div>

        



        <div class="grid grid-cols-1 mt-5 mx-7">
          <h2 class="uppercase text-1xl text-gray-700 font-bold">Certificates section</h2>
          <hr>
          <br>
          <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Certificate Name</label>
          <input name="certificate_name" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ex: Introduction to Machine Learning" />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
          <div class="grid grid-cols-1">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Issued from:</label>
            <input name="certificate_issuer" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ex: Cisco" />
          </div>
          <div class="grid grid-cols-1">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Issued Date</label>
            <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" min="2000-01-01" name="certificate_date" type="date" />
          </div>
        </div>



        <div class="grid grid-cols-1 mt-5 mx-7">
          <h2 class="uppercase text-1xl text-gray-700 font-bold">Languages section</h2>
          <hr>
          <br>
          <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Native language <span class="required">*</span></label>
          <input required name="native_language" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ex: Arabic" />
        </div>

        <div class="grid grid-cols-1 mt-5 mx-7">
          <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Other language</label>
          <input name="other_language" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Ex: English" />
        </div>


          <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Photo</label>
              <div class='flex items-center justify-center w-full'>
                  <label for="imageUpload" class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-200 hover:border-purple-300 group'>
                      <div class='flex flex-col items-center justify-center pt-7'>
                        <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <p id="fileName" class='lowercase text-sm text-gray-400 group-hover:text-white pt-1 tracking-wider'>Select a photo</p>
                      </div>
                      
                    <input onchange="javascript:updateList()" id="imageUpload"  name="file"  type='file' class="hidden"/>
                  </label>
              </div>
          </div>





      
          <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
            <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Create CV</button>
          </div>

        </form>

      
        </div>
      </div>
</body>
</html>