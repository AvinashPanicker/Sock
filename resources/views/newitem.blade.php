@extends('layout')
@section('content')
      <!-- start Contact Us-->

      <div id="plant" class="contact_us layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2 style="text-align: center; margin-top: 45px;">Add <strong style="color: #111315;">Item</strong></h2>
                     <span style="text-align: center;">available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="contact_us_2 layout_padding paddind_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="soc_text">soC</div>
               </div>
               <div class="col-md-6">
                  <div class="email_btn">
                     <form method="POST" action='/shop/add'>
                        @csrf
                        <div class="form-group">
                           @error('name')
                               <h4>{{$message}}</h4>
                           @enderror
                           <input type="text" class="form-control form-control-sm" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                           @error('src')
                               <h4>{{$message}}</h4>
                           @enderror
                           <input  type="text" class="form-control form-control-sm" placeholder="image" name="src">
                        </div>
                        <div class="form-group">
                           @error('price')
                               <h4>{{$message}}</h4>
                           @enderror
                           <input  type="text" class="form-control form-control-sm" placeholder="Price" name="price">
                        </div>
                         <div class="submit_btn">
                            
                            <button type="submit"  class="btn btn-primary" style="background: #081b30;">Add</button>
                         </div>
                      </form>
                  </div>
               </div>
            </div>
            <br><br>
            </div>
         </div>
      </div>

      
    <div id="footer" class="Address layout_padding">
       <div class="container">
          <div class="row">
             <div class="col-sm-12">
               <div class="titlepage">
                  <div class="main">
                     <h1 class="address_text">Address</h1>
                  </div>
               </div>
             </div>
          </div>
               <div class="address_2">
                  <div class="row">
                     <div class="col-sm-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="/images/map-icon.png" /></span>
                          <span style="margin-top: 10px;">No.123 Chalingt Gates, Supper market New York</span></div>
                     </div>
                     <div class="col-sm-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="/images/phone-icon.png" /></span>
                          <span style="margin-top: 21px;">( +71 7986543234 )</span></div>
                     </div>
                     <div class="col-sm-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="/images/email-icon.png" /></span>
                          <span style="margin-top: 21px;">froice@gmail.com</span></div>
                     </div>
                     </div> 
                  </div>
               </div>
                  <div class="menu_main">
                     <div class="menu_text">
                        <ul>
                           <li class="active"><a href="#">Home</a></li>                         
                           <li><a href="about.html">About</a></li>
                           <li><a href="clothes.html">Clothes</a></li>
                           <li><a href="clients.html">Shop</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
       </div>
    </div>

      <!-- end Contact Us-->
@endsection