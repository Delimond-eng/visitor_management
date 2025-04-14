@push("styles")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
<div class="modal fade visit-create-modal" id="visit-create-modal" tabindex="-1" aria-labelledby="visitCreateModal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <form class="modal-content" id="form-create" enctype="multipart/form-data">
            <div class="modal-header">
                <h6 class="modal-title text-uppercase m-0" id="myExtraLargeModalLabel">Création de la nouvelle visite</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body p-3">
                <div class="row g-3">
                    <input type="text" name="visit_id" hidden>
                    <div class="col-md-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-dark">Nom complet du visiteur <sup class="text-danger">*</sup></label>
                                <input type="text" name="full_name" class="form-control border-dark">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark">Entreprise ou Adresse <sup class="text-danger">*</sup></label>
                                <input type="text" name="company_or_address" class="form-control border-dark">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark">Département <sup class="text-danger">(Optionnel)</sup></label>
                                <select class="form-select border-dark" name="department">
                                    <option value="" selected hidden></option>
                                    @foreach ($departments as $dept)
                                    <option value="{{ $dept->libelle }}">{{ $dept->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark">Type de visiteurs <sup class="text-danger">*</sup></label>
                                <select name="visitor_type" class="form-select border-dark">
                                    <option value="" selected hidden></option>
                                    @foreach ($visitorTypes as $vtype)
                                    <option value="{{ $vtype->libelle }}">{{ $vtype->libelle }}</option>
                                    @endforeach
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark">Motif de la visite <sup class="text-danger">*</sup></label>
                                <select name="purpose" class="form-select border-dark">
                                    <option value="" selected hidden></option>
                                    @foreach ($visitPurposes as $purpose)
                                    <option value="{{ $purpose->libelle }}">{{ $purpose->libelle }}</option>
                                    @endforeach
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark">Téléphone <sup class="text-danger">*</sup></label>
                                <input type="tel" name="contact_number" class="form-control border-dark" placeholder="+(243) 810000000">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark">Type de carte d'Identité<sup class="text-danger">*</sup></label>
                                <select class="form-select border-dark" name="id_proof_type">
                                    <option value="" selected hidden></option>
                                    @foreach ($profTypes as $ptype)
                                    <option value="{{ $ptype->libelle }}">{{ $ptype->libelle }}</option>
                                    @endforeach
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark">Numéro carte d'Identité <sup class="text-danger">*</sup></label>
                                <input type="text" name="id_proof_number" class="form-control border-dark">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label text-dark mb-2">Photo du visiteur<sup class="text-danger">(optionnel)</sup></label>
                        <div id="preview" class="rounded d-flex justify-content-center align-items-center border-dashed mb-2" style="height: 200px; width: 100%;">
                            <button type="button" onclick="removePic()" class="bg-danger-subtle border-0 thumb-sm rounded-circle d-none" id="btn-pic-clear">
                                <i class="fa fa-close text-danger fs-12"></i>
                            </button>
                        </div>
                        <input type="file" name="picture_url" id="picture" accept="image/*" hidden>
                        <div class="d-flex">
                            <button type="button" class="btn btn-dark btn-sm me-2 flex-fill" id="btn-upload"><i
                                    class="fa fa-upload me-1"></i>Charger</l>
                                <button type="button" class="btn btn-primary btn-sm flex-fill" id="btn-capture"><i
                                        class="fa fa-camera me-1"></i>Capturer</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label text-dark">Adresse email <sup class="text-danger">(optionnel)</sup></label>
                        <input type="email" name="email_address" class="form-control border-dark">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-dark">Numéro du véhicule<sup class="text-danger">(optionnel)</sup></label>
                        <input type="text" name="vehicle_number" class="form-control border-dark">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label text-dark">Entrée autorisée par <sup class="text-danger">*</sup></label>
                        <input type="text" name="entry_authorized_by" class="form-control border-dark">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label text-dark">Heure d'entrée <sup class="text-danger">*</sup></label>
                        <input type="time" name="time_in" id="time-in" class="form-control border-dark">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label text-dark">Heure de sortie</label>
                        <input type="time" name="time_out" id="time-out" class="form-control border-dark">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label text-primary">Durée de la visite</label>
                        <input type="text" name="stay_time" id="stay-time" class="form-control text-primary border-primary" disabled readonly>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label text-dark">Status</label>
                        <select name="status" class="form-select border-dark">
                            <option value="Pending" selected>En attente</option>
                            <option value="Approved">Approuvé</option>
                            <option value="Completed">Terminé</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-dark">Numéro carte de visite <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control border-dark" name="pass_number">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-dark">Nom de l'Hôte <sup class="text-danger">*</sup></label>
                        <input type="text" name="hostname" class="form-control border-dark" placeholder="ex: freddy">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label text-dark">Observation <sup class="text-danger">(optionnel)</sup></label>
                        <textarea name="remarks" class="form-control border-dark" placeholder="Saisir une obs.(optionnel)"></textarea>
                    </div>
                </div>
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary btn-sm">Valider & sauvegarder</button>
            </div><!--end modal-footer-->
        </form><!--end modal-content-->
    </div><!--end modal-dialog-->
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const openModalBtn = document.querySelector('[data-bs-target="#visit-create-modal"]');
        const form = document.getElementById("form-create");
        const modal = document.getElementById('visit-create-modal');
        const pictureInput = document.getElementById('picture');
        const preview = document.getElementById('preview');
        let timeInPicker, timeOutPicker;

        openModalBtn.addEventListener("click", function() {
            form.reset();
            removePic();
            const visitIdInput = form.querySelector('[name="visit_id"]');
            if (visitIdInput) visitIdInput.value = '';

            initFlatpickr();
        });

        modal.addEventListener('shown.bs.modal', function() {
            initFlatpickr();
            triggerUploadAndCapture();
            triggerSubmit();
            
        });
        setTimeout(()=>{
                triggerEdit();
            }, 1000)

        function initFlatpickr() {
            // Détruire d'abord les anciennes instances si elles existent
            if (timeInPicker) timeInPicker.destroy();
            if (timeOutPicker) timeOutPicker.destroy();

            // Recréer les instances
            timeInPicker = flatpickr("#time-in", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true,
                defaultDate: new Date()
            });

            timeOutPicker = flatpickr("#time-out", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true,
                defaultDate: null
            });
        }

        function triggerUploadAndCapture() {
            document.getElementById('btn-upload').addEventListener('click', () => pictureInput.click());

            pictureInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file?.type.startsWith('image/')) {
                    document.getElementById("btn-pic-clear").classList.remove("d-none");
                    const reader = new FileReader();
                    reader.onload = e => {
                        preview.style.backgroundImage = `url('${e.target.result}')`;
                        preview.style.backgroundSize = 'cover';
                        preview.style.backgroundPosition = 'center';
                    };
                    reader.readAsDataURL(file);
                }
            });

            document.getElementById('btn-capture').addEventListener('click', async function() {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({
                        video: true
                    });
                    const video = document.createElement('video');
                    video.srcObject = stream;
                    video.autoplay = true;
                    Object.assign(video.style, {
                        width: '100%',
                        height: '100%',
                        objectFit: 'cover'
                    });
                    preview.innerHTML = '';
                    preview.style.backgroundImage = '';
                    preview.appendChild(video);

                    const captureBtn = document.createElement('button');
                    captureBtn.className = 'btn btn-sm btn-danger position-absolute mt-2';
                    captureBtn.style.zIndex = 10;
                    captureBtn.innerText = 'Prendre la photo';
                    preview.appendChild(captureBtn);

                    captureBtn.addEventListener('click', function() {
                        const canvas = document.createElement('canvas');
                        canvas.width = video.videoWidth;
                        canvas.height = video.videoHeight;
                        canvas.getContext('2d').drawImage(video, 0, 0);

                        const imageData = canvas.toDataURL('image/png');
                        stream.getTracks().forEach(track => track.stop());
                        preview.innerHTML = '';
                        preview.style.backgroundImage = `url('${imageData}')`;

                        fetch(imageData).then(res => res.blob()).then(blob => {
                            const file = new File([blob], 'capture.png', {
                                type: 'image/png'
                            });
                            const dataTransfer = new DataTransfer();
                            dataTransfer.items.add(file);
                            pictureInput.files = dataTransfer.files;
                        });
                    });
                } catch (error) {
                    alert('Impossible d\'accéder à la caméra : ' + error.message);
                }
            });
        }

        function triggerSubmit() {
            form.addEventListener("submit", async function(e) {
                e.preventDefault();

                modal.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
                modal.querySelectorAll('.invalid-feedback').forEach(el => el.remove());

                const formData = new FormData(form);

                try {
                    const response = await fetch("{{ route('visit.create') }}", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (response.ok) {
                        bootstrap.Modal.getInstance(modal).hide();
                        form.reset();
                        removePic();
                        location.reload();
                    } else if (response.status === 422) {
                        for (const [field, messages] of Object.entries(data)) {
                            const fieldEl = modal.querySelector(`[name="${field}"]`);
                            if (fieldEl) {
                                fieldEl.classList.add('is-invalid');
                                const errorMsg = document.createElement('div');
                                errorMsg.className = 'invalid-feedback';
                                errorMsg.innerText = messages[0];
                                fieldEl.parentNode.appendChild(errorMsg);
                            }
                        }
                    } else {
                        console.error(data);
                        alert('Erreur inconnue. Veuillez réessayer.');
                    }
                } catch (error) {
                    console.error(error);
                    alert("Une erreur est survenue lors de l'enregistrement.");
                }
            });
        }

        function triggerEdit() {
            const preview = document.getElementById('preview');
            document.querySelectorAll(".btn-edit-visit").forEach(button => {
                button.addEventListener("click", function() {
                    const fields = {
                        full_name: 'full_name',
                        company_or_address: 'company_or_address',
                        department: 'department',
                        contact_number: 'contact_number',
                        email_address: 'email_address',
                        visitor_type: 'visitor_type',
                        id_proof_type: 'id_proof_type',
                        id_proof_number: 'id_proof_number',
                        vehicle_number: 'vehicle_number',
                        purpose: 'purpose',
                        time_in: 'time_in',
                        time_out: 'time_out',
                        stay_time: 'stay_time',
                        status: 'status',
                        pass_number: 'pass_number',
                        hostname: 'hostname',
                        entry_authorized_by: 'entry_authorized_by',
                        remarks: 'remarks'
                    };

                    for (const [dataKey, fieldName] of Object.entries(fields)) {
                        const field = form.querySelector(`[name="${fieldName}"]`);
                        if (field) field.value = this.dataset[dataKey] || '';
                    }

                    const visitIdInput = form.querySelector('[name="visit_id"]');
                    if (visitIdInput) visitIdInput.value = this.dataset.id || '';

                    preview.style.backgroundImage = `url('${this.dataset.picture_url}')`;
                    preview.style.backgroundSize = 'cover';
                    preview.style.backgroundPosition = 'center';
                    document.getElementById("btn-pic-clear").classList.remove("d-none");
                });
            });
        }

        function removePic() {
            document.getElementById("btn-pic-clear").classList.add("d-none");
            pictureInput.value = '';
            preview.style.backgroundImage = '';
        }
    });
</script>
@endpush