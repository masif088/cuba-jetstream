<form class="row g-3 needs-validation" novalidate="" wire:submit.prevent="{{$action}}">
    <div class="mb-3">
        <label class="form-label" for="validationTooltip01">Memasukkan nama program study / jurusan</label>
        <input class="form-control" id="validationTooltip01" type="text" wire:model.defer="ps" required>
        <div class="invalid-tooltip">Bagian ini tidak boleh kosong</div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Isikan</button>
    </div>
</form>
