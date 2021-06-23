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
                <h5>Membuat Mata Kuliah baru</h5>
            </div>
            <div class="card-body">
                <form class="row g-3 needs-validation" novalidate="">
                    <div class="mb-3">
                        <label class="form-label" for="validationTooltip01">Nama Mata Kuliah</label>
                        <input class="form-control" id="validationTooltip01" type="text" required>
                        <div class="invalid-tooltip">Bagian ini tidak boleh kosong</div>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" required="" aria-label="select example">
                            <option value="">Privilege materi</option>
                            <option value="1">Private</option>
                            <option value="2">Public</option>
                        </select>
                        <div class="invalid-feedback">Bagian ini tidak boleh kosong</div>
                    </div>
                    <div>
                        <label class="form-label" for="validationTooltip01">Thumbnail mata kuliah</label>
                        <input class="form-control" type="file" aria-label="file example" required accept="image/*">
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Isikan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
