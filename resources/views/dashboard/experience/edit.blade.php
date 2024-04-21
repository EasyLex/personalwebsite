@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('education.index')}}" class="btn btn-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 17 17">
            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"></path>
        </svg>
        Return</a>
    </div>
    <form action="{{route('experience.update', $data->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Position</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="Position" value="{{Session::get('judul')}}"
            />
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Company Name</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="Company Name" value="{{Session::get('info1')}}"
            />
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col_auto">Start Date</div>
                <div class="col_auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai" placeholder="dd/mm/yyy" value="{{Session::get('tgl_mulai')}}"></div>
                <div class="col_auto">End Date</div>
                <div class="col_auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir" placeholder="dd/mm/yyy" value="{{Session::get('tgl_akhir')}}"></div>
            </div>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Fill</label>
            <textarea class="form-control summernote" rows="5" name="isi">{{Session::get('isi')}}</textarea>
        </div>
        <button class="btn btn-success" name="save" type="submit">Save</button>
        
    </form>
@endsection
