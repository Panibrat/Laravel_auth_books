@extends("app")


@section('pagetitle')
	Add new Book
@stop

@section('content')


{!! Html::ul($errors->all()) !!}
{!! Form::open(array('url' => 'books')) !!}


    <div class="form-group">
        <label for="title">Title: *</label>
        <input class="form-control" placeholder="Title" name="title" type="text" id="title">
    </div>
    <div class="form-group">
        <label for="author">Author: *</label>
        <input class="form-control" placeholder="Author" name="author" type="text" id="author">
    </div>
    <div class="form-group">
        <label for="year">Year *</label>
        <input class="form-control" placeholder="Year" type="number" name="year" min="1800" max="2100" step="1" id="year">
    </div>
    <div class="form-group">
        <label for="author">Genre: *</label>
        <input class="form-control" placeholder="Genre" name="genre" type="text" id="genre">
    </div>
    <div class="form-group">
        <label for="year">Client_ID *</label>
        <input class="form-control" placeholder="Client_ID" type="number" name="client_id"  id="client_id">
    </div>

    <div class="form-group">
        <input class="btn btn-primary"  type="submit" value="Добавить">
    </div>
    
 {!! Form::close() !!}   
<!--</form>-->
    
@stop