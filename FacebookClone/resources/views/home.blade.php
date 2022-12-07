@extends('layouts.app')

@section('content')
<div class="">
    <div class="row d-flex">
        <div class="col">
            @include ('sidebar-links')
        </div>

        <div class="col-md-6">
            @include ('publishtweet')

            @foreach($posts as $post)
            @include('tweet')
            @endforeach
        </div>

        <div class="col">
            @include ('friends-list')
        </div>
    </div>
</div>
@endsection