@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Создание записи</div>

                <div class="card-body">
                    <form action="{{ route('tracking.store') }}" method="POST">
                        @csrf
                        @include('form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
