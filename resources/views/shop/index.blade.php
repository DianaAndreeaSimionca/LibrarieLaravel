@extends('layouts.master')

@section('title')
    Welcome to shop!
@endsection

@section('content')
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ URL::to('src/photos/carrousell_1.jpg')  }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ URL::to('src/photos/carrousell_2.jpg')  }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ URL::to('src/photos/carrousell_3.jpg')  }}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-1">

        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <button type="button" style="width: 100%;" class="btn btn-warning">First button</button>
        </div>
        <div class="col-md-1">
        </div>
    </div>
    </div>
@endsection