 //favorite button click
 $(document).on("click", ".fav", function(e) {
    let fav=  $(this).attr('data-favorite');
    const id=  $(this).attr('data-id');
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
