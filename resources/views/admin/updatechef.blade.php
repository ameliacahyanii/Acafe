<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')
</head>

<body style="background-color:white">
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="main-panel" style="background-color:#f0f0f0">
            <div class="content-wrapper" style="background-color:#f0f0f0">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card" style="background-color:white; border:#505050; box-shadow: 100px;">
                        <div class="card-body" style="background-color:white;">
                            <h4 class="card-title" style="color:black;">Update Chef Data</h4>
                            <form action="{{ url('/updatefoodchef', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1" style="color:black;">Chef Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" id="exampleInputName1" placeholder="Enter the name"
                                        style="color: black; background-color: #ffff;">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3" style="color:black;">Speciality</label>
                                    <input type="text" class="form-control @error('speciality') is-invalid @enderror"
                                        name="speciality" id="exampleInputEmail3" placeholder="Enter the speciality"
                                        style="color: black; background-color: #ffff;">
                                    @error('speciality')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="color:black;">Old Image</label>
                                    <img height="200" width="200" src="/chefimage/{{ $data->image }}">
                                </div>
                                <div class="form-group">
                                    <label style="color:black;">New Image</label>
                                    <input type="file" name="image"
                                        class="file-upload-default @error('image') is-invalid @enderror">
                                    <div class="input-group col-xs-12" style="border:#b4b4b4;">
                                        <input type="file" name="image"
                                            class="form-control @error('image') is-invalid @enderror"
                                            placeholder="Upload Image" style="color: black; background-color: #ffff;">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-danger"><a href="{{ url('/viewchef') }}"
                                        style="color: white; text-decoration: none">Cancel</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>
