@extends("app")


@section('pagetitle')
	Create User
@stop

@section('content')
<!--form method="POST" action="/users"-->
{!! Html::ul($errors->all()) !!}
{!! Form::open(array('url' => 'users')) !!}


    <div class="form-group">
        <label for="firstname">Имя: *</label>
        <input class="form-control" placeholder="Имя" name="firstname" type="text" id="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Фамилия: *</label>
        <input class="form-control" placeholder="Фамилия" name="lastname" type="text" id="lastname">
    </div>
    <div class="form-group">
        <label for="email">Email *</label>
        <input class="form-control" placeholder="Email" name="email" type="text" id="email">
    </div>
    <div class="form-group">
        <input class="btn btn-primary"  type="submit" value="Добавить">
    </div>
    
 {!! Form::close() !!}   
<!--</form>-->
    
@stop