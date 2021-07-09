@extends('layouts.frontend')

@section('title', 'Lokasi Wisata')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Lokasi Wisata Satwa</div>
                
                <div class="card-body">

                    
                    <table id="nota" class="table table-hover table-condensed">
                        <thead>
                        <tr>
                            <th style="width:10%">Kode</th>
                            <th style="width:20%">Nama Lokasi</th>
                            <th style="width:70%">Alamat Lengkap</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($query as $t)
                            <tr>
                                <td data-th="Kode">
                                   {{ $t->id }}
                                </td>
                                <td data-th="Kategori">
                                    {{ $t->nama_lokasi }}
                                </td>
                                <td data-th="Kategori">
                                    {{ $t->alamat }}
                                </td>
                                
                            
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
