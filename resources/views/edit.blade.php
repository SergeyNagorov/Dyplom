@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Редактирование записи</div>
                        <div class="col">
                            <form action="{{ route('tracking.destroy', $item->id) }}" method="POST" class="float-right">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('tracking.update', $item->id) }}" method="POST">
                        @csrf
                        @method('put')
                        @include('form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

