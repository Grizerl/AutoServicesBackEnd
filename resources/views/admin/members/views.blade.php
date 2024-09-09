@extends('layouts.admin_layouts')
@section('title', 'Car Services and Mechanic')
@section('content')

<div class="header-view-container">
   <div class="portfolio-info">
      <div class="image-containers">
         <img class="view-img" src="{{ asset($member->img) }}" alt="Images member">
      </div>
      <div class="text-container">
         <h2 class="view-title">Portfolio Information</h2>
         <ul class="view-list">
            <li class="view-item">
               <b>Name: </b><span>{{$member->name}}</span>
            </li>
            <li class="view-item">
               <b>Phone number: </b><span>{{$member->phone_number}}</span>
            </li>
            <li class="view-item">
               <b>Age: </b><span>{{$member->age}}</span>
            </li>
            <li class="view-item">
               <b>Place of residence: </b><span>{{$member->place_of_residence}}</span>
            </li>
         </ul>
      </div>
   </div>
   <div class="project-section">
      <h1 class="project-title">Demo Media Title 3</h1>
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