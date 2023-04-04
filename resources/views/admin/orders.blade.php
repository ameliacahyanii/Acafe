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
                <div class="col-lg-11 grid-margin stretch-card">
                    <div class="card" style="background-color:white;">
                        <div class="card-body" style="background-color:white">
                            <h4 class="card-title" style="color: black">Reservations Data Table</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="color: black"> Name </th>
                                            <th style="color: black"> Phone </th>
                                            <th style="color: black;"> Address </th>
                                            <th style="color: black"> Food Name </th>
                                            <th style="color: black"> Price </th>
                                            <th style="color: black"> Quantity </th>
                                            <th style="color: black"> Total Price </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)
                                            <tr>
                                                <td style="color: #505050">{{ $data->name }}</td>
                                                <td style="color: #505050">{{ $data->phone }}</td>
                                                <td style="color: #505050;">{{ $data->address }}</td>
                                                <td style="color: #505050">{{ $data->foodname }}</td>
                                                <td style="color: #505050">{{ $data->price }}</td>
                                                <td style="color: #505050">{{ $data->quantity }}</td>
                                                <td style="color: #505050">{{ $data->price * $data->quantity }}</td>
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
