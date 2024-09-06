@extends('layouts.admin_layouts')
@section('title', 'Car Services and Mechanic')
@section('content')
<div class="header-view-container">
   <div class="view-content">
      <div class="image-container">
         <img class="view-img" src="/assets/images/Car-repaire.png" alt="Images Car">
      </div>
      <div>
         <h2 class="view-title">Portfolio Information</h2>
         <div>
            <ul class="view-list">
               <li class="view-item">
                  <b>Customer Name: </b><span>{{$repair->name}}</span>
               </li>
               <li class="view-item">
                  <b>Phone number: </b><span>{{$repair->telephone}}</span>
               </li>
               <li class="view-item">
                  <b>Car Name: </b><span>{{$repair->car}}</span>
               </li>
               <li class="view-item">
                  <b>Problem Name: </b><span>{{$repair->comment}}</span>
               </li>
               <li class="view-item">
                  <b>Price: </b><span>{{$repair->price}}$</span>
               </li>
               <li class="view-item">
                  <b>Status: </b><span>{{$repair->done}}</span>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div>
      <h1>Demo Media Title 3</h1>
      <div class="prots-contentg">
         <p><strong>Project Description</strong><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, natus numquam unde qui pariatur porro necessitatibus harum libero commodi rem veritatis in nisi vero odit tenetur esse quidem inventore ex. Sunt nam mollitia, accusantium voluptates recusandae dolor isbus the necessitatibus praesentium excepturi earum sint inventore aperiam? Aperiam dolores
         </p>
         <p><strong>Project Strategy</strong><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, natus numquam unde qui pariatur porro necessitatibus harum libero commodi rem veritatis in nisi vero odit tenetur esse quidem inventore ex. Sunt nam mollitia, accusantium voluptates recusandae dolor isbus the necessitatibus praesentium excepturi earum sint inventore aperiam? Aperiam dolores
         </p>
         <p><strong>Project Challenge</strong><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus corporis minima, maiores. Doloribus ab et repudiandae molestiae. Quibusdam, tempora, amet.
         </p>
         <ul>
            <li>Nanotechnology immersion information</li>
            <li>Bring to the table survival strategies</li>
            <li>Capitalize on low hanging identify</li>
            <li>Leverage agile frameworks to provide</li>
         </ul>
         <ul>
            <li>Nanotechnology immersion information</li>
            <li>Bring to the table survival strategies</li>
            <li>Capitalize on low hanging identify</li>
            <li>Leverage agile frameworks to provide</li>
         </ul>
         <p><strong>Project Solution</strong><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, natus numquam unde qui pariatur porro necessitatibus harum libero commodi rem veritatis in nisi vero odit tenetur esse quidem inventore ex. Sunt nam mollitia, accusantium voluptates recusandae dolor isbus the necessitatibus praesentium excepturi earum sint inventore aperiam? Aperiam dolores
         </p>
         <p><strong>Project Result</strong><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, natus numquam unde qui pariatur porro necessitatibus harum libero commodi rem veritatis in nisi vero odit tenetur esse quidem inventore ex. Sunt nam mollitia, accusantium voluptates recusandae dolor isbus the necessitatibus praesentium excepturi earum sint inventore aperiam? Aperiam dolores
         </p>
      </div>
   </div>
</div>
@endsection