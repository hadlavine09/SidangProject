@extends('layouts.main')
@section('content')

<div class="site-blocks-cover inner-page" style="background-image: url('assets1/images/hero_1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto align-self-center">
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row align-items-stretch section-overlap">
            @foreach($kategori as $data)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap bg-primary h-100">

                    <a href="{{url('shop')}}/?kategori={{$data->id}}" class="h-100">
                        <h5>{{$data->nama_kategori}}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        {{--
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Reference</h3>
                <button type="button" class="btn btn-secondary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
                    data-toggle="dropdown">Reference</button>
                @foreach ($kategori as $data)
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                    <a class="dropdown-item" href="#"> {{ $data->nama_kategori }}</a>
                </div>
                @endforeach
            </div>
        </div> --}}
        {{-- <select name="" id="">kategori
            @foreach($kategori as $data)
            <option value="">{{ $data->nama_kategori }}</option>

            @endforeach
        </select> --}}

        <div class="row">
            @foreach ($obats as $obat)
            <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <span class="tag">Sale</span>
                <a href="{{route('singleShop',$obat->slug)}}"> <img src="{{$obat->image()}}"
                        style="width: 270px; height:370px;" alt="Image"></a>
                <h3 class="text-dark"><a href="{{route('singleShop',$obat->slug)}}">{{$obat->nama_obat}}</a></h3>
                <p class="price"> Rp.{{number_format($obat->harga,0,'.','')}}&mdash;</p>
            </div>
            @endforeach
        </div>
        {{-- <div class="row mt-5">
            <div class="col-md-12 text-center">
                <div class="site-block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection