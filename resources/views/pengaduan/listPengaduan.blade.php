@extends('layouts.backend')

@section('title', 'Daftar Pengaduan')


@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Daftar Pengaduan</div>

                   
                    
                    <table id="nota" class="table table-hover table-condensed">
                        <thead>
                        <tr>
                            <!-- <th style="width:5%">ID</th> -->
                            <th style="width:20%">gambar</th>
                            <th style="width:25%">alasan</th>
                            <th style="width:20%">lokasi</th>
                            <th style="width:10%">tanggal</th>
                            <th style="width:10%">telp</th>
                            <th style="width:10%">status</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($query as $t)
                            <tr>
                                <!-- <td data-th="Kode">
                                   {{ $t->id }}
                                </td> -->
                                <td data-th="Kategori">
                                <img src="{{ asset('images/'.$t->gambar) }}" width="250" height="250">
                                <img src="{{ $t->gambar }}" width="250" height="250">
                                </td>
                                <td data-th="Kode">
                                   {{ $t->alasan }}
                                </td>
                                <td data-th="">
                                    {{ $t->lokasi_satwa }}
                                </td>
                                <td data-th="tanggal">
                                    {{ $t->tanggal }}
                                </td>
                                <td data-th="tanggal">
                                    {{ $t->telepon }}
                                </td>
                                <td>
                                {{ $t->status }}

                                </td>
                            
                                <!-- <td class="actions" data-th="">
                                <form method='POST' action="{{url('frontend/'.$t->id )}}" >
                                @csrf
                                @method('DELETE')
                                <input type='submit' value='hapus' class='btn btn-xs btn-danger'
                                    onclick="if(!confirm('apakah anda yakin?')) return false;"/>
                                </form>
                                </td> -->
                            
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
