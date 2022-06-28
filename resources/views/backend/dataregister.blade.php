@extends('layouts.backend.app')

@section('title')
    Data Siswa Register  - SDIT INSAN QUR'ANI
@endsection

@section('breadcrumb')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Siswa Register</h3>
            <p class="text-subtitle text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page">Data Pendaftar
                    <li class="breadcrumb-item active" aria-current="page">Data  Register
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
@endsection

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible show fade">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <strong>{{ $message }}</strong>
</div>
@elseif($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible show fade">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <strong>{{ $message }}</strong>
</div>
@endif

<div class="card">

    <div class="card-body">
        <div class="row g-3">
          <div class="col-md-3">
            <div class="mb-3">
              <select name="tahun_ajarans" id="tahun_ajarans" class="form-control">
                <option value="0">Pilih Tahun</option>
                @foreach ($tahun as $tahuns)
                  <option value="{{$tahuns->tahun_ajarans}}">{{$tahuns->tahun_ajarans}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-md-3">
            <div class="mb-3">
              <select name="" id="pilihjenjang" class="form-control">
                <option value="selected">Pilih Jenjang</option>
              </select>
            </div>
          </div>
          <div class="col-3">
            <button class="btn btn-primary" id="filter">Filter</button>
          </div>
        </div>
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Tahun Daftar</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="refresh_body">
                @foreach ($dataregister as $dr)
                    <tr>
                        <td>{{ $dr->name }}</td>
                        <td>{{ $dr->email }}</td>
                        <td>{{ $dr->tahun_ajarans }}</td>
                        <td><span class="badge bg-success">{{ $dr->status }}</span></td>
                        <td>
                            @if ($dr->payments != NULL)
                                <a href="{{ route('showbuktipayment', $dr->id) }}" target="_blank" class="btn btn-sm btn-info rounded-pill">Lihat Bukti</a>
                                <form
                                method="POST"
                                action="{{ route('updateregister', $dr->id) }}"
                                class="d-inline"
                                onsubmit="return confirm('Yakin Untuk Menerima Pembayaran ini?')">
                                @csrf
                                @method('PUT')
                                <input type="submit" name="status" value="Terima" class="btn btn-sm btn-primary rounded-pill">
                                </form>
                            @else
                                <a href="#" target="_blank" class="disabled btn btn-sm btn-info rounded-pill">Lihat Bukti</a>
                                <a href="#" class="disabled btn btn-sm btn-primary rounded-pill">Terima</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>

<script type="text/javascript">
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);

    // Filter Tahun Ajaran
    $("#filter").click(function(){

      var tahun_ajarans  = $("#tahun_ajarans").val();
      $.get('/backend/filter-tahun-ajaran',{'_token': $('meta[name=csrf-token]').attr('content'),tahun_ajarans:tahun_ajarans}, function(resp){
      $("#refresh_body").html(resp);
      });
    });
</script>
@endsection