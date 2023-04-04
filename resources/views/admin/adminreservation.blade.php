<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body style="background-color:white">
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="main-panel" style="background-color:#f0f0f0">
            <div class="content-wrapper" style="background-color:#f0f0f0">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card" style="background-color:white;">
                        <div class="card-body" style="background-color:white">
                            <h4 class="card-title" style="color: black">Reservations Data Table</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="color: black"> Name </th>
                                            <th style="color: black"> Email </th>
                                            <th style="color: black"> Phone </th>
                                            <th style="color: black"> Date </th>
                                            <th style="color: black"> Time </th>
                                            <th style="color: black"> Message </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)
                                            <tr>
                                                <td style="color: #505050">{{ $data->name }}</td>
                                                <td style="color: #505050">{{ $data->email }}</td>
                                                <td style="color: #505050">{{ $data->phone }}</td>
                                                <td style="color: #505050">{{ $data->date }}</td>
                                                <td style="color: #505050">{{ $data->time }}</td>
                                                <td style="color: #505050">{{ $data->message }}</td>
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
