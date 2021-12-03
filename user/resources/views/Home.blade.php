@extends('Layout.App')
@section('title','Home')
@section('content')
    @include('Components.TopBanner')
    @include('Components.Services')
    @include('Components.Projects')
    @include('Components.ClientFeedback')
    @include('Components.Contact')

@endsection



