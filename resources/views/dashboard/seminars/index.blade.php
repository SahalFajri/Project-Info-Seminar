@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Seminar-seminar</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <a href="/dashboard/seminars/create" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Tambah Seminar</a>

  <div class="table-responsive">
    <table class="table table-striped table-light table-sm">
      <thead class="table-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul Seminar</th>
          <th scope="col">Tanggal Seminar</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($seminars as $seminar)   
        <tr>
          <td class="text-center">{{ $loop->iteration }}.</td>
          <td>{{ $seminar->title }}</td>
          <td>{{ $seminar->seminar_date->translatedFormat('l, d-F-Y') }}</td>
          <td>
            <a href="/dashboard/seminars/{{ $seminar->slug }}" class="badge fs-6 bg-info" title="Lihat detail seminar"><i class="bi bi-eye"></i></a>
            <a href="/dashboard/seminars/{{ $seminar->slug }}/edit" class="badge fs-6 bg-warning" title="Edit seminar"><i class="bi bi-pencil-square"></i></a>
            <form action="/dashboard/seminars/{{ $seminar->slug }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge fs-6 bg-danger border-0" onclick="return confirm('Yakin ingin menhapus?')" title="Hapus seminar"><i class="bi bi-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="d-flex justify-content-center">
      <div class="shadow">
        {{ $seminars->links() }}
      </div>
    </div>
  </div>

@endsection