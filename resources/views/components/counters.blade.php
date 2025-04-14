<div class="card overflow-hidden">
    <div class="row g-0">
        <div class="col-md-6 col-lg-3 border-b border-e border-bo">
            <div class="card-body bg-info-subtle">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div class="d-flex">
                            <div class="bg-info text-white d-flex justify-content-center align-items-center thumb-md align-self-center  rounded-circle">
                                <i class="iconoir-calendar fs-20 align-self-center"></i>
                            </div>
                            <div class="flex-grow-1 text-truncate align-self-center ms-2">
                                <p class="text-dark mb-0 fw-semibold">Visiteurs journaliers</p>
                                <p class="mb-0 text-truncate fs-13 text-muted"><i class="las la-check-circle me-1 text-success"></i>Les visiteurs d'aujourd'hui</p>
                            </div><!--end media body-->
                        </div><!--end media-->
                    </div><!--end col-->
                    <div class="col-auto align-self-center">
                        <h4 class="text-dark mb-0 fw-semibold fs-22" id="daily-visits">00</h4>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div> <!--end col-->
        <div class="col-md-6 col-lg-3 border-b border-e border-bo">
            <div class="card-body bg-primary-subtle">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div class="d-flex">
                            <div class="bg-primary text-white d-flex justify-content-center align-items-center thumb-md align-self-center  rounded-circle">
                                <i class="iconoir-home-user fs-20 align-self-center"></i>
                            </div>
                            <div class="flex-grow-1 text-truncate align-self-center ms-2">
                                <p class="text-dark mb-0 fw-semibold">Les visiteurs actifs</p>
                                <p class="mb-0 text-truncate fs-13 text-muted"><span class="badge text-success border-0 bg-soft-success fs-9 px-2">Actif</span>Visiteurs à l'intérieur</p>
                            </div><!--end media body-->
                        </div><!--end media-->
                    </div><!--end col-->
                    <div class="col-auto align-self-center">
                        <h4 class="text-dark mb-0 fw-semibold fs-22" id="active-visitors">00</h4>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div> <!--end col-->
        <div class="col-md-6 col-lg-3 border-b border-e">
            <div class="card-body bg-info-subtle">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div class="d-flex">
                            <div class="bg-info text-white d-flex justify-content-center align-items-center thumb-md align-self-center  rounded-circle">
                                <i class="iconoir-community fs-20 align-self-center"></i>
                            </div>
                            <div class="flex-grow-1 text-truncate align-self-center ms-2">
                                <p class="text-dark mb-0 fw-semibold">Tous les visiteurs</p>
                                <p class="mb-0 text-truncate fs-13 text-muted">Total global</p>
                            </div><!--end media body-->
                        </div><!--end media-->
                    </div><!--end col-->
                    <div class="col-auto align-self-center">
                        <h4 class="text-dark mb-0 fw-semibold fs-22" id="all-visits">00</h4>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div> <!--end col-->
        <div class="col-md-6 col-lg-3 ">
            <div class="card-body bg-primary-subtle">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div class="d-flex">
                            <div class="bg-primary text-white d-flex justify-content-center align-items-center thumb-md align-self-center  rounded-circle">
                                <i class="fa fa-user fs-20 align-self-center"></i>
                            </div>
                            <div class="flex-grow-1 text-truncate align-self-center ms-2">
                                <p class="text-dark mb-0 fw-semibold">Utilisateurs</p>
                                <p class="mb-0 text-truncate fs-13 text-muted">Les utilisateurs du système</p>
                            </div><!--end media body-->
                        </div><!--end media-->
                    </div><!--end col-->
                    <div class="col-auto align-self-center">
                        <h4 class="text-dark mb-0 fw-semibold fs-22" id="users">00</h4>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div> <!--end col-->
    </div><!--end row-->
</div><!--end card-->

@push("scripts")
<script>
    document.addEventListener("DOMContentLoaded", function() {
        function updateCounts() {
            fetch('/counts')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('daily-visits').textContent = `${data.count.daily}`.padStart(2, '0');
                    document.getElementById('active-visitors').textContent = `${data.count.active}`.padStart(2, '0');
                    document.getElementById('all-visits').textContent = `${data.count.visitCount}`.padStart(2, '0');
                    document.getElementById('users').textContent = `${data.count.users}`.padStart(2, '0')
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des données :', error);
                });
        }

        // Appel initial
        updateCounts();

        // Mise à jour toutes les 5 secondes
        setInterval(updateCounts, 5000);
    });
</script>
@endpush