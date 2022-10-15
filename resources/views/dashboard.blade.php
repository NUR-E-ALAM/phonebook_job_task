<x-app-layout>
    <x-slot name="header">
        <!-- Modal toggle -->
        <button
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button" id="modalOpen">
            Add Contact
        </button>
        <div class="grid justify-items-center">
            <h2><span class=" text-rose-600" id="success-message"></span></h2>
        </div>

    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">





                    <!-- Main modal -->
                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Add Contact Form
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        id="defaultModalclose">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div id="modalbody" class="p-6 space-y-6">
                                    <form id="contactForm" class="space-y-6" action="#"
                                        enctype="multipart/form-data">
                                        <div class="w-full flex flex-wrap">
                                            <div class="w-1/2">
                                                <label for="name"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                                                <input type="name" name="name" id="name"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="Name" required>
                                                <span class="alert-danger" id="name-error"></span>
                                            </div>
                                            <div class="w-1/2">

                                                <div class="shrink-0">
                                                    <img class="h-16 w-16 object-cover rounded-full img-circle"
                                                        src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/4b1ceee5-9458-4434-80bc-fc5d83a2ea88/de1noau-2dbb58f5-1c72-4b2b-b2a4-6849226fef79.png/v1/fill/w_555,h_589,strp/image_not_yet_uploaded_by_unitedworldmedia_de1noau-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NTg5IiwicGF0aCI6IlwvZlwvNGIxY2VlZTUtOTQ1OC00NDM0LTgwYmMtZmM1ZDgzYTJlYTg4XC9kZTFub2F1LTJkYmI1OGY1LTFjNzItNGIyYi1iMmE0LTY4NDkyMjZmZWY3OS5wbmciLCJ3aWR0aCI6Ijw9NTU1In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.kwNEqDxyj2HBSrPgSatLV5Yafd5CVVfkWmCP6O_z3dY"
                                                        alt="Current profile photo" />
                                                </div>
                                                <label class="block">
                                                    <span class="sr-only">Choose profile photo</span>
                                                    <input type="file" accept="image/*" name="photo"
                                                        class="imgInp block w-full text-sm text-slate-500
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

                                            <div class="w-1/4 ">
                                                <label for="phone"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone</label>
                                                <input type="tel" name="phone[]" id="phone"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="Phone" required>
                                                <span class="alert-danger" id="phone-error"></span>
                                                <button type="button" class="add_more_phone">+</button>
                                            </div>
                                        </div>
                                        <div class="w-full flex flex-wrap email_wrapper">
                                            <div class="w-1/4">
                                                <label for="email"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    Email</label>
                                                <input type="email" name="email[]" id="email"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="Email" required>
                                                <span class="alert-danger" id="email-error"></span>
                                                <button type="button" class="add_more_email">+</button>
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="remember" type="checkbox" name="favorite" value=1
                                                        class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                                                </div>
                                                <label for="remember"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Favorite</label>
                                            </div>

                                        </div>

                                        <button type="submit"
                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div id="editModal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Edit Contact Form
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        id="editModalclose">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div id="editModalbody" class="p-6 space-y-6"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mx-auto shadow-md sm:rounded-lg">
                        <table class="w-full" id="phonebook-table">
                            <thead>
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Photo') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Contact Number') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('Favorite') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script type="text/javascript" src="{{ 'js/datatable.js' }}"></script>
<script type="text/javascript">
    const imgUrl =(data)=>{
        const url = `${window.location.origin}/storage/`
        const imgUrl = data.replace(/public\\/g, url);
        console.log(imgUrl);
        return imgUrl;
    }
    const targetEl = document.getElementById('editModal');
    const modalEdit = new Modal(targetEl);

    $(document).on('click', '#editModalclose', function(e) {
        e.preventDefault();

        modalEdit.hide()
    });

    let abc = '';
    let table = $('#phonebook-table').DataTable({

        serverSide: true,
        processing: true,
        ajax: {
            url: '{{ route('phonebook.index') }}',
            dataSrc(response) {
                abc = response.data;
                response.data.map(function(item) {
                   item.contact_phones = item.contact_phones.map(c => c.phone_no).join(', '),
                        item.contact_emails = item.contact_emails.map(c => c.email).join(', ')

                    return item;

                });

                return response.data;
            }
        },
        columns: [{
                data: 'id'
            },
            {
                data: null,
                render: function(data, type, row) {
                    return data.photo!='image-not.jpg'?`<img style="width:60px" src=${imgUrl(data.photo)}>`:`<img  style="width:60px" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/4b1ceee5-9458-4434-80bc-fc5d83a2ea88/de1noau-2dbb58f5-1c72-4b2b-b2a4-6849226fef79.png/v1/fill/w_555,h_589,strp/image_not_yet_uploaded_by_unitedworldmedia_de1noau-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NTg5IiwicGF0aCI6IlwvZlwvNGIxY2VlZTUtOTQ1OC00NDM0LTgwYmMtZmM1ZDgzYTJlYTg4XC9kZTFub2F1LTJkYmI1OGY1LTFjNzItNGIyYi1iMmE0LTY4NDkyMjZmZWY3OS5wbmciLCJ3aWR0aCI6Ijw9NTU1In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.kwNEqDxyj2HBSrPgSatLV5Yafd5CVVfkWmCP6O_z3dY">`;
                }
            },
            {
                data: 'name'
            },
            {
                data: 'contact_phones'
            },
            {
                data: 'contact_emails'
            },
            {
                data: null, orderable: false, searchable: false,
                render: function(data, type, row) {
                    return data.favorite ?
                        `<button data-favorite=${data.favorite } data-id=${data.id} class="fa fa-heart fav" style="color:red;" aria-hidden="true"></button>` :
                        `<button data-favorite=${data.favorite } data-id=${data.id} class="fa fa-heart fav" aria-hidden="true"></button>`;
                }
            },
            {
                data: null,
                render: function(data, type, row) {
                    return `<button class = "text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 edit_book"  data-id = ${data.id}>Edit</button> | <button class = "text-white bg-rose-600 hover:bg-rose-600 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800 delete_book" data-id = ${data.id}>Delete</button>`;


                }
            },
        ]
    });





    $(document).ready(function() {





        //favorite button click
        $(document).on("click", ".fav", function(e) {
            let fav=  $(this).attr('data-favorite');
            const id=  $(this).attr('data-id');
            confirm("Are You sure want to Update this !");
            {{--  console.log(fav);  --}}

                $.ajax({
                    cache: false,
                    url: `phonebook/favorite/${id}`,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    type: "PUT",
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        {{--  console.log(response);  --}}
                        $('#success-message').removeClass("alert-danger");
                        $('#success-message').addClass("alert-success");
                        $('#success-message').html(response.message);
                        $('#success-message').show();
                        table.ajax.reload();
                    }

                });

        });
        $(document).on("click", ".delete_book", function(e) {
            const id=  $(this).attr('data-id');
            {{--  console.log(id);  --}}
            confirm("Are You sure want to delete !");
                $.ajax({
                    cache: false,
                    url: `phonebook/destroy/${id}`,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    type: "POST",
                    data: {id:id},
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        $('#success-message').removeClass("alert-danger");
                        $('#success-message').addClass("alert-success");
                        $('#success-message').html(response.message);
                        $('#success-message').show();
                        table.ajax.reload();
                    }

                });

        });

