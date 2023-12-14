<h1>hlo</h1>

@foreach ($alldata as $item)
{{$item->name}}   

<a href="/deletedata/{{$item->id}}">Delete This</a>
@endforeach