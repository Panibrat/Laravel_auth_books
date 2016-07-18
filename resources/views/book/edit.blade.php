@extends("app")


@section('pagetitle')
	Edit  Book
@stop

@section('content')

{!! Html::ul($errors->all()) !!}
{!! Form::model($book, array('route' => array('books.update', $book->id), 'method' => 'PUT')) !!}



    <div class="form-group">
        {!! Form::label('title', 'Title: *')!!}
	{!! Form::text('title', Input::old('title'), array('class' => 'form-control'))!!}
        
    </div>
    <div class="form-group">
        {!! Form::label('author', 'Author: *')!!}
	{!! Form::text('author', Input::old('author'), array('class' => 'form-control'))!!}        
    </div>
    <div class="form-group">
        {!! Form::label('year', 'Year: *')!!}
	{!! Form::text('year', Input::old('year'), array('class' => 'form-control'))!!}  
    </div>
    <div class="form-group">
        {!! Form::label('genre', 'Genre: *')!!}
	{!! Form::text('genre', Input::old('genre'), array('class' => 'form-control'))!!}  
    </div>
    <div class="form-group">
        <label for="year">Client_ID *</label>
        <input class="form-control" placeholder="Client_ID" type="number" name="client_id"  id="client_id" value=null>
    </div>

    <div class="form-group">
        <input class="btn btn-primary"  type="submit" value="Изменить">
    </div>
    
 {!! Form::close() !!}   
<!--</form>-->
    
@stop