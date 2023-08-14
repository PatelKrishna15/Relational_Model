@extends('welcome')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    
                    {{-- <td>@mdo</td> --}}
                  </tr>
                 
                @endforeach
            </tbody>
          </table>
    </div>
@endsection