@extends('layouts.backend')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/select2/select2.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backend/assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/js/components/select2-init.js')}}"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <center>
                                <div class="card-header">Tambah Artikel</div>
                            </center>

                            <div class="card-body">
                                <form action="{{route('artikel.update',$artikel->id)}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" value="PATCH" name="_method">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Judul</label>
                                        <input class="form-control
                                        @error('judul') is-invalid @enderror" type="text" value="{{$artikel->judul}}"
                                        name="judul" id="" >
                                        @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        <input class="form-control
                                        @error('foto') is-invalid @enderror" type="file"
                                        name="foto" id="" value="{{$artikel->foto}}">

                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select class="form-control
                                        @error('catagory') is-invalid @enderror" name="id_catagory" id="" value="{{$artikel->catagory}}">
                                            @foreach ($catagory as $data)
                                                <option value="{{$data->id}}"
                                                    @if($data->id == $artikel->id_catagory) selected="selected" @endif>
                                                {{$data->nama_catagory}}</option>
                                            @endforeach
                                        </select>
                                        @error('catagory')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Tag</label>
                                        <select class="form-control
                                        @error('tag') is-invalid @enderror" name="tag[]" id="s2_demo3" multiple="multiple" value="{{$artikel->tag}}">
                                            @foreach ($tag as $data)
                                                <option value="{{$data->id}}"
                                                {{ (in_array($data->id, $select)) ? ' selected="selected"' : ' '}}>
                                                    {{ $data->nama_tag }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('tag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                            <label for="">Konten</label>
                                            <textarea class="form-control
                                            @error('konten') is-invalid @enderror"
                                            name="konten" id="editor1" required>{{ $artikel->konten}}
                                            </textarea>
                                            @error('konten')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                                <button type="submit" class="btn btn-outline-info">
                                                    Simpan Data
                                                </button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