//Edit Book Modal Open
        $(document).on("click", ".edit_book", function(e) {
            let html = "";
            const editModal = $('#editModalbody');
            editModal.empty();

            e.preventDefault();
            const id = $(this).attr('data-id');
            const result = abc.find(function(o) {
                return o.id == id;
            });
            const img = imgUrl(result.photo)

            let phone = result.contact_phones.split(',');
            let phoneInputEl = ''
            for (let index = 0; index < phone.length; index++) {
                phoneInputEl += `<div class="w-1/4 ">
                    <label for="phone${index}
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone ${index+1}</label>
        <input type="tel" name="phone[]"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value=${phone[index]}
            placeholder="Phone" required>
            <span class="alert-danger" id="phone-error"></span>
                </div>
            `
            }


            let email = result.contact_emails.split(',');
            let emailInputEl = ''
            for (let index = 0; index < email.length; index++) {
                emailInputEl += `<div class="w-1/4 ">
                    <label for="email${index}
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email ${index+1}</label>
        <input type="email" name="email[]"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value=${email[index]}
            placeholder="Email" required>
            <span class="alert-danger" id="email-error"></span>
                </div>
            `
            }
            const favorite = result.favorite ? 'checked' : '';

            html = `<!-- Main modal -->
                <form id="editContactForm" class="space-y-6" action="#"
                    enctype="multipart/form-data">
                    @csrf
        @method('PUT')
        <input type="hidden" name="id" id="id" value=${result.id} >
                    <div class="w-full flex flex-wrap">
                        <div class="w-1/2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                            <input type="name" name="name" id="name" value=${result.name}
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Name" required>
                            <span class="alert-danger" id="edit-name-error"></span>
                        </div>
                        <div class="w-1/2">

                            <div class="shrink-0">

                            </div>
                            <label class="block">
                                <span class="sr-only">Choose profile photo</span>
                                <input type="file" accept="image/*" name="photo"
                                    class="imgInp block w-full text-sm text-slate-500
file:mr-4 file:py-2 file:px-4
file:rounded-full file:border-0
file:text-sm file:font-semibold
file:bg-violet-50 file:text-violet-700
hover:file:bg-violet-100
" />
                                <span class="alert-danger" id="edit-photo-error"></span>
                            </label>
                            <img class="h-16 w-16 object-cover rounded-full img-circle"
                            src="${img}"
                            alt="Current photo" />
                        </div>
                    </div>
                    <div class="w-full flex flex-wrap phone_wrapper">
${phoneInputEl}
<button type="button" class="add_more_phone">+</button>
                    </div>
                    <div class="w-full flex flex-wrap email_wrapper">
                        ${emailInputEl}
                        <button type="button" class="add_more_email">+</button>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" name="favorite" ${favorite} value=1
                                    class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                            </div>
                            <label for="remember"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Favorite</label>
                        </div>

                    </div>

                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

                </form>
`
            editModal.append(html)
            // set the modal menu element

            modalEdit.show();
        });

    });
