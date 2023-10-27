    <script>
        $(document).ready(function () {
            $(document).on('click', '.add_product', function (event) {
                event.preventDefault();
                let name = $('#name').val();
                let price = $('#price').val();
                // console.log(name+price);

                $.ajax({
                    url: "{{route('products.store')}}",
                    method: 'post',
                    data: {
                        name: name,
                        price: price,
                    },
                    success: function (response) {
                        if (response.status === 'success') {
                            $('#AddModal').modal('hide');
                            $('#addProductForm')[0].reset();
                            $('.table-bordered').load(location.href+'.table-bordered');
                        }
                    },
                    error: function (err) {
                        let error = err.responseJSON;
                        $.each(error.errors, function (index, value) {
                            $('.errorMessages').append(
                                '<span class="text-danger">' + value + '</span><br>'
                            )
                        })
                    }
                })
            })
        })
    </script>
