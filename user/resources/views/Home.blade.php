@extends('Layout.App')

@section('content')
    @include('Components.TopBanner');
    @include('Components.Services');
    @include('Components.Courses');
    @include('Components.Projects');
    @include('Components.ClientFeedback');
    @include('Components.Contact');
@endsection



