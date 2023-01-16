@extends('dashboard.layouts.main')
@section('container')

@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
 @endif


@if ($projects->count())

<div class="container">
  <a href="{{ route('project.create') }}"><button class="btn btn-primary my-3">Tambah Data</button></a>
  <div class="row my-3">
    <h3>Project Monitoring</h3>
      <table class="table table-striped table-sm my-3 mx-3">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Project Name</th>
            <th scope="col">Project Leader</th>
            <th scope="col">Client</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Progress</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($projects as $project)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $project->judul }} </td>
            <td>{{ $project->prjleader }} </td>
            <td>{{ $project->nama_klien }} </td>
            <td>{{ $project->start_date }} </td>
            <td>{{ $project->end_date }} </td>
            <td><div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="{{ $project->progress}}" aria-valuemin="0" aria-valuemax="100">{{ $project->progress }}%</div>
            </div>
             </td>
            <td class="text-center mx-2"> 
              <a href="{{ route('project.edit', $project->id) }}" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
              <form action="{{ route('project.destroy', $project->id) }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit"  class="badge bg-danger border-0" ><span data-feather="trash-2" class="align-text-bottom"></span></button>
              </form>
            </td>
          </tr>
      
          @endforeach
        </tbody>
      </table>

    <center class="my-3">  
      {{ $projects->links() }}
    </center>

  </div>
</div>

@else
<p class="mt-3">post not found</p>
<a href="{{ route('project.create') }}"><button class="btn btn-primary my-3">Tambah Data</button></a>
@endif


@endsection