@extends('layouts.app')

@section('title', 'Home')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Welcome to E-Library</h1>
        <p class="text-center">Your one-stop solution for all your reading needs.</p>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('images/book1.jpg') }}" class="card-img-top" alt="Book 1">
                    <div class="card-body">
                        <h5 class="card-title
@endsection