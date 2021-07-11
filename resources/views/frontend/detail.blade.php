@extends('layouts.frontend')

@section('title', 'Detail Satwa')

@section('content')
    
    <div class="page-bar">
    
    <!-- nama, stok, harga jual, harga produksi -->
    </div>
        <form role="" method="post" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
                <div>
                    <label for="inputfile">Gambar Satwa</label> <br>
                    <img src="{{ asset('images/'.$data->gambar) }}" alt="Current image" height="300" width="300">
                </div>
                <div class="form-group">
                    <label>Nama Satwa</label>
                    <input type="text" class="form-control" name="namaSatwa" id="namaSatwa" placeholder="" value="{{$data->nama}}">
                    <span class="help-block">
                     </span>
                </div>
                
                
                <div class="form-group">
                    <label>Spesies</label>
                    <input type="text" class="form-control" id="spesies" name="spesies" placeholder="total stok"  value="{{$data->spesies}}">
                </div>
                <div class="form-group">
                    <label>Asal</label>
                    <input type="text" class="form-control" id="asal" name="asal" placeholder="berisi asal"  value="{{$data->asal}}">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label> <br>
                    <textarea name="desc" id="desc" cols="140" rows="5" value="">{{$data->deskripsi}}</textarea>
                </div>
                
            </div>
        </form>

        @endsection