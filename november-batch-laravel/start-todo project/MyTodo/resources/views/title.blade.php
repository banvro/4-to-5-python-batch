@extends('base')

@section('xyz')
   <div style="    padding: 74px;
   padding-left: 15%;
   padding-right: 15%;">
   <h2 style="text-align: center">MyTodo App</h2>
    <form>
        <div class="mb-3">
          <label for="text" class="form-label">Title</label>
          <input type="title" class="form-control" id="title" aria-describedby="title">
        </div>
        <div class="mb-3">
          <label for="Description" class="form-label">Description</label>
          <textarea type="Description" class="form-control" id="Description"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>

@endsection
