@extends('layouts.app');

@section('content')
<div class="container">
    <div class="col-6 m-auto">

        <div class="row">
            <form action="{{ route('student.import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


        <div class="pt-5 pb-3">
            <a class="btn btn-danger" href="{{ route('student.export') }}">Export Exal</a>
            <a class="btn btn-danger" href="{{ route('student.pdf.export') }}">Export pdf</a>
            <div class="d-flex justify-content-end">
              <form action="#" method="get">
                <input type="text" placeholder="search" name="student_search">
                <button type="submit">Search</button>
              </form>
            </div>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">roll</th>
                <th scope="col">class</th>
              </tr>
            </thead>
            <tbody>
            @foreach($student as $item)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->roll }}</td>
                <td>{{ $item->studentclass->name }}</td>
              </tr>
            @endforeach
            
            </tbody>

          </table>
          {{-- {{ $student->links() }} --}}
          {{ $student->links('pagination.student', ['student' => $student]) }}
    </div>
</div>
@endsection

@section('css')
span svg{
  height:20px;
}
li.page-item {

  display: none;
}

.page-item:first-child,
.page-item:nth-child( 2 ),
.page-item:nth-last-child( 2 ),
.page-item:last-child,
.page-item.active,
.page-item.disabled {

  display: block;
}
@endsection