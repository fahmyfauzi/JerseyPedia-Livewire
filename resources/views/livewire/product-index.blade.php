<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-dark">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Jersey</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Search -->
        <div class="row">
            <div class="col-md-9">
                <h2>{{$title}}</h2>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <input wire:model="search" type="text" class="form-control" placeholder="Search ..." aria-label="Username" aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-search"></i>
                        </span>
                    </div>
                </div>
            </div>


            <!-- akhir search -->

            <!--  Product -->
            <section class="product">
                <div class="row  mt-4">
                    @foreach($products as $product)
                    <div class="col-md-3 mb-3">
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

                <div class="row">
                    <div class="col">
                        {{$products->links()}}
                    </div>
                </div>
            </section>
            <!-- akhir Best Product -->
        </div>

    </div>