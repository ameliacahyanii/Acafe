 <!-- ***** Menu Area Starts ***** -->
 <section class="section" id="menu" style="background-color: #F2EFDB;">
     <div class="container">
         <div class="row" style="margin-left: 50px">
             <div class="col-lg-4">
                 <div class="section-heading">
                     <h6>Our Menu</h6>
                     <h2>Our selection of cakes with quality taste</h2>
                 </div>
             </div>
         </div>
     </div>
     <div class="menu-item-carousel">
         <div class="col-lg-12">
             <div class="owl-menu-item owl-carousel">
                 @foreach ($data as $data)
                     <form action="{{ url('/addcart', $data->id) }}" method="post">
                         @csrf
                         <div class="item">
                             <div style="background-image:url('/foodimage/{{ $data->image }}');" class='card'>
                                 <div class="price">
                                     <h6 style="color: #323232">{{ $data->price }}</h6>
                                 </div>
                                 <div class='info'>
                                     <h1 class='title'>{{ $data->title }}</h1>
                                     <p class='description'>{{ $data->description }}</p>
                                     <div class="main-text-button">
                                         <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                     class="fa fa-angle-down"></i></a></div>
                                     </div>
                                 </div>
                             </div>
                             <input type="number" name="quantity" min="1" value="1"
                                 style="width: 80px; color: #3D3737; padding: 6px; border-radius: 5px">
                             <input type="submit" value="Add cart"
                                 style="color: #3D3737; margin-top: 10px; text-align: center; background-color: #FDA47E; padding:7px; border-radius: 5px;">
                         </div>
                     </form>
                 @endforeach
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Menu Area Ends ***** -->
