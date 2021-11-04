@extends('layouts.app');

@section('content')
<div class="container">
    <div class="col-6 m-auto">
        <form action="{{ route('student.post') }}" method="post">
            @csrf
            <div class="py-2">
                <input type="text" name="name" placeholder="name" class="form-control">
            </div>
            <div class="py-2">
                <input type="text" name="roll" placeholder="roll" class="form-control">
            </div>
            <div class="py-2">
                <select name="student_classes_id" id="" class="form-control">
                    <option value="">--select--</option>
                    @foreach($class as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="sumit" class="btn btn-primary">submit</button>
        </form>
    </div>
</div>
@endsection