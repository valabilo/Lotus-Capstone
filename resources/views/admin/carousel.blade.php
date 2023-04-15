<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div>
                    <h2 class="text-center fw-bold fs-1">Carousel</h2>
                    <form action="{{ url('/add_carousel') }}" method="POST" class="w-25 text-center mx-auto py-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="py-2"><input class="text-dark" type="text" name="carousel"
                                placeholder="Write Carousel Name">
                        </div>
                        <div class="py-2"><input class="text-warning" type="file" name="image"
                                placeholder="product image" required></div>
                        <div class="py-2"><input class="fs-5 p-2 btn btn-lg btn-warning" type="submit" name="submit"
                                value="Add Carousel"></div>
                    </form>
                </div>
                <table class="mx-auto w-50 border border-secondary text-center">
                    <tr>
                        <td class="border py-2 fs-4 text-warning fw-bold">Category Name</td>
                        <td class="border py-2 fs-4 text-warning fw-bold">Image</td>
                        <td class="border py-2 fs-4 text-warning fw-bold">Action</td>
                    </tr>
                    @foreach ($data as $data)
                        @if ($data != null)
                            <tr>
                                <td class="border py-2">{{ $data->name }}</td>
                                <td class="border-1  p-1 text-secondary">
                                    <img width="50px" src="/data/{{ $data->image }}" alt="prod-img">
                                </td>
                                <td class="border py-2"><a
                                        onclick="return confirm(`Are you sure you want to delete {{ $data->name }} carousel?`)"
                                        class="btn btn-danger" href="{{ url('delete_carousel', $data->id) }}">Delete</a>
                                </td>
                            </tr>
                        @else
                            <h2 class="text-light">No Item</h2>
                        @endif
                    @endforeach
                    {{-- @if (count($data) > 0)
                        <h2>No Item</h2>
                    @endif --}}
                </table>
            </div>
        </div <!-- container-scroller -->
        <!-- plugins:js -->
        <!-- endinject -->
        <!-- Plugin js for this page -->
        @include('admin.js')
        <!-- End custom js for this page -->
</body>

</html>
