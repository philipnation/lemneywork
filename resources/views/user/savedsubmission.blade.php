@include('layouts.authheader')

<!-- Body -->
<main>
    @include('layouts.user.sidebar')

    <!-- Main content -->
    <div class="flex-grow-1">
        <div class="px-3">
            @foreach($savedItems as $item)
                <div class="d-flex align-items-center justify-content-between bg-lemney-secondary rounded-4 p-3 my-3 fw-semibold">
                    <!-- Date -->
                    <div>
                        <div>{{ $item->created_at->format('d-m-Y') }}</div>
                        <div>{{ class_basename($item) }}</div>
                    </div>

                    <!-- Status -->
                    <div>
                        {{-- <div>98% Completed</div> --}}
                    </div>

                    <!-- Actions -->
                    <div>
                        <button class="btn btn-lemney-primary">
                            <a href="{{ route('user.savedsubmission.upload', $item->id) }}" class="text-white text-decoration-none">Upload <i class="fa fa-share ms-2"></i></a>
                        </button>

                        <!-- Delete button -->
                        <form action="{{ route('user.savedsubmission.delete', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-danger">
                                Delete <i class="fa fa-trash ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@include('layouts.authfooter')
