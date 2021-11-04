@extends('layouts.app');

@section('content')
<div class="container">
    <div class="col-6 m-auto">
        <form action="{{ route('mail.post') }}" method="get">
            <div class="py-2">
                <input type="text" name="name" placeholder="name" class="form-control" placeholder="name">
            </div>
            <div class="py-2">
                <input type="text" name="email"  class="form-control" placeholder="email">
            </div>
            <div class="py-2">
                <input type="input" name="subject" class="form-control" placeholder="subject">
            </div>
            <div>
                <textarea name="message" placeholder="message" class="form-control"></textarea>
            </div>
            <button type="sumit" class="btn btn-primary">submit</button>
        </form>
    </div>
</div>
@endsection