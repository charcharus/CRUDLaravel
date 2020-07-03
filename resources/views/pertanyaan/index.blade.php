@extends('adminlte.master')

@section('content')

<div class="main">
		<div class="main-content">
			<div class="container-fluid">
            

<form action="/pertanyaan/create">
{{ csrf_field() }}
<h1>Question List</h1>
    <button type="submit">Type your question</button>
    <br>
    <br>


<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Pertanyaan</th>
            <th scope="col">Action</th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        @foreach($pertanyaan as $pertanyaan)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$pertanyaan->pertanyaan}}</td>
            <td><a href="/jawaban/{{$pertanyaan_id = $pertanyaan->id}}">Jawab</a></td>
            <td><a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-warning btn-xs">Edit</a></td>
            <td><a href="/pertanyaan/{{$pertanyaan->id}}/delete" class="btn btn-danger btn-xs delete" pertanyaan-id="{{$pertanyaan->id}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</form>
			</div>
		</div>
	</div>




@endsection