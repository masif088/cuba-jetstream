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

    <div>
        <div class="card">
            <div class="card-header">
                <h5>Menambahkan fakultas dalam kampus</h5>
            </div>
            <div class="card-body">
                <livewire:form-faculty action="create" collegeId="{{auth()->user()->college->id}}"/>
            </div>
        </div>
    </div>
</x-app-layout>
