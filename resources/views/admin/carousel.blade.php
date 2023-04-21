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
                    <form action="{{ url('/add_carousel') }}" method="POST" class="w-25 mx-auto py-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="py-2"><input class="text-dark" type="text" name="carousel"
                                placeholder="Write Carousel Name">
                        </div>
                        <div class="py-2 w-100"><input class="text-warning" type="file" name="image"
                                placeholder="product image" required></div>
                        <div class="py-2 mx-auto w-50"><input class="fs-5 p-2 btn btn-lg btn-warning text-center"
                                type="submit" name="submit" value="Add Carousel"></div>
                    </form>
                </div>
                <table class="table table-bordered table-dark table-hover w-50 mx-auto my-3">
                    <thead>
                        <tr>
                            <th class="text-warning " scope="col">Category Name</th>
                            <th class="text-warning " scope="col">Image</th>
                            <th class="text-warning " scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <img width="100px" src="{{ asset('public/data/') . '/' . $data->image }}"
                                            alt="prod-img">
                                    </div>

                                </td>
                                <td>
                                    <a onclick="return confirm(`Are you sure you want to delete {{ $data->name }} carousel?`)"
                                        class="btn btn-danger" href="{{ url('delete_carousel', $data->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    {{-- @if (count($data) > 0)
                        <h2>No Item</h2>
                    @endif --}}
                </table>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.js')
    <!-- End custom js for this page -->
</body>

</html>
