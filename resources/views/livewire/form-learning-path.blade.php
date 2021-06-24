<form class="row g-3 needs-validation" novalidate="" wire:submit.prevent="{{$action}}">

    <div class="mb-3">
        <label class="form-label" for="validationTooltip01">Nama Mata Kuliah</label>
        <input class="form-control" id="validationTooltip01" type="text" wire:model="learningpath.title" required>
        <div class="invalid-tooltip">Bagian ini tidak boleh kosong</div>
    </div>

    <div class="mb-3">
        <select class="form-select" required="" aria-label="select example" wire:model="learningpath.privilege">
            <option value="">Privilege materi</option>
            <option value="1">Private</option>
            <option value="2">Public</option>
        </select>
        <div class="invalid-feedback">Bagian ini tidak boleh kosong</div>
    </div>

    <div class="mb-3">
        <select class="form-select" required="" aria-label="select example" wire:model="learningpath.status">
            <option value="">Status materi</option>
            <option value="1">Hidup</option>
            <option value="2">Mati</option>
        </select>
        <div class="invalid-feedback">Bagian ini tidak boleh kosong</div>
    </div>

    <div class="mb-3">
        <select class="form-select" required="" aria-label="select example" wire:model="learningpath.study_program_id">
            <option value="">Pilih program study</option>
            @foreach($ps as $p)
            <option value="{{$p->id}}">{{$p->name}}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">Bagian ini tidak boleh kosong</div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="validationTooltip01">Kuota mahasiswa MBKM</label>
        <input class="form-control" id="validationTooltip01" type="number" wire:model="learningpath.quota" required>
        <div class="invalid-tooltip">Bagian ini tidak boleh kosong</div>
    </div>

    <div>
        <label class="form-label" for="validationTooltip01">Thumbnail mata kuliah</label>
        <input class="form-control" type="file" aria-label="file example" required accept="image/*" wire:model="file">
        <div class="invalid-feedback">Example invalid form file feedback</div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Isikan</button>
    </div>
</form>
