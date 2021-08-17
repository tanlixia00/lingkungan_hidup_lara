@extends('layouts.backend')

@section('title', 'Daftar')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Satwa</div>

                   
                    
                    <table id="nota" class="table table-hover table-condensed">
                        <thead>
                        <tr>
                            <th style="width:5%">ID</th>
                            <th style="width:30%">gambar</th>
                            <th style="width:15%">Nama</th>
                            <th style="width:10%">Spesies</th>
                            <th style="width:10%">Asal</th>
                            <th style="width:30%">Deskripsi</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($query as $t)
                            <tr>
                                <td data-th="Kode">
                                   {{ $t->idSatwa }}
                                </td>
                                <td data-th="Kategori">
                                <!-- <img src="{{ asset('images/'.$t->gambar) }}" width="250" height="250"> -->
                                <img src="{{$t->gambar}}" width="250" height="250">    
                                </td>
                                <td data-th="Kode">
                                   {{ $t->nama }}
                                </td>
                                <td data-th="Kategori">
                                    {{ $t->spesies }}
                                </td>
                                <td data-th="Kode">
                                   {{ $t->asal }}
                                </td>
                                <td data-th="Kategori">
                                    {{ $t->deskripsi }}
                                </td>
                                
                                
                            
                                <td class="actions" data-th="">
                                <form method='POST' action="{{url('satwa/'.$t->idSatwa )}}" >
                                @csrf
                                @method('DELETE')
                                <input type='submit' value='hapus' class='btn btn-xs btn-danger'
                                    onclick="if(!confirm('apakah anda yakin?')) return false;"/>
                                </form>
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
