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
                        <label class="form-label" for="validationTooltip01">Isi Pelajaran</label>
                        <textarea class="summernote"></textarea>
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
