@extends('layouts.app');

@section('content')

    <div class="row">
        <div class="col-6 m-auto">
            <div class="card">
                <div class="card-body">
                    @livewire('product')

                    <a class="big" href="" onClick="funn()">click</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
.big{
    font-size:100px;
}
@endsection
@section('js')
    function funn(){
        alart('asdfasdf');
    }
@endsection