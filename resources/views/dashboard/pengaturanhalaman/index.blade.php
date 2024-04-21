@extends('dashboard.layout')

@section('konten')
    <form action="{{route('pengaturanhalaman.update')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2">About</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_about">
                    <option value="">-Please choose an item-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{ $item->id }}" {{ get_meta_value('_halaman_about')==$item->id?'selected':'' }}>{{ $item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Interest</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_interest">
                    <option value="">-Please choose an item-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{ $item->id }}" {{ get_meta_value('_halaman_interest')==$item->id?'selected':'' }}>{{ $item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Award</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halaman_award">
                    <option value="">-Please choose an item-</option>
                    @foreach ($datahalaman as $item)
                        <option value="{{ $item->id }}" {{ get_meta_value('_halaman_award')==$item->id?'selected':'' }}>{{ $item->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-success" name="simpan" type="submit">Save</button>
        
    </form>
@endsection