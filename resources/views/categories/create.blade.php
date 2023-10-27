<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <title>
        Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 offset-5">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                Click me!
            </button>

            <!-- Modal -->
            <div class="modal fade"
                 id="exampleModal"
                 tabindex="-1"
                 aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5"
                                id="modal-title"></h1>
                            <button type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <form id="ajaxForm">
                            @csrf
                            <div class="modal-body">
                                <label for="name">Name</label>
                                <input type="text"
                                       id="name"
                                       placeholder="name"
                                       class="form-control">
                                <br>
                                <label for="type">Type</label>
                                <select name=""
                                        id="type"
                                        class="form-control">
                                    <option>
                                        1
                                    </option>
                                    <option>
                                        2
                                    </option>
                                    <option>
                                        3
                                    </option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="button"
                                        class="btn btn-primary"
                                        id="saveBtn"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="list"></div>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers:
                { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });


        $('.modal-title').html('Create Category');
        $('#saveBtn').html('Save Category');
        var form = $('#ajaxForm')[0];
        $(document).on('click','#saveBtn',function (event){
            event.preventDefault();
            var formData = new FormData(form);

            $.ajax({
                url: '{{ route('category.store') }}',
                method: 'POST',
                processData: false,
                contentType: false,
                data: formData,
                success: (response) => {
                    console.log(response)
                },
                error: (error) => {
                    console.log(error)
                }
            })

        });
    })
</script>
</html>