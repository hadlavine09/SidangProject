@extends('layouts.main')
@section('content')
<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="bg-light rounded p-3">
                    <p class="mb-0">Returning customer? <a href="{{route('login')}}" class="d-inline-block">Click
                            here</a> to login</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row mb-5">
                    <div class="col-md-12">
                        @include('layouts/_flash')
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('pembeli.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                            name="nama">
                                        @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">No Hp</label>
                                        <input type="number" class="form-control  @error('no_hp') is-invalid @enderror"
                                            name="no_hp">
                                        @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control  @error('alamat') is-invalid @enderror"
                                            name="alamat">
                                        @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- <a href="{{url('/transaksi')}}" class="btn btn-primary">kirim</a> --}}
                                    <button class="btn btn-primary" href="{{url('/transaksi')}}"
                                        type="submit">Save</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-6">
        <div class="row mb-5">
            <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Pesanan Anda</h2>
                <div class="p-3 p-lg-5 border">
                    <table class="table site-block-order-table mb-5">
                        <thead>
                            <th>Product</th>
                            <th>Total</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$obat->nama_obat}}<strong class="mx-2">x</strong> 1</td>
                                <td>Rp.{{number_format($obat->harga,0,'.','')}}</td>
                            </tr>
                            <tr>
                                <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                                <td class="text-black">$350.00</td>
                            </tr>
                            <tr>
                                <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                <td class="text-black font-weight-bold"><strong>$350.00</strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="border mb-3">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button"
                                aria-expanded="false" aria-controls="collapsebank">Direct Bank
                                Transfer</a></h3>

                        <div class="collapse" id="collapsebank">
                            <div class="py-2 px-4">
                                <p class="mb-0">Make your payment directly into our bank account. Please use
                                    your Order ID as the
                                    payment reference. Your order won’t be shipped until the funds have cleared
                                    in our account.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border mb-3">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque"
                                role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque
                                Payment</a></h3>

                        <div class="collapse" id="collapsecheque">
                            <div class="py-2 px-4">
                                <p class="mb-0">Make your payment directly into our bank account. Please use
                                    your Order ID as the
                                    payment reference. Your order won’t be shipped until the funds have cleared
                                    in our account.</p>
                            </div>
                        </div>
                    </div>

                    <div class="border mb-5">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal"
                                role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a>
                        </h3>

                        <div class="collapse" id="collapsepaypal">
                            <div class="py-2 px-4">
                                <p class="mb-0">Make your payment directly into our bank account. Please use
                                    your Order ID as the
                                    payment reference. Your order won’t be shipped until the funds have cleared
                                    in our account.</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou.html'">Place
                            Order</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- </form> -->
</div>
</div> --}}


{{-- <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
                    <div class="banner-1-inner align-self-center">
                        <h2>Pharma Products</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio
                            voluptatem.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
                    <div class="banner-1-inner ml-auto  align-self-center">
                        <h2>Rated by Experts</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio
                            voluptatem.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> --}}

@endsection