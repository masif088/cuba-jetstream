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
                                <th>Nama Fakultas</th>
                                <th>Email Fakultas</th>
                                <th>Jumlah Program Study</th>
                                <th>Lihat aktivitas</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($faculties as $faculty)
                                <tr>
                                    <td>{{ $faculty->name }}</td>
                                    <td>{{ $faculty->user->email }}</td>
                                    <td>{{ $faculty->study_programs_count }}</td>
                                    <td>{{ $faculty->faculties }}</td>
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
