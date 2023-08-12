<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>
    <div class="container">
        <h1>Ajax Form Validation</h1>
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>

        <form>
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="first-name" class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="First Name">
            </div>
            <div class="mb-3">
                <label for="last-name" class="form-label">last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Address">
            </div>
            <button type="submit" class="btn btn-primary btn-submit">Submit</button>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.btn-submit').click(function(e){
                e.preventDefault()
                var _token = $("input[name='_token']").val();
                var first_name = $("input[name='first_name']").val();
                var last_name = $("input[name='last_name']").val();
                var email = $("input[name='email']").val();
                var address = $("textarea[name='address']").val();

                $.ajax({
                    url: "{{ route('my.form') }}",
                    type:'POST',
                    data: {_token:_token, first_name:first_name, last_name:last_name, email:email, address:address},
                    success: function(data) {
                        if($.isEmptyObject(data.error)){
                            alert(data.success);
                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                });
            });

            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
            }
        });
    </script>
</body>
</html>
