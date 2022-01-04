<div class="container mt-4 mb-2">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-dark">Home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">history</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col">
                <div class="table-responsive">

                    <table class="table text-center">
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Tanggal Pesan</td>
                                <td>Kode Pemesanan</td>
                                <td>Pesanan</td>
                                <td>Status</td>
                                <td><strong>Total Harga</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            @forelse ($pesanans as $pesanan)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$pesanan->created_at }}</td>
                                <td>{{$pesanan->kode_pemesanan }}</td>
                                <td>
                                    <?php $pesanan_details = \App\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                                    @foreach ($pesanan_details as $pesanan_detail)
                                    <img src="{{ url('assets/jersey') }}/{{ $pesanan_detail->products->gambar }}" class="img-fluid" width="50">
                                    {{ $pesanan_detail->products->nama }}
                                    <br>
                                    @endforeach
                                </td>
                                <td>
                                    @if($pesanan->status == 1)
                                    Belum Lunas
                                    @else
                                    Lunas
                                    @endif
                                </td>
                                <td><strong>Rp. {{number_format($pesanan->total_harga)}}</strong></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">Data Kosong</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <h4>Informasi Pembayaran</h4>
                    <hr>
                    <p>Untuk pembayaran silahkan dapat transper direkening dibawah ini : </strong></p>
                    <div class="media">
                        <img src="{{url('assets/bri.png')}}" class="mr-3" width="70px" alt="Bank BRI">
                        <div class="media-body">
                            <h5 class="mt-0">BANK BRI</h5>
                            No. Rekening : 0123-456-78910 atas nama <strong>Fahmy Fauzi</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>