<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>

<body style="background-color:white">
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="main-panel" style="background-color:#f0f0f0">
            <div class="content-wrapper" style="background-color:#f0f0f0">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card" style="background-color:white;">
                        <div class="card-body" style="background-color:white">
                            <h4 class="card-title" style="color: black">Data Users Table</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="color: black"> Name </th>
                                            <th style="color: black"> Email </th>
                                            <th style="color: black"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)
                                            <tr>
                                                <td style="color: #505050">{{ $data->name }}</td>
                                                <td style="color: #505050">{{ $data->email }}</td>
                                                @if ($data->usertype == '0')
                                                    <td><a class="btn btn-danger"
                                                            href="{{ url('/deleteuser', $data->id) }}">Delete</a></td>
                                                @else
                                                    <td style="color: #505050"><a>Not Allowed</a></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>
