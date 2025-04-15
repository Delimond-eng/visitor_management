@props([
    'title' => 'No Title',
    'id' => '',
    'table'=>''
])
<div class="modal fade" id="modal-{{ $id }}" tabindex="-1" aria-labelledby="exampleModalDefaultLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog" role="document">
        <form class="modal-content" method="post" action="{{ route('config.create') }}">
            @csrf
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalDefaultLabel">Configuration {{ $title }}</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <input type="text" name="table" value="{{ $table }}" hidden>
                <div class="row">
                    <div class="col-md-12">
                        <label class="form-label text-dark">Libellé <sup class="text-danger">*</sup></label>
                        <input type="text" name="libelle" class="form-control border-dark" placeholder="entrer un libellé...">
                    </div>
                </div><!--end row-->
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary btn-sm">Sauvegarder</button>
            </div><!--end modal-footer-->
        </form><!--end modal-content-->
    </div><!--end modal-dialog-->
</div>