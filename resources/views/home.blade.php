@extends('layouts.app')

@section('title') Home @endsection <!-- Title of the page using Laravel's extends and section function -->

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat datang di Kwiz ! </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h1>{{ $questions }}</h1> <!-- questions in our database -->
                            Jumlah pertanyaan
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $users }}</h1> <!-- users registered -->
                            Jumlah pengguna
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $quizzes }}</h1> <!-- quizzes taken -->
                            Kuis yang sudah dilakukan
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ number_format($average, 2) }} / 10</h1> <!-- average score -->
                            Nilai rata-rata dari kuis
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('tests.index') }}" class="btn btn-success">Saya ingin mengerjakan kuis !</a>
        </div>
    </div>
@endsection
