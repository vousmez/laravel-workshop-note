@extends('component.layout')@section('body')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset ('image/cat1.jpg') }} " class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset ('image/cat2.png') }} " class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset ('image/cat3.jpg') }} " class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
@endsection
