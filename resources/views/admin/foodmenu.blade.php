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
                <div class="col-12 grid-margin stretch-card">
                    <div class="card" style="background-color:white; border:#505050; box-shadow: 100px;">
                        <div class="card-body" style="background-color:white;">
                            <h4 class="card-title" style="color:black;">Add New Food Menu</h4>
                            <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1" style="color:black;">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" id="exampleInputName1" placeholder="Enter the title"
                                        style="color: black; background-color: #ffff;">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3" style="color:black;">Price</label>
                                    <input type="num" class="form-control @error('price') is-invalid @enderror"
                                        name="price" id="exampleInputEmail3" placeholder="Enter the price"
                                        style="color: black; background-color: #ffff;">
                                    @error('price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label style="color:black;">Image</label>
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
                                <div class="form-group">
                                    <label for="exampleTextarea1"
                                        style="color: black; font-size: 18px;">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="exampleTextarea1" rows="4"
                                        name="description" placeholder="Enter the description" style="color: black; background-color: #ffff;"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-danger"><a href="{{ url('/foodmenu') }}"
                                        style="color: white; text-decoration: none">Cancel</a></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card" style="background-color:white; border:#505050; box-shadow: 100px;">
                        <div class="card-body" style="background-color:white">
                            <h4 class="card-title" style="color: black">Data Food Menu Table</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="color: black"> Food Name </th>
                                            <th style="color: black"> price </th>
                                            <th style="color: black"> Image </th>
                                            <th style="color: black"> Description </th>
                                            <th style="color: black"> Action </th>
                                            <th style="color: black"> Action2 </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)
                                            <tr>
                                                <td style="color: black;">{{ $data->title }}</td>
                                                <td style="color: black;">{{ $data->price }}</td>
                                                <td><img height="200" width="200"
                                                        src="/foodimage/{{ $data->image }}"></td>
                                                <td style="color: black;">{{ $data->description }}</td>
                                                <td><a class="btn btn-warning"
                                                        href="{{ url('/updateview', $data->id) }}">Update</a></td>
                                                <td><a class="btn btn-danger"
                                                        href="{{ url('/deletemenu', $data->id) }}">Delete</a></td>
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
