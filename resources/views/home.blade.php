<x-app>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            @can('manage-posts')
                <form action="{{ Route('post.store') }}" method="POST">
                    @csrf
                    <div class="card-header">
                        <div class="mb-3">
                            <label for="title" class="form-label">title</label>
                            <input type="text" name="title" class="form-control">
                            @error('title')
                                <small id="helpId" class="text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Category</label>
                                <select class="form-select form-select" name="category_id" id="category_id">
                                    <option selected disabled>Select one</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                <small id="helpId" class="text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">body</label>
                            <textarea class="form-control" name="body" id="body" rows="3"></textarea>
                            @error('body')
                                <small id="helpId" class="text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            @endcan
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $no => $item)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->status == 0 ? 'Unpublish' : 'Publish' }}</td>
                                <td>
                                    @can('manage-posts')
                                        <div class="d-flex gap-4">
                                            @role('admin')
                                            @if ($item->status == 0)
                                                <form action="{{ Route('publish', $item->id) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">Publish</button>
                                                </form>
                                            @elseif ($item->status == 1)
                                                <form action="{{ Route('unpublish', $item->id) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-secondary">Unpublish</button>
                                                </form>
                                            @endif
                                            @endrole


                                            <a class="btn btn-warning" href="{{ Route('post.show', $item->id) }}">Lihat</a>

                                            <form action="{{ Route('post.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('Delete')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    @else
                                        NO AKSES
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app>
