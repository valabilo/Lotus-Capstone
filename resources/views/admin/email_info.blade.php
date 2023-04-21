<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>
<style>
    label {
        display: inline-block;
        width: 200px;
    }
</style>

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
                        <button type="button" class="close" data-dismiss="alert" aira-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="pt-5 ">
                    <h2 class="w-50 mx-auto fw-bold fs-2">Send email to {{ $order->email }}</h2>
                    <hr class="w-50 mx-auto border-warning border border-2">
                    <div class=" mx-auto pt-3 w-50">
                        <form action="{{ url('send_user_email', $order->id) }}" method="POST">
                            @csrf

                            <div class="py-2">
                                <label for="">Email Greeting :</label>
                                <input class="text-dark" type="text" name="greeting" placeholder="greeting">
                            </div>
                            <div class="py-2">
                                <label for="">First Line :</label>
                                <input class="text-dark" type="text" name="firstline" placeholder="first line">
                            </div>
                            <div class="py-2">
                                <label for="">Email Body :</label>
                                <textarea class="text-dark" type="text" name="body" placeholder="message"></textarea>
                            </div>
                            <div class="py-2">
                                <label for="">Email Button Name :</label>
                                <input class="text-warning" type="text" name="button" placeholder="button name">
                            </div>
                            <div class="py-2">
                                <label for="">Email Url :</label>
                                <input class="text-dark" type="text" name="url" placeholder="email url">
                            </div>
                            <div class="py-2">
                                <label for="">Last Line :</label>
                                <input class="text-dark" type="text" name="lastline" placeholder="last line">
                            </div>
                            <div class="py-2">
                                <div>
                                    <input type="submit" value="Send Email"
                                        class="btn bg-success btn-hover w-50 p-2 ms-5 my-3 fs-5">
                                </div>
                            </div>
                        </form>
                    </div>
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
