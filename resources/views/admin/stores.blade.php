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
                    <h2 class="text-center fw-bold fs-1 text-warning">Stores</h2>
                    <form action="{{ url('/add_store') }}" method="POST" class="w-50 mx-auto py-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="py-2">
                            <label for="">Store Name :</label>
                            <input class="text-dark" type="text" name="name" placeholder="Write Store Name"
                                required>
                        </div>
                        <div class="py-2">
                            <label for="">Store Status :</label>
                            <input class="text-dark w-25" min="0" max="1" type="number"
                                name="description" placeholder="Status" required>
                        </div>
                        <div class="py-2 w-100">
                            <label for="">Store Image :</label>
                            <input class="text-warning" type="file" name="image" placeholder="product image"
                                required>
                        </div>
                        <div class="py-2 mx-auto w-50"><input class="fs-5 p-2 btn btn-lg btn-warning text-center"
                                type="submit" name="submit" value="Add Store"></div>
                    </form>
                </div>
                <table class="mx-auto w-50 border border-secondary text-center">
                    <tr>
                        <td class="border py-2 fs-4 text-warning fw-bold">Category Name</td>
                        <td class="border py-2 fs-4 text-warning fw-bold">Image</td>
                        <td class="border py-2 fs-4 text-warning fw-bold">Action</td>
                    </tr>
                    @foreach ($store as $store)
                        @if ($store != null)
                            <tr>
                                <td class="border py-2">{{ $store->store_name }}</td>
                                <td class="border justify-content-center py-1 pe-1 ps-5 text-secondary">
                                    <img width="50px" src="/store/{{ $store->store_link }}"
                                        alt="{{ $store->store_name }}">
                                </td>
                                <td class="border py-2">
                                    <a onclick="return confirm(`Are you sure you want to delete {{ $store->store_name }} carousel?`)"
                                        class="btn btn-danger" href="{{ url('delete_store', $store->id) }}">Delete</a>
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
