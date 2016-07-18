@extends("app")


@section('pagetitle')
	Edit  User
@stop

@section('content')
<!--form method="POST" action="/route(users.index)users"-->
{!! Html::ul($errors->all()) !!}
{!! Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) !!}



    <div class="form-group">
        {!! Form::label('firstname', 'Имя: *')!!}
	{!! Form::text('firstname', Input::old('firstname'), array('class' => 'form-control'))!!}
    </div>
    <div class="form-group">
        {!! Form::label('lastname', 'Фамилия: *')!!}
	{!! Form::text('lastname', Input::old('lastname'), array('class' => 'form-control'))!!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email *')!!}
	{!! Form::text('email', Input::old('email'), array('class' => 'form-control'))!!}
    </div>
    <div class="form-group">
        <input class="btn btn-primary"  type="submit" value="Обновить">
    </div>
    
 {!! Form::close() !!}   
<!--</form>-->
    
@stop