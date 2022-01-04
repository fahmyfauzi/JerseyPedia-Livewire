<div class="container mt-4 mb-2">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-danger">
                {{session('message')}}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">

                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Gambar</td>
                            <td>Keterangan</td>
                            <td>Nameset</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td><strong>Total Harga</strong></td>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($pesanan_details as $pesanan_detail)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ url('assets/jersey') }}/{{ $pesanan_detail->products->gambar }}" class="img-fluid" width="200">
                            </td>
                            <td>{{$pesanan_detail->products->nama}}</td>
                            <td>
                                @if($pesanan_detail->namaset)
                                Nama : {{$pesanan_detail->nama}} <br>
                                Nomor : {{$pesanan_detail->nomor}}
                                @else
                                -
                                @endif
                            </td>
                            <td>
                                Rp. {{$pesanan_detail->jumlah_pesanan}}
                            </td>
                            <td>

                                <strong>Rp. {{number_format($pesanan_detail->products->harga)}}</strong>
                            </td>
                            <td>
                                <strong>Rp. {{number_format($pesanan_detail->total_harga)}}</strong>
                            </td>
                            <td>
                                <i wire:click="destroy({{ $pesanan_detail->id }})" class="bi bi-trash text-danger"></i>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>
                        @endforelse
                        @if(!empty($pesanan))
                        <tr>
                            <td colspan="6" align="right">Total Harga :</td>
                            <td> <strong>{{number_format($pesanan->total_harga)}}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right">Kode Unik :</td>
                            <td> <strong>{{number_format($pesanan->kode_unik)}}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right">Total Harga :</td>
                            <td>
                                <strong>{{number_format($pesanan->total_harga+$pesanan->kode_unik)}}</strong>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="2"><a href="{{route('checkout')}}" class="btn btn-success">Chekout</a> </td>

                        </tr>
                        @endif

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>