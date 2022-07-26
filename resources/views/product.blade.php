@extends('master')
@section("content")
<div class="custom-product">
  <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
    <div class="carousel-inner">
      @foreach ($products as $item)
      <div class="carousel-item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
          <img src="{{$item['gallery']}}" class="d-block w-100 slider-img" >
          <div class="carousel-caption d-none d-md-block slider-text">
            <h5>{{$item['name']}}</h5>
            <p>{{$item['description']}}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" style="color: black;"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <div class="trending-wrapper">
      <h4>Trending Products</h4>
        @foreach($products as $item)
        <div class="trending-item">
          <a href="detail/{{$item['id']}}">
            <img class="trending-image" src="{{$item['gallery']}}">
            <div class="">
                <h3>{{$item['name']}}</h3>
            </div>
          </a>
        </div>
        @endforeach
    </div>
</div>
@endsection