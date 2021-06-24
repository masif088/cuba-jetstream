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
                <h5>Membuat Module</h5>
            </div>
            <div class="card-body">
                <form class="row g-3 needs-validation" novalidate="">
                    <div class="mb-3">
                        <label class="form-label" for="module.name">Nama Module</label>
                        <input class="form-control" id="module.name" type="text" required>
                        <div class="invalid-tooltip">Bagian ini tidak boleh kosong</div>
                    </div>
                    <div>
                        <label class="form-label" for="validationTooltip01">Thumbnail mata kuliah</label>
                        <input class="form-control" type="file" aria-label="file example" required accept="image/*">
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    {{--    <script>--}}
    {{--        document.addEventListener('livewire:load', function () {--}}
    {{--            $('#summernote').summernote();--}}
    {{--        });--}}
    {{--    </script>--}}
</x-app-layout>
