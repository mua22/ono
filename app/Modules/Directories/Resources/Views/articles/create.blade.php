@extends('layouts.admin')
@section('script')
    <script type="text/javascript" src="{{ URL::asset('js/dropdown.js') }}"></script>
@endsection
@section('content')

    @include('directories::articles.form')

@endsection