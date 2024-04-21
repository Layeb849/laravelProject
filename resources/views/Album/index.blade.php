

@extends('photo.app')
@section('content')

<table cellpadding="10">
    <thead>
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item )
        <tr>
            <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <img src="{{ $item->coverImg }}" alt="" width="50">
                </td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
