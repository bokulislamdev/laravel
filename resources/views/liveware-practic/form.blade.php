@extends('layouts.app');

@section('content')

    <div class="row">
        <div class="col-6 m-auto">
            <div class="card">
                <div class="card-body">
                    @livewire('form')
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection
@section('js')
    window.addEventListener('addformmodel',event =>{
        $('#formmodel').model('show');
    })
@endsection