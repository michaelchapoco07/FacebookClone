<div class="card mb-3 my-5 py-2">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card-body">
        <div class="d-flex">
            <h3 class="card-title"><strong>Greetings, {{ auth()->user()->name }}!</strong></h3>
        </div>
        <form method="POST" action="/posts" class="d-flex flex-column" enctype="multipart/form-data">
            @csrf
            <div class="d-flex">
                <img src="https://i.pravatar.cc/40?u={{auth()->user()->email}}" alt="Avatar" class="avatar bg-info rounded-circle m-1" style="width:60px;">
                <textarea name="body" style="width:100%;" class="border border-secondary rounded shadow m-1" placeholder="What's on your mind?"></textarea>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <div class="my-2">
                    <label for="image">
                        <i class="fa-solid fa-image fa-2x mx-1 me-2"></i>
                        <input type="file" name="image" id="image" style="display:none">
                    </label>
                    <i class="fa-solid fa-file fa-2x mx-1 me-2"></i>
                    <i class="fa-solid fa-icons fa-2x mx-1 me-2"></i>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary block">Post</button>
                    <a href="/home" class="btn btn-default">Cancel</a>
                </div>
            </div>
            <div>
                <img id="preview-image-before-upload" class="rounded img-fluid my-3 mx-auto d-block mb-2" alt="" src="Error.src" onerror="">
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(e) {
        $('#image').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>