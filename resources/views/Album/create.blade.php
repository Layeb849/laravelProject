@extends('photo.app')
@section('content')


<form action="{{ 'album.store' }}" method="post" enctype="multipart/form-data">
    <label for="">Name</label><br>
    <input type="password" name="name"><br><br>
    <label for="">uplode Image</label><br>
    <input type="file" name="coverImg"><br><br>
    <button>submit</button>
</form>


@endsection

