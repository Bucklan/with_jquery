@section('js')
    <script>
        $(document).ready(function (){
            $(document).on('click','.add_product',function (event){
                event.preventDefault();
                let name = $('#name').val();
                let price = $('#price').val();
                // console.log(name+price);

                $.ajax({

                })
            })
        })
    </script>
@endsection