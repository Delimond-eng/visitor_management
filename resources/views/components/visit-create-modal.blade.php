@push("styles")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
<div class="modal fade visit-create-modal" id="visit-create-modal" tabindex="-1" aria-labelledby="visitCreateModal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title text-uppercase m-0" id="myExtraLargeModalLabel">Création de la nouvelle visite</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body p-3">
                <div class="row g-3">
                    <div class="col-md-10">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-dark" >Nom complet du visiteur <sup class="text-danger">*</sup></label>
                                <input type="text" name="full_name" class="form-control border-dark">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark" >Entreprise ou Adresse <sup class="text-danger">*</sup></label>
                                <input type="text" name="company_or_address" class="form-control border-dark">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark" >Département <sup class="text-danger">(Optionnel)</sup></label>
                                <select class="form-select border-dark" name="dept_id">
                                    <option value="" selected hidden></option>
                                    @foreach ($departments as $dept)
                                        <option value="{{ $dept->libelle }}">{{ $dept->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark" >Type de visiteurs <sup class="text-danger">*</sup></label>
                                <select name="id_proof_type" class="form-select border-dark">
                                    <option value="" selected hidden></option>
                                    @foreach ($visitorTypes as $vtype)
                                        <option value="{{ $vtype->libelle }}">{{ $vtype->libelle }}</option>
                                    @endforeach
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark" >Motif de la visite <sup class="text-danger">*</sup></label>
                                <select name="purpose" class="form-select border-dark">
                                    <option value="" selected hidden></option>
                                    @foreach ($visitPurposes as $purpose)
                                        <option value="{{ $purpose->libelle }}">{{ $purpose->libelle }}</option>
                                    @endforeach
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark" >Téléphone <sup class="text-danger">*</sup></label>
                                <input type="tel" name="contact_number" class="form-control border-dark" placeholder="+(243) 810000000">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark" >Type de carte d'Identité<sup class="text-danger">*</sup></label>
                                <select class="form-select border-dark" name="id_proof_number">
                                    <option value="" selected hidden></option>
                                    @foreach ($profTypes as $ptype)
                                        <option value="{{ $ptype->libelle }}">{{ $ptype->libelle }}</option>
                                    @endforeach
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark" >Numéro carte d'Identité <sup class="text-danger">*</sup></label>
                                <input type="text" name="id_proof_number" class="form-control border-dark">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label text-dark mb-2" >Photo du visiteur<sup class="text-danger">(optionnel)</sup></label>
                        <div id="preview" class="rounded d-flex justify-content-center align-items-center border-dashed mb-2" style="height: 200px; width: 100%;">
                            <button onclick="removePic()" class="bg-danger-subtle border-0 thumb-sm rounded-circle d-none" id="btn-pic-clear">                                                    
                                <i class="fa fa-close text-danger fs-12"></i>
                            </button>
                        </div>
                        <input type="file" name="picture_url" id="picture" accept="image/*" hidden>
                        <div class="d-flex">
                            <button class="btn btn-dark btn-sm me-2 flex-fill" id="btn-upload"><i
                                    class="fa fa-upload me-1"></i>Charger</l>
                                <button class="btn btn-primary btn-sm flex-fill" id="btn-capture"><i
                                        class="fa fa-camera me-1"></i>Capturer</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label text-dark" >Adresse email <sup class="text-danger">(optionnel)</sup></label>
                        <input type="email" name="email_address" class="form-control border-dark">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-dark" >Numéro du véhicule<sup class="text-danger">(optionnel)</sup></label>
                        <input type="text" name="vehicle_number" class="form-control border-dark">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label text-dark" >Entrée autorisée par <sup class="text-danger">*</sup></label>
                        <input type="text" name="entry_authorized_by" class="form-control border-dark">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label text-dark" >Heure d'entrée <sup class="text-danger">*</sup></label>
                        <input type="time" name="time_in" id="time-in" class="form-control border-dark">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label text-dark" >Heure de sortie</label>
                        <input type="time" name="time_out" id="time-out" class="form-control border-dark">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label text-dark" >Durée de la visite</label>
                        <input type="text" name="stay-time" id="stay-time" class="form-control border-dark" disabled readonly>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label text-dark" >Status</label>
                        <select name="status" class="form-select border-dark">
                            <option value="Pending" selected>En attente</option>
                            <option value="Approved">Approuvé</option>
                            <option value="Completed">Terminé</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-dark" >Numéro carte de visite <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control border-dark" name="pass_number">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-dark" >Nom de l'Hôte <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control border-dark" placeholder="ex: freddy">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label text-dark" >Observation <sup class="text-danger">(optionnel)</sup></label>
                        <textarea name="remarks" class="form-control border-dark" placeholder="Saisir une obs.(optionnel)"></textarea>
                    </div>
                </div>
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary btn-sm">Valider & sauvegarder</button>
            </div><!--end modal-footer-->
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#time-in", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
            defaultDate: new Date() // ⏰ heure courante
        });

        flatpickr("#time-out", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
            defaultDate:null,
            // Pas de defaultDate ici, sauf si tu veux une heure fixe
        });
        const myModal = document.getElementById('visit-create-modal');
        myModal.addEventListener('shown.bs.modal', function() {
            triggerUploadAndCapture();
        });

        function triggerUploadAndCapture() {
            document.getElementById('btn-upload').addEventListener('click', function() {
                document.getElementById('picture').click();
            });

            document.getElementById('picture').addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file && file.type.startsWith('image/')) {
                    document.getElementById("btn-pic-clear").classList.remove("d-none");
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const preview = document.getElementById('preview');
                        preview.style.backgroundImage = `url('${e.target.result}')`;
                        preview.style.backgroundSize = 'cover';
                        preview.style.backgroundPosition = 'center';
                    };
                    reader.readAsDataURL(file);
                }
            });

            let stream;
            document.getElementById('btn-capture').addEventListener('click', async function() {
                const preview = document.getElementById('preview');

                // Demande l'accès à la caméra
                try {
                    stream = await navigator.mediaDevices.getUserMedia({
                        video: true
                    });

                    // Préparation de la vidéo
                    const video = document.createElement('video');
                    video.srcObject = stream;
                    video.autoplay = true;
                    video.style.width = '100%';
                    video.style.height = '100%';
                    video.style.objectFit = 'cover';

                    preview.innerHTML = '';
                    preview.style.backgroundImage = ''; // retire l'image précédente
                    preview.appendChild(video);

                    // Ajoute bouton capture
                    const captureBtn = document.createElement('button');
                    captureBtn.className = 'btn btn-sm btn-danger position-absolute mt-2';
                    captureBtn.style.zIndex = 10;
                    captureBtn.innerText = 'Prendre la photo';
                    preview.appendChild(captureBtn);

                    captureBtn.addEventListener('click', function() {
                        const canvas = document.createElement('canvas');
                        canvas.width = video.videoWidth;
                        canvas.height = video.videoHeight;
                        const ctx = canvas.getContext('2d');
                        ctx.drawImage(video, 0, 0);

                        const imageData = canvas.toDataURL('image/png');
                        // Arrête la caméra
                        stream.getTracks().forEach(track => track.stop());

                        // Affiche l'image capturée en fond
                        preview.innerHTML = '';
                        preview.style.backgroundImage = `url('${imageData}')`;

                        // Injecte le fichier dans input[type=file]
                        fetch(imageData)
                            .then(res => res.blob())
                            .then(blob => {
                                const file = new File([blob], 'capture.png', {
                                    type: 'image/png'
                                });
                                const dataTransfer = new DataTransfer();
                                dataTransfer.items.add(file);
                                document.getElementById('picture').files = dataTransfer.files;
                            });
                    });

                } catch (error) {
                    alert('Impossible d\'accéder à la caméra : ' + error.message);
                }
            });
        }
    });

    function removePic(){
        document.getElementById("btn-pic-clear").classList.add("d-none");
        document.getElementById('picture').value = '';
        const preview = document.getElementById('preview');
        preview.style.backgroundImage = '';
    }
</script>
@endpush