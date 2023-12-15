@extends('base')

@section('xyz')
   <div style="    padding: 74px;
   padding-left: 15%;
   padding-right: 15%;">
   
    @if ($checkcome == "home")
    <h2 style="text-align: center">MyTodo App</h2>

    <form action="/save" method="POST">
       @csrf
         <div class="mb-3">
           <label for="text" class="form-label">title</label>
           <input type="title" class="form-control" name="title" id="title" aria-describedby="title">
         </div>
         <div class="mb-3">
           <label for="Description" class="form-label">Description</label>
           <textarea type="Description" name="des" class="form-control" id="Description"></textarea>
         </div>
         
         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>
    
    @else

    <h2 style="text-align: center">Update Todo</h2>

    <form action="/updatenow/{{$mytodo->id}}" method="POST">
       @csrf
         <div class="mb-3">
           <label for="text" class="form-label">title</label>
           <input type="title" class="form-control" value="{{$mytodo->Title}}" name="title" id="title" aria-describedby="title">
         </div>
         <div class="mb-3">
           <label for="Description" class="form-label">Description</label>
           <textarea type="Description" name="des" class="form-control" id="Description">{{$mytodo->Decs}}</textarea>
         </div>
         
         <button type="submit" class="btn btn-primary">Update</button>
     </form>
    </div>
        
    @endif


  


   <h1 style="text-align: center">All Todos</h1>

    <div style="padding: 5%">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Todod Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Added Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($myalltodos as $todo)

          <tr>
            <th scope="row">{{$loop->index}}</th>
            <td>{{$todo->Title}}</td>
            <td>{{$todo->Decs}}</td>
            <td>{{$todo->created_at}}</td>
            <td>
              <a href="/showupdate/{{$todo->id}}"><button class="btn btn-primary">Update</button></a>
              <a href="/delete/{{$todo->id}}"><button class="btn btn-danger">Delete</button></a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>

@endsection
