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
                            <a href="{{ route('tracking.create') }}" class="btn btn-sm btn-outline-primary float-right">Добавить новую запись</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                          <th scope="col">#</th>
                          <th scope="col">Тема</th>
                          <th scope="col">Фио студента</th>
                          <th scope="col">Оценка</th>
                          </tr>
                        @forelse($items as $item)
                        </thead>
                        <tbody>
                          <tr onClick="document.location='{{ route('tracking.edit', $item->id) }}'" style="cursor: pointer;">
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->topic }}</td>
                            <td>{{ $item->full_name_student }}</td>
                            <td>{{ $item->mark }}</td>
                          </tr>
                        </tbody>
                        @empty
                        @endforelse
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
