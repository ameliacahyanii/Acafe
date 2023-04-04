<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <title>Acafe</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/acafe-logo.png" width="150px" style="padding: 10px">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->



    <div id="top" style="padding-bottom: 30px">
        <table align="center" style="background-color: #fff; border-radius: 10px; margin-top: 30px;" width="800px"
            height="140px">
            <tr>
                <th style="padding: 30px; text-align:center">Food Name</th>
                <th style="padding: 30px; text-align:center">Price</th>
                <th style="padding: 30px; text-align:center">Quantity</th>
                <th style="padding: 30px; text-align:center">Action</th>
            </tr>

            <form action="{{ url('orderconfirm') }}" method="POST">
                @csrf
                @foreach ($data as $data)
                    <tr align="center" height="30px" style="padding-bottom: 100px">
                        <td>
                            <input type="text" name="foodname[]" value="{{ $data->title }}" hidden="">
                            {{ $data->title }}
                        </td>
                        <td>
                            <input type="text" name="price[]" value="{{ $data->price }}" hidden="">
                            {{ $data->price }}
                        </td>
                        <td>
                            <input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden="">
                            {{ $data->quantity }}
                        </td>
                        @foreach ($data2 as $data2)
                            <td>
                                <a href="{{ url('/remove', $data2->id) }}" class="btn btn-danger">Remove</a>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
        </table>

        <div align="center" id="order" style="padding: 10px;">
            <button class="btn btn-success" type="button" id="order" style="margin-right: 10px">Order Now</button>
            <a href='/' class="btn btn-secondary">Back</a>
        </div>

        <div id="appear" align="center" style="padding: 10px; display:none;">
            <div style="padding: 10px;">
                <label style="color:white">Name </label>
                <input type="text" name="name" placeholder="Enter your name"
                    style="width:300px; border-radius: 10px; padding: 5px">
            </div>
            <div style="padding: 10px;">
                <label style="color:white">Phone</label>
                <input type="number" name="phone" placeholder="Enter your phone number"
                    style="width:300px; border-radius: 10px; padding: 5px"">
            </div>
            <div style="padding: 10px;">
                <label style="color:white">Address</label>
                <input type="text" name="address" placeholder="Enter your address"
                    style="width:300px; border-radius: 10px; padding: 5px">
            </div>
            <div style="padding: 10px;">
                <input class="btn btn-success" type="submit" value="Order Confirm">
                <button id="close" type="button" class="btn btn-danger" style="margin-left:10px">Close</button>
            </div>
        </div>
        </form>
    </div>

    <script type="text/javascript">
        $("#order").click(
            function() {
                $("#appear").show();
            }
        );

        $("#close").click(
            function() {
                $("#appear").hide();
            }
        );
    </script>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>
