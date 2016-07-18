@extends("app")

@section('pagetitle')
Book Detales

@stop
        
@section('content')
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Title</td>
				<td>Author</td>
				<td>Year</td>
				<td>Genre</td>
				<td>Client_ID</td>
			</tr>
		</thead>
		<tbody>

				<tr>
					<td>{{$book->id}}</td>
					<td>{{$book->title}}</td>
					<td>{{$book->author}}</td>
					<td>{{$book->year}}</td>
					<td>{{$book->genre}}</td>
					<td>{{$book->client_id}}</td>

					<td width="385">
						<a class="btn btn-small btn-success" href="{{ URL::to('books/' . $book->id)}}">Show this Book</a>
                                                <a class="btn btn-small btn-info" href="{{ URL::to('books/' . $book->id . '/edit')}}">Edit this Book</a>
                                                
                                            {!! Form::open(array('url' => 'books/' . $book->id, 'class' => 'pull-right')) !!}
                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            {!! Form::submit('Delete this Book', array('class' => 'btn btn-warning')) !!}
                                            {!! Form::close() !!}  
                                            
                                            
                                            
                                        </td>
				</tr>


		</tbody>


		</table>
	</table>
@stop