@extends('welcome')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        
    <div class="container">
        <form action="{{route('ajaxcrud.store')}}" method="POST" >
            @csrf
            <input type="text" name="name" id="name">
            <input type="submit" name="submit" id="submit">
        </form>
    
        <div class="showdiv">
    
        </div>
    </div>
       
    <script>

        function ajaxCall()
        {
            $.ajax({
                url:"{{route('ajaxcrud.ajaxcrud')}}",
                method:"GET",
                data:{},
                success:function(response)
                {
                    $(".showdiv").html("");
                    $(".showdiv").html(response);
                }
            });
        }
        ajaxCall();
        $('#submit').on('click',function(e){
            e.preventDefault();
            let name =$('#name').val();
            $.ajax({
                url:"{{route('ajaxcrud.store')}}",
                method:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    'name':name,

                },
                success:function(response)
                {
                    if(response.code==200){
                        $('#name').val('');
                        ajaxCall();
                    }
                }
            });
        }); 
        {
            
        }
    </script>
    </body>
    </html>
@endsection