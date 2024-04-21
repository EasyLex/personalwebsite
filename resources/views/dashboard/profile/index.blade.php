@extends('dashboard.layout')

@section('konten')
    <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">
            <div class="col-5">
                <h3>Profile</h3>
                @if (get_meta_value('_foto'))
                    <img style="max-width:100px;max-height:100px" src="{{ asset('foto')."/".get_meta_value('_foto') }}">
                @endif
                <div class="mb-3">
                    <label for="_foto" class="form-label">Profile Picture</label>
                    <input type="file" class="form-control form-control-sm" name="_foto" id="_foto">
                </div>
                <div class="mb-3">
                    <label for="_kota" class="form-label">City</label>
                    <input type="text" class="form-control form-control-sm" name="_kota" id="_kota" value="{{ get_meta_value('_kota') }}">
                </div>
                <div class="mb-3">
                    <label for="_provinsi" class="form-label">Province</label>
                    <input type="text" class="form-control form-control-sm" name="_provinsi" id="_provinsi" value="{{ get_meta_value('_provinsi') }}">
                </div>
                <div class="mb-3">
                    <label for="_nohp" class="form-label">Phone Number</label>
                    <input type="text" class="form-control form-control-sm" name="_nohp" id="_nohp" value="{{ get_meta_value('_nohp') }}">
                </div>
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" name="_email" id="_email" value="{{ get_meta_value('_email') }}">
                </div>

            </div>
            <div class="col-5">
                <h3>Social Medias</h3>
                <div class="mb-3">
                    <label for="_youtube" class="form-label">Youtube</label>
                    <input type="text" class="form-control form-control-sm" name="_youtube" id="_youtube" value="{{ get_meta_value('_youtube') }}">
                </div>
                <div class="mb-3">
                    <label for="_twitter" class="form-label">Twitter</label>
                    <input type="text" class="form-control form-control-sm" name="_twitter" id="_twitter" value="{{ get_meta_value('_twitter') }}">
                </div>
                <div class="mb-3">
                    <label for="_instagram" class="form-label">Instagram</label>
                    <input type="text" class="form-control form-control-sm" name="_instagram" id="_instagram" value="{{ get_meta_value('_instagram') }}">
                </div>
                <div class="mb-3">
                    <label for="_github" class="form-label">Github</label>
                    <input type="text" class="form-control form-control-sm" name="_github" id="_github" value="{{ get_meta_value('_github') }}">
                </div>
            </div>
        </div>
        
        <button class="btn btn-success" name="save" type="submit">Save</button>
        
    </form>
@endsection