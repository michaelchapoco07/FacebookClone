<a class="btn btn-primary mx-2" href="#edit{{$user->id}}" data-bs-toggle="modal" data-bs-target="#edit{{$user->id}}">Edit Profile</a></li>
<!-- Modal for EDIT-->
<div class="modal fade" id="edit{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="/profile/update/{{$user->id}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label class="mb-2 fw-bold">
                        Name:
                    </label>
                    <input type="text" class="mx-1" name="newname" id="newname" value="{{ $user->name }}">
                </div>
                <div class="mb-3">
                    <div class="my-2 d-flex flex-column">
                        <div>
                            Profile Picture:
                        </div>
                        <label for="avatar">
                            <i class="fa-solid fa-image fa-2x mx-1 me-2"></i>

                            <input type="file" name="avatar" id="avatar" style="display:none">
                        </label>
                    </div>
                    <div class="d-flex">
                        <img src="{{ asset('uploads/avatars/'.$user->avatar) }}" alt="" class="avatar bg-info rounded-circle mx-1 img-fluid border border-4" style="width: 160px; height:160px;">
                        <img id="preview-image-before-upload-avatar" class="avatar bg-light rounded-circle mx-1 img-fluid border border-4" style="width: 160px; height:160px;" alt="" src="Error.src" onerror="">
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function(e) {
                            $('#avatar').change(function() {
                                let reader = new FileReader();
                                reader.onload = (e) => {
                                    $('#preview-image-before-upload-avatar').attr('src', e.target.result);
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