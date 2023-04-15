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
                        <button type="button" class="close" contact-dismiss="alert" aira-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div>
                    <h2 class="text-center fw-bold fs-1 text-warning">Contacts</h2>
                    <form action="{{ url('/add_contact') }}" method="POST" class="text-center py-3">
                        @csrf
                        <input class="text-dark" type="text" name="name" placeholder="Provider Name">
                        <input class="text-dark" type="text" name="number" placeholder="Number">
                        <input class="fs-5 p-2 btn btn-lg btn-warning" type="submit" name="submit" value="Add Number">
                    </form>
                </div>
                <table class="mx-auto w-50 border border-secondary text-center">
                    <tr>
                        <td class="border py-2 fs-4 text-warning fw-bold">Provider Name</td>
                        <td class="border py-2 fs-4 text-warning fw-bold">Number</td>
                        <td class="border py-2 fs-4 text-warning fw-bold">Action</td>
                    </tr>
                    @foreach ($contact as $contact)
                        <tr>
                            <td class="border py-2">{{ $contact->name }}</td>
                            <td class="border py-2">{{ $contact->number }}</td>
                            <td class="border py-2">
                                <a onclick="return confirm(`Are you sure you want to delete {{ $contact->name }} from contacts?`)"
                                    class="btn btn-danger" href="{{ url('delete_contact', $contact->id) }}">Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
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
