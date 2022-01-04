<div class="container">
    <!-- banner -->

    <div class="banner">
        <img src="{{ url('assets/slider/slider1.png')}}" alt="banner">
    </div>
    <!-- akhir bannner -->

    <!-- pilih liga -->
    <section class="pilih-liga mt-4">
        <h5>
            <strong>Pilih Liga</strong>
            <a href="{{route('products')}}" class="btn btn-dark float-right">Lihat Semua</a>
        </h5>
        <div class="row  mt-4">
            @foreach($ligas as $liga)
            <div class="col">
                <a href="{{route('product.liga',$liga->id)}}">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{url('assets/liga')}}/{{$liga->gambar}}" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    <!-- akhir pilih liga -->

    <!-- Best Product -->
    <section class="product mt-4">
        <h5><strong>Best Product</strong></h5>
        <div class="row  mt-4">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{url('assets/jersey')}}/{{$product->gambar}}" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{$product->nama}}</strong></h5>
                                <h5>Rp. {{number_format($product->harga)}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <a href="{{route('product.detail',$product->id)}}" class="btn btn-block btn-dark">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </section>
    <!-- akhir Best Product -->
</div>