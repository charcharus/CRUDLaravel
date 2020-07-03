@extends('adminlte.master')

@section('content')

<div class="container">

<h1>Pertanyaan</h1>

<p>{{$pertanyaan->pertanyaan}}</p>

<form action="/pertanyaan">
    <button type="submit">Back to Question List</button>
</form>

<form action='/jawaban/{$pertanyaan_id}' method="post">
{{ csrf_field() }}
<div class="form-group">
<h1>Jawaban List</h1>
    <label for="jawaban">Tulis Jawaban :</label> <br>
    <input type="text" name="jawaban" id=""><br>
    <label for="pertanyaan_id">id pertanyaan :</label> <br>
    <input type="text" name="pertanyaan_id" id="" value={{$pertanyaan->id}}>
    <div class="form-group">
				<input type="submit" class="btn btn-primary" value="Save">
			</div>
</div>


</form>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Jawaban</th>

        </tr>
    </thead>
    <tbody>

    @foreach($jawaban as $jawaban)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{ $jawaban->jawaban}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>



@endsection