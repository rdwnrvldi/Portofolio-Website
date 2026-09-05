@extends('layouts.app')

@section('title', 'Home')

@section('content')
@include('sections.home')
@include('sections.about')
@include('sections.skills')
@include('sections.projects')
@include('sections.experience')
@include('sections.contact')
@endsection