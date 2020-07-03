@extends('adminlte.master')

@section('content')
<div class="main">
		<div class="main-content">
			<div class="container-fluid">
<h1>Put on Your Question</h1>

<form action="/pertanyaan">
    <button type="submit">Back to Question List</button>
</form>

<form action='/pertanyaan' method="post">
{{ csrf_field() }}

    <label for="pertanyaan">Question :</label> <br>
    <input type="text" name="pertanyaan" id=""><br>


    <br><br>

    <div class="form-group">
				<input type="submit" class="btn btn-primary" value="Save">
			</div>


</form>
        </div>
		</div>
	</div>
@endsection