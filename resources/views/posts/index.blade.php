<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Post Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                Ajax Post Request
            </div>
            <div class="card-body">
                <table class="table table-bordered mt-3">
                    <tr>
                        <th colspan="4">
                            List Of Posts
                            <button type="button" class="btn btn-success float-end" data-bs-toggle="modal"
                                data-bs-target="#postModal">
                                Create Post
                            </button>
                        </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td>
                                <a href="javascript:void(0)"
                                    id="show-post"
                                    data-url="{{ route('posts.show', $post->id) }}"
                                    class="btn btn-info"
                                    >Show</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!--Create Modal -->
    <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="postForm">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Name">
                            <span class="text-danger">
                                <strong id="title-error"></strong>
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Body:</label>
                            <textarea name="body" class="form-control" id="body"></textarea>
                            <span class="text-danger">
                                <strong id="body-error"></strong>
                            </span>
                        </div>
                        <div class="mb-3 text-center">
                            <button class="btn btn-success btn-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="postShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Show Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>ID:</strong> <span id="post-id"></span></p>
                <p><strong>Title:</strong> <span id="post-name"></span></p>
                <p><strong>Body:</strong> <span id="post-email"></span></p>
            </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.btn-submit').click(function(e) {
            e.preventDefault();
            var registerForm = $("#postForm");
            var formData = registerForm.serialize();
            $('#title-error').html("");
            $('#body-error').html("");

            $.ajax({
                type: 'POST',
                url: "{{ route('posts.store') }}",
                data: formData,
                success: function(data) {
                    if(data.errors) {
                        if(data.errors.title){
                            $( '#title-error' ).html( data.errors.title[0] );
                        }
                        if(data.errors.body){
                            $( '#body-error' ).html( data.errors.body[0] );
                        }
                    }
                    if(data.success) {
                        $('#postModal').modal('hide');
                        alert(data.success);
                        location.reload();
                    }
                }
            });
        });
        $('body').on('click','#show-post', function(){
            var userURL = $(this).data('url');
            $.get(userURL, function(data){
                $('#postShowModal').modal('show');
                $('#post-id').text(data.id);
                $('#post-name').text(data.title);
                $('#post-email').text(data.body);
            })
        })

    </script>
</body>

</html>
