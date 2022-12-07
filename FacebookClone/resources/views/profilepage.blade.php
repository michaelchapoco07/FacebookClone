@extends('layouts.app')

@section('content')
<div class="">
    <div class="row d-flex">
        <div class="col">
            @include('sidebar-linksprofile')

        </div>
        <div class="col-md-11">
            <div class="card" style="width: 100%;">
                <div class="card-body mt-2" style="height:610px;">
                    <div class="container-fluid d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="https://c4.wallpaperflare.com/wallpaper/232/276/866/tom-and-jerry-tom-and-jerry-wallpaper-preview.jpg" class="img-fluid rounded imgthumbnail" style="width: 1000px; height: 410px;">
                            </div>
                            <div class="col-md-8 profilepicture">
                                <div class="row d-flex">
                                    <div class="col-md-2">
                                        <img src="{{ asset('uploads/avatars/'.$user->avatar) }}" alt="Avatar" class="avatar bg-info rounded-circle mx-1 img-fluid border border-4" style="width: 160px; height: 160px;">
                                    </div>
                                    <div class="col-md-8 d-flex justify-content-between">
                                        <h3 class="mt-5 pt-2 mx-1">{{$user->name}}</h3>
                                    </div>
                                    <div class="d-flex justify-content-start mt-1">
                                        <a href="#" class="btn btn-primary mx-2">Follow</a>
                                        @include ('editprofile')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-5">
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <h4 class="card-title"><strong>Intro</strong></h4>
                                        <p class="card-text mb-1 d-flex justify-content-center">
                                            watch me dance
                                        </p>
                                        <a href="#" class="btn btn-secondary" style="width:100%;">Edit Bio</a>
                                        <ul class="card-text mb-1">
                                            <li class="mt-1">Works at Krusty Krab</li>
                                            <li class="mt-1">Lives at Meycauayan City</li>
                                            <li class="mt-1">Went to St. Mary's Academy of Sto. Nino</li>
                                            <li class="mt-1">Studied Bachelor of Science in Civil Engineering at University of the East Caloocan</li>
                                        </ul>
                                        <a href="#" class="btn btn-secondary" style="width:100%;">Edit Details</a>

                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <h4 class="card-title"><strong>Friends</strong></h4>
                                        <ul class="nav nav-pills nav-fill">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">Followers</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Following</a>
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between">
                                            <div class="col-md-3 m-2">
                                                <div class="card">
                                                    <img src="https://i.pravatar.cc/80?u={{auth()->user()->email}}" class="rounded">
                                                </div>
                                                <h6><small>Michael Chapoco</small></h6>
                                            </div>
                                            <div class="col-md-3 m-2">
                                                <div class="card">
                                                    <img src="https://i.pravatar.cc/80?u={{auth()->user()->email}}" class="rounded">
                                                </div>
                                                <h6><small>Michael Chapoco</small></h6>
                                            </div>
                                            <div class="col-md-3 m-2">
                                                <div class="card">
                                                    <img src="https://i.pravatar.cc/80?u={{auth()->user()->email}}" class="rounded">
                                                </div>
                                                <h6><small>Michael Chapoco</small></h6>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="col-md-3 m-2">
                                                <div class="card">
                                                    <img src="https://i.pravatar.cc/80?u={{auth()->user()->email}}" class="rounded">
                                                </div>
                                                <h6><small>Michael Chapoco</small></h6>
                                            </div>
                                            <div class="col-md-3 m-2">
                                                <div class="card">
                                                    <img src="https://i.pravatar.cc/80?u={{auth()->user()->email}}" class="rounded">
                                                </div>
                                                <h6><small>Michael Chapoco</small></h6>
                                            </div>
                                            <div class="col-md-3 m-2">
                                                <div class="card">
                                                    <img src="https://i.pravatar.cc/80?u={{auth()->user()->email}}" class="rounded">
                                                </div>
                                                <h6><small>Michael Chapoco</small></h6>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="col-md-3 m-2">
                                                <div class="card">
                                                    <img src="https://i.pravatar.cc/80?u={{auth()->user()->email}}" class="rounded">
                                                </div>
                                                <h6><small>Michael Chapoco</small></h6>
                                            </div>
                                            <div class="col-md-3 m-2">
                                                <div class="card">
                                                    <img src="https://i.pravatar.cc/80?u={{auth()->user()->email}}" class="rounded">
                                                </div>
                                                <h6><small>Michael Chapoco</small></h6>
                                            </div>
                                            <div class="col-md-3 m-2">
                                                <div class="card">
                                                    <img src="https://i.pravatar.cc/80?u={{auth()->user()->email}}" class="rounded">
                                                </div>
                                                <h6><small>Michael Chapoco</small></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card my-3">
                                    <div class="card-body">
                                        <h4 class="card-title"><strong>Posts</strong></h4>
                                    </div>
                                </div>
                                @foreach($posts as $post)
                                @include('tweet')
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="col">

        </div>
    </div>
</div>

<div class="modal fade" id="updateModalTweet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form method="POST" action="/profile/update/{{$post->id}}">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Tweet</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection