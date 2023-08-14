<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<a href="{{route('page.create')}}">Add Record</a>|
<div class="contaIner">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($data as $item)
         <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
          </tr>
        
         @endforeach
        </tbody>
      </table>
      {{ $data->links() }}
</div>