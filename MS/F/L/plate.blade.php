@extends('root')

@section('title')
	@stack('title')
@endsection

@section('content')
@include('F.L.header')
	@stack('content')
@include('F.L.footer')
@endsection

@section('js')
	@stack('js')
@endsection

@section('breadcrumb')
	@stack('breadcrumb')
@endsection
