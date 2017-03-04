@extends('master')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Simple Ajax CRUD</h1>
		</div>
		<div class="row">
			<table class="table table-striped">
				<tr>
					<th>No.</th>
					<th>Title</th>
					<th>Description</th>
					<th>Actions</th>
				</tr>
				<a href=" {{route('blog.create')}} " class="btn btn-primary pull-left">Create a new entry</a><br/><br/>
				<?php $no = 1; ?>
				@foreach ($blogs as $blog)
					<tr>
						<td> {{ $no++ }} </td>
						<td> {{ $blog->title }} </td>
						<td> {{ $blog->description }} </td>
						<td>
							<form action=" {{route('blog.destroy', $blog->id)}} " method="post">
								<input type="hidden" name="_method" value="delete">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<a href=" {{route('blog.edit', $blog->id)}} " class="btn btn-info">Edit</a>
								<input class="btn btn-danger" onclick="return confirm('are you sure to delete this entry?');" type="submit" name="name" value="delete">
							</form>
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
@endsection