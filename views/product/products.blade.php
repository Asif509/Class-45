@extends('master')

@section('title')
    All Products
@endsection

@section('body')
   <section class="py-5">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <h3 class="text-center">All Products</h3>
                   <div class="row mt-3">
                       <div class="col-md-4">
                           <div class="card">
                               <img src="assets/img/1.jpg" alt="" class="card-img-top" style="height: 250px">
                               <div class="card-body">
                                   <h2>Stylish Punjabi</h2>
                                   <p>Price: 2000Tk</p>
                               </div>
                               <div class="card-footer">
                                   <a href="" class="float-end btn btn-outline-primary">Views</a>

                               </div>
                           </div>

                       </div>

                   </div>

               </div>

           </div>

       </div>

   </section>
@endsection
