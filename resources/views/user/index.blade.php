@extends("app")

@section('pagetitle')
Users List ({{$count}})
@stop

@section('content')
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->firstname}}</td>
					<td>{{$user->lastname}}</td>
					<td>{{$user->email}}</td>
					<td width="380">
						<a class="btn btn-small btn-success" href="{{ URL::to('users/' . $user->id)}}">Show this User</a>
                                                <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $user->id . '/edit')}}">Edit this User</a>
                                                
                                            {!! Form::open(array('url' => 'users/' . $user->id, 'class' => 'pull-right')) !!}
                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            {!! Form::submit('Delete this User', array('class' => 'btn btn-warning')) !!}
                                            {!! Form::close() !!}  
                                            
                                            
                                            
                                        </td>
				</tr>

			@endforeach
		</tbody>
	</table>
        <div class="text-center">
            {!! $users->render() !!}
        </div>
@stop