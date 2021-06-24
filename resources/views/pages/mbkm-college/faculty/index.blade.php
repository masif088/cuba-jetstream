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
                    <h5>Data Kampus MBKM</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Nama Kampus</th>
                                <th>Email Kampus</th>
                                <th>Jumlah Fakultas</th>
                                <th>Jumlah Program Study</th>
                                <th>Lihat aktivitas</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($colleges as $college)
                                <tr>
                                    <td>{{ $college->name }}</td>
                                    <td>{{ $college->user->email }}</td>
                                    <td>{{ $college->faculties_count }}</td>
                                    <td>{{ count($college->faculties) }}</td>
                                    <td>2011/04/25</td>
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
