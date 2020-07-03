@extends('adminlte.master')

@section('content')
<div class="main">
		<div class="main-content">
			<div class="container-fluid">
<h1>Put on Your Question</h1>

<form action="/pertanyaan">
    <button type="submit">Back to Question List</button>
</form>

<form action='/pertanyaan/{{$pertanyaan->id}}/update' method="post">
{{ csrf_field() }}

    <label for="pertanyaan">Question :</label> <br>
    <input type="text" class="form-control" name="pertanyaan" value="{{$pertanyaan->pertanyaan}}"<br>


    <br>

    <button type="submit" class="btn btn-warning">Update</button>


</form>
        </div>
		</div>
	</div>
@endsection