</script>



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

        $(document).on("click", ".add_more_phone", function() {
            //Check maximum number of input fields
            x++; //Increment field counter
            addField("phone", x)

        });

        $(document).on("click", ".add_more_email", function() {
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

        $(document).on('click', '.remove_button', function(e) {
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            y--; //Decrement field counter
        });
    });
</script>

<script type="text/javascript">

    $(document).ready(function() {
       // Image onChange Option
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.img-circle').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).on("change", ".imgInp", function(){
            readURL(this);
        });

        const targetEl = document.getElementById('defaultModal');
        const modal = new Modal(targetEl, null);

        $(document).on('click', '#modalOpen', function(e) {
            e.preventDefault();

            modal.show()
        });
        $(document).on('click', '#defaultModalclose', function(e) {
            e.preventDefault();

            modal.hide()
        });
          //add phonebook

        $(document).on('submit', '#contactForm', function(e) {
            e.preventDefault();
            //console.log($("#cv").val())
            var postData = new FormData(this);
{{--  console.log(postData)  --}}
            $.ajax({
                cache: false,
                url: "phonebook/store",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                type: "POST",
                data: postData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    if (response) {
                        // Response message
                        $('#success-message').removeClass("alert-danger");
                        $('#success-message').addClass("alert-success");
                        $('#success-message').html(response.message);
                        $('#success-message').show();
                        // hide the modal
                        $("#contactForm")[0].reset();
                        // hide the modal
                        modal.hide();
                        table.ajax.reload();
                       }
                },
                error: function(response) {
                    $('#name-error').text(response.responseJSON.errors.name);
                    $('#email-error').text(response.responseJSON.errors.email);
                    $('#phone-error').text(response.responseJSON.errors.phone);
                    $('#photo-error').text(response.responseJSON.errors.photo);
                }
            });
        });

        //update phonebook

        $(document).on('submit', '#editContactForm', function(e) {
            e.preventDefault();
            var postData = new FormData(this);

            $.ajax({
                cache: false,
                url: "phonebook/update",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                type: "POST",
                data: postData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    if (response) {
                        // Response message
                        $('#success-message').removeClass("alert-danger");
                        $('#success-message').addClass("alert-success");
                        $('#success-message').html(response.message);
                        $('#success-message').show();
                        // hide the modal
                        modalEdit.hide();
                        table.ajax.reload();
                    }
                },
                error: function(response) {
                    $('#edit-name-error').text(response.responseJSON.errors.name);
                    $('#edit-email-error').text(response.responseJSON.errors.email);
                    $('#edit-phone-error').text(response.responseJSON.errors.phone);
                    $('#edit-photo-error').text(response.responseJSON.errors.photo);
                }
            });
        });
    });
</script>
