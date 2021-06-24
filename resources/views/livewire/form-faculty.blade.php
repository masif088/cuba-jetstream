<form class="row g-3 needs-validation" novalidate="" wire:submit.prevent="{{$action}}">

    <div class="mb-3">
        <label class="form-label" for="validationTooltip01">Memasukkan nama fakultas</label>
        <input class="form-control" id="validationTooltip01" type="text" wire:model.defer="user.name" required>
        <div class="invalid-tooltip">Bagian ini tidak boleh kosong</div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="validationTooltip01">Memasukkan email fakultas</label>
        <input class="form-control" id="validationTooltip01" type="email" wire:model.defer="user.email" required>
        <div class="invalid-tooltip">Bagian ini tidak boleh kosong</div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="validationTooltip01">Memasukkan password fakultas</label>
        <input class="form-control" id="validationTooltip01" type="password" wire:model.defer="user.password" required>
        <div class="invalid-tooltip">Bagian ini tidak boleh kosong</div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Isikan</button>
    </div>
</form>
