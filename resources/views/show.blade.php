<x-app>
    <div class="conteiner mx-4">
        <div class="card">
            <div class="card-header">
                <!-- Modal trigger button -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
                    Edit Post
                </button>

                <!-- Modal Body -->
                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                    role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ Route('post.update', $post->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-header">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">title</label>
                                            <input type="text" name="title" value="{{ $post->title }}"
                                                class="form-control">
                                            @error('title')
                                                <small id="helpId" class="text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="" class="form-label">category</label>
                                                <select class="form-select form-select" name="category_id"
                                                    id="category_id">
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id == $post->category->id ? 'selected' : '' }}>
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('category_id')
                                                <small id="helpId" class="text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="body" class="form-label">status</label> <br>
                                            <input class="form-check-input" type="radio" name="status" value="0"
                                                {{ $post->status == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="status1">
                                                Unpublish
                                            </label>
                                            <input class="form-check-input" type="radio" name="status" value="1"
                                                {{ $post->status == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="status2">
                                                Publish
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="body" class="form-label">body</label>
                                            <textarea class="form-control" name="body" id="body" rows="3">{{ $post->body }}</textarea>
                                            @error('body')
                                                <small id="helpId" class="text-muted">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Optional: Place to the bottom of scripts -->
                <script>
                    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                </script>
            </div>
            <div class="card-body p-5">
                <small>Title :</small>
                <h3 class="fw-bold">{{ $post->title }}</h3>
                <small>Category :</small>
                <p class="text-primary">{{ $post->category->name }}</p>
                <small>Status :</small>
                <h5 class="text-primary"><span
                        class="badge {{ $post->status == 1 ? 'bg-primary' : 'bg-danger' }}">{{ $post->status == 1 ? 'Publish' : 'Unpublish' }}</span>
                </h5>
                <small>Body :</small><br>
                {!! $post->body !!}
            </div>
        </div>
    </div>




</x-app>
