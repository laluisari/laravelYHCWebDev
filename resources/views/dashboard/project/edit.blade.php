@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">

        <form action="{{ route('project.update', $project->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"  name="judul" required autofocus value="{{ old('judul', $project->judul) }}">
              @error('judul')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

         <div class="mb-3">
                <label for="prjleader" class="form-label">prjleader</label>
                <input type="text" class="form-control @error('prjleader') is-invalid @enderror" id="prjleader"  name="prjleader" required autofocus value="{{ old('prjleader', $project->prjleader) }}">
              @error('prjleader')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

          <div class="mb-3">
                <label for="start_date" class="form-label">start_date</label>
                <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date"  name="start_date" required autofocus value="{{ old('start_date', $project->start_date) }}">
              @error('start_date')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            
            <div class="mb-3">
                <label for="end_date" class="form-label">end_date</label>
                <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date"  name="end_date" required autofocus value="{{ old('end_date', $project->end_date) }}">
              @error('end_date')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

         <div class="mb-3">
                <label for="nama_klien" class="form-label">nama_klien</label>
                <input type="text" class="form-control @error('nama_klien') is-invalid @enderror" id="nama_klien"  name="nama_klien" required autofocus value="{{ old('nama_klien', $project->nama_klien) }}">
              @error('nama_klien')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="judul" class="form-label">progress</label>
                <input type="text" class="form-control @error('progress') is-invalid @enderror" id="progress"  name="progress" required autofocus value="{{ old('progress', $project->progress) }}">
              @error('progress')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div> 

            <button type="submit" class="btn btn-primary btn-lg">Kirim</button>

        </form>
    </div>
</div>

@endsection