@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Education</p>
    <div class="pb-3"><a href="{{route('education.create')}}" class="btn btn-success">+ Add Education</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">Num</th>
                    <th>School/University</th>
                    <th>Faculty</th>
                    <th>Study Program</th>
                    <th>IPK</th>
                    <th>Entry Date</th>
                    <th>Graduation Date</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->info1}}</td>
                        <td>{{$item->info2}}</td>
                        <td>{{$item->info3}}</td>
                        <td>{{$item->tgl_mulai_indo}}</td>
                        <td>{{$item->tgl_akhir_indo}}</td>
                        <td>
                            <a href='{{route('education.edit', $item->id)}}' class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Are you sure you want to remove this data? This action cannot be undone.')" action="{{route('education.destroy', $item->id)}}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" name='submit'>Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
