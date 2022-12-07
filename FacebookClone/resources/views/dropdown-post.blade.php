<div class="dropup-center dropstart">
    <button class="dropdown-toggle foreditanddelete bg-light rounded" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-bars"></i>
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#edit{{$post->id}}" data-bs-toggle="modal" data-bs-target="#edit{{$post->id}}">Edit Post</a></li>
        <li>
            <a class="dropdown-item" href="#delete{{$post->id}}" data-bs-toggle="modal" data-bs-target="#delete{{$post->id}}">Delete Post</a>
        </li>
        <li><a class="dropdown-item" href="#">Archive Post</a></li>
    </ul>
</div>
<!-- Modal for EDIT-->
<div class="modal fade" id="edit{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="/posts/update/{{$post->id}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label class="mb-2 fw-bold">
                        Tweet Content:
                    </label>
                    <input type="text" class="mx-1" name="bodycontent" id="bodycontent" style="width: 100%;" value="{{ $post->body }}">
                </div>
                <div class="mb-3">
                    <div class="my-2 d-flex flex-column">
                        <div>
                            Upload an Image:
                        </div>
                        <label for="imageupload">
                            <i class="fa-solid fa-image fa-2x mx-1 me-2"></i>

                            <input type="file" name="imageupload" id="imageupload" style="display:none">
                        </label>
                    </div>
                    <div class="d-flex">
                        <img src="{{ asset('uploads/images/'.$post->image) }}" alt="" class="rounded img-fluid my-3 mb-2 mx-2">
                        <img id="preview-image-before-upload-sure" class="rounded img-fluid my-3 mb-2" alt="" src="Error.src" onerror="">
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function(e) {
                            $('#imageupload').change(function() {
                                let reader = new FileReader();
                                reader.onload = (e) => {
                                    $('#preview-image-before-upload-sure').attr('src', e.target.result);
                                }
                                reader.readAsDataURL(this.files[0]);
                            });
                        });
                    </script>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- MODAL for DELETE -->

<div class="modal fade" id="delete{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form method="POST" action="/posts/delete/{{$post->id}}">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Tweet</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="post_delete_id" id="post_id">
                    {{$post->id}}
                    <h5>Are you sure you want to delete this Post?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.deleteTweetBtn').click(function(e) {
            e.preventDefault();

            var post_id = $(this).val();
            $('#post_id').val(post_id);
            $('#deleteModalTweet').modal('show');
        });
    });
</script>