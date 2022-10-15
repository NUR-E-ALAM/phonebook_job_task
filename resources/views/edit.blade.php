<x-app-layout>
    <x-slot name="header">
   <h2>Edit Contact Form</h2>

    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <span class="text-rose-600" id="success-message"></span>

                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                       Edit Contact Form
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div id ="modalbody" class="p-6 space-y-6">
                                    <form id="contactForm" class="space-y-6" action="#" enctype="multipart/form-data">
                                        <div class="w-full flex flex-wrap">
                                            <div class="w-1/2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                                                <input type="name" name="name" id="name" value="{{ $phoneBook->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Name" required>
                                                <span class="alert-danger" id="name-error"></span>
                                            </div>
                                            <div class="w-1/2">

                                                <div class="shrink-0">
                                                    <img class="h-16 w-16 object-cover rounded-full" src="{{\App\Lib\Image::url($phoneBook->photo) }} " alt="Current profile photo" />
                                                </div>
                                                <label class="block">
                                                    <span class="sr-only">Choose profile photo</span>
                                                    <input type="file" accept="image/*" name="photo" id="photo" class="block w-full text-sm text-slate-500
          file:mr-4 file:py-2 file:px-4
          file:rounded-full file:border-0
          file:text-sm file:font-semibold
          file:bg-violet-50 file:text-violet-700
          hover:file:bg-violet-100
        " />
                                                    <span class="alert-danger" id="photo-error"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="w-full flex flex-wrap phone_wrapper">
@foreach($phoneBook->contact_phones as $key => $value)
<div class="w-1/4 ">
    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone</label>
    <input type="phone" name="phone[]" value="{{ $value->phone_no }}" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Phone" required>
    <span class="alert-danger" id="phone-error"></span>
</div>
@endforeach
<div class="w-1/4 ">
    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone</label>
    <input type="phone" name="phone[]" value="" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Phone" required>
    <span class="alert-danger" id="phone-error"></span>
    <button type="button" class="add_more_phone">+</button>
</div>

                                        </div>
                                        <div class="w-full flex flex-wrap email_wrapper">
                                            @foreach($phoneBook->contact_emails as $key => $value)
<div class="w-1/4 ">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
    <input type="email" name="email[]" value="{{ $value->email }}" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Phone" required>
    <span class="alert-danger" id="email-error"></span>
</div>
@endforeach
                                            <div class="w-1/4">
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Email</label>
                                                <input type="email" name="email[]" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email" required>
                                                <span class="alert-danger" id="email-error"></span>
                                                <button type="button" class="add_more_email">+</button>
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="remember" type="checkbox" name="favorite" @if($phoneBook->favorite == 1) checked @endif value={{ $phoneBook->favorite }} class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                                                </div>
                                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Favorite</label>
                                            </div>

                                        </div>

                                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

                                    </form>
                                </div>

                            </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    let x = 1; //Initial field counter is 1
    let y = 1; //Initial field counter is 1

    //Once add button is clicked
    const contentHTML = (selector, z) => {
        return `<div class="w-1/4"><label for=${selector}${z} class="normal-case block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">${selector} ${z}</label><input type="text" name=${selector}[] value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder= ${selector} /><a href="javascript:void(0);" class="remove_button">X</a></div>`
    }

    const addField = (selector, z) => {
        const maxField = 4; //Input fields increment limitation

        // console.log(z)

        if (z <= maxField) {

            const fieldHTML = contentHTML(selector, z)
            $(`.${selector}_wrapper`).append(fieldHTML); //Add field html
        }
    }
    $(document).ready(function() {

        $(".add_more_phone").click(function() {
            //Check maximum number of input fields
            x++; //Increment field counter
            addField("phone", x)

        });

        $(".add_more_email").click(function() {
            //Check maximum number of input fields
            y++; //Increment field counter
            addField("email", y)
        });

        //Once remove button is clicked
        $(".phone_wrapper").on('click', '.remove_button', function(e) {
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
            console.log(x)
        });

        $(".email_wrapper").on('click', '.remove_button', function(e) {
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            y--; //Decrement field counter
        });
    });

</script>

<script type="text/javascript">
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        //console.log($("#cv").val())
        var postData = new FormData(this);

        $.ajax({
            cache: false
            , url: "phonebook/store"
            , headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
            , type: "POST"
            , data: postData
            , processData: false
            , contentType: false
            , success: function(response) {
                console.log(response);
                if (response) {

                    // Response message
                    $('#success-message').removeClass("alert-danger");
                    $('#success-message').addClass("alert-success");
                    $('#success-message').html(response.message);
                    $('#success-message').show();
                    // hide the modal

                    $("#contactForm")[0].reset();
                    const targetEl = document.getElementById('defaultModal');

                    // options with default values

                    const modal = new Modal(targetEl);
                    // hide the modal
                    modal.close();
                    {{--  const backDrop = document.querySelector('[modal-backdrop]');
                    if(backDrop){
                        backDrop.remove();

                    }  --}}

                    {{--  $('#modalbody').empty();  --}}
                }
            }
            , error: function(response) {
                $('#name-error').text(response.responseJSON.errors.name);
                $('#email-error').text(response.responseJSON.errors.email);
                $('#phone-error').text(response.responseJSON.errors.phone);
                $('#photo-error').text(response.responseJSON.errors.photo);
            }
        });
    });

</script>
