@extends('layout.master')

@section('content')
<div class="row" style="padding-top: 25px; padding-left:25px;">
    <div class="card mb-4">
        <div class="card-body">
            Hi, {{Auth::user()->nama}}
        </div>
    </div>
</div>
@endsection