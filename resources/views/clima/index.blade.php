{{-- @dd($response->results) --}}
{{-- {{ $response->results->temp }} --}}
@extends('layouts.app')

@section('content')

<section class="vh-100">
    <div class="container py-5 h-100">

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-4">

          <div class="card" style="color: #4B515D; border-radius: 35px;">
            <div class="card-body p-4">

              <div class="d-flex">
                <h6 class="flex-grow-1">{{ $response->results->city }}</h6>
                <h6>{{ $response->results->time }}</h6>
              </div>

              <div class="d-flex flex-column text-center mt-5 mb-4">
                <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;"> {{ $response->results->temp }} ºC </h6>
                <span class="small" style="color: #868B94">{{ $response->results->description }}</span>
              </div>

              <div class="d-flex align-items-center">
                <div class="flex-grow-1" style="font-size: 1rem;">
                  <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span class="ms-1"> {{ $response->results->wind_speedy }} </span></div>
                  <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i> <span class="ms-1"> {{ $response->results->humidity }}% </span></div>
                </div>
                <div>
                    @if ($response->results->condition_slug == "cloud" )
                        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-weather/ilu1.png" width="100px">
                    @endif
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
@endsection
