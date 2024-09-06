@extends('layouts.admin_layouts')
@section('title',' Car Services and Mechanic')
@section('content')
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0">Welcome to the Admin|Panel </h1>
         </div>
      </div>
   </div>
</div>
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
               <div class="inner">
                  <h3>{}</h3>
                  <p>Blog</p>
               </div>
               <div class="icon">
               <i class="fa-solid fa-blog"></i>
               </div>
               <a href="" class="small-box-footer">More info <i class="fa-solid fa-caret-down"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
               <div class="inner">
                  <h3>{}</h3>
                  <p>Client</p>
               </div>
               <div class="icon">
               <i class="fa-solid fa-users"></i>
               </div>
               <a href="" class="small-box-footer">More info <i class="fa-solid fa-caret-down"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-success ">
               <div class="inner">
                  <h3>{}</h3>
                  <p>Members</p>
               </div>
               <div class="icon">
               <i class="fa-solid fa-user-plus"></i>
               </div>
               <a href="" class="small-box-footer">More info <i class="fa-solid fa-caret-down"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
               <div class="inner">
                  <h3>{{$repair}}</h3>
                  <p>Support</p>
               </div>
               <div class="icon">
               <i class="fa-solid fa-toolbox"></i>
               </div>
               <a href="" class="small-box-footer">More info <i class="fa-solid fa-caret-down"></i></a>
            </div>
         </div>
      </div>
      <div class="row">
      </div>
   </div>
</section>
@endsection