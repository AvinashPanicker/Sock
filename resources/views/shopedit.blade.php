@extends('layout')
@section('content')
      <!-- start Contact Us-->

      <div id="plant" class="contact_us layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2 style="text-align: center; margin-top: 45px;">Edit <strong style="color: #111315;">Item</strong></h2>
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
                <img src="/{{$item['src']}}" alt="img"/>
               </div>
               <div class="col-md-6">
                  <div class="email_btn">
                     <form method="POST" action='/shop/{{$item->id}}/edit'>
                        @csrf
                        <div class="form-group">
                            @error('name')
                            <h4>{{$message}}</h4>
                        @enderror
                           <input type="text" class="form-control form-control-sm" value="{{$item->name}}" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            @error('src')
                            <h4>{{$message}}</h4>
                        @enderror
                           <input  type="text" class="form-control form-control-sm" value="{{$item->src}}" placeholder="image" name="src">
                        </div>
                        <div class="form-group">
                            @error('price')
                            <h4>{{$message}}</h4>
                        @enderror
                           <input  type="text" class="form-control form-control-sm" value="{{$item->price}}" placeholder="Price" name="price">
                        </div>
                         <div class="submit_btn">
                            
                            <button type="submit"  class="btn btn-primary" style="background: #081b30;">Done</button>
                         </div>
                      </form>
                  </div>
               </div>
            </div>
            <br><br>
            </div>
         </div>
      </div>

@endsection