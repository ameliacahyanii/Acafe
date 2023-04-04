<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body style="background-color: #fff">
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card"
                style="border:#505050; box-shadow: 100px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                <div class="card-body" style="background-color:#f0f0f0">
                    <h1 class="card-title"
                        style="color: black; background-color:#f3f3f3; text-align:center; width:935px; border-radius:5px; padding: 20px">
                        Welcome To Admin Panel</h1>
                </div>
            </div>
        </div>
    </div>

    @include('admin.adminscript')
</body>

</html>
