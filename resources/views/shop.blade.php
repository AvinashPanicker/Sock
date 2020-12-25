@extends('layout')
@section('content')
       <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black"> Our</strong>  Products</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

          
         <div class="clothes_main section ">
          <div class="container">
            <a class="btn btn-lg btn-primary" href="/shop/add" role="button">Add item</a><br><br><br>
            <div class="row">
               @foreach ($shop as $item)
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                     <a href='/shop/{{$item->id}}'>
                   <div class="sport_product">
                      <figure><img src={{$item['src']}} alt="img"/></figure>
                      <h3> $<strong class="price_text">{{$item['price']}}</strong></h3>
                      <h4>{{$item['name']}}</h4>
                   </div>
                 </div>
               </a>
               @endforeach
             </div>
            </div>
           </div>
           
      </div>
      <!-- end plant -->
@endsection