@extends('template')
@section('title','this is view page')
@section('mainconteiner')
<div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
           			<th>id</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($student as $student)
				<tr>
					<td>{{ $student->id }}</td>
					<td>{{ $student->fname }}</td>
					<td>{{ $student->lname }}</td>
					<td>{{ $student->email }}</td>
					<td>{{ $student->address }}</td>
					<td><a href="{{URL::to('/edit/'.$student->id)}}">Edit</a>/<a onclick="return checkfirst()" href="{{URL::to('/delete/'.$student->id)}}">Delete</a></td>
				</tr>
				@endforeach
        </tbody>
      </table>
    </div>
@endsection