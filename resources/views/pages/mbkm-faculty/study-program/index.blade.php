<x-app-layout>
    <x-slot name="header">
        <div class="col-6">
            <h3>Dashboard</h3>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Default</li>
            </ol>
        </div>
    </x-slot>
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Fakultas</h5>
                </div>
                <div class="card-body">
                    <a href="{{route('faculty.create')}}" class="float-right btn btn-primary">Tambah Fakultas</a>
                    <br><br>
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Nama Program Study</th>
                                <th>Jumlah Mata kuliah MBKM</th>
                                <th>Jumlah Mata kuliah Public</th>
                                <th>Jumlah Kelas aktif</th>
                                <th>Jumlah siswa MBKM</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sp as $s)
                                <tr>
                                    <td>{{ $s->name }}</td>
                                    <td>{{ $s->user }}</td>
                                    <td>{{ $s->study_programs_count }}</td>
                                    <td>{{ $s->faculties }}</td>
                                    <td>{{ $s->faculties }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
