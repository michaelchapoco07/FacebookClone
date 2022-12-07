<div class="card mb-3">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <div class="card-title"><img src="https://i.pravatar.cc/45?u={{$post->user->email}}" alt="" class="rounded-circle mx-2"></div>
                <div class="d-flex flex-column">
                    <div class="card-title m-0 p-0"><strong>{{ $post->user->name }}</strong></div>
                    <p class="card-title m-0 p-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            @include('dropdown-post')
        </div>
        <p class="card-text m-2 p-2">{{ $post->body }}</p>
    </div>
    <div>
        <img src="{{ asset('uploads/images/'.$post->image) }}" alt="" class="img-fluid rounded mx-auto d-block mb-2">
    </div>
</div>