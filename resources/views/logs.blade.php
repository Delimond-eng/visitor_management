@extends("layouts.admin")

@section("content")
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row gap-0">
            <div class="col-sm-12">
                <div class="page-title-content d-sm-flex justify-content-sm-between align-items-center">
                    <h4 class="page-title mt-3 mt-md-0">Logs utilisateurs</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Historique des actions</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="datatable_logs">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Utilisateur</th>
                                    <th>Action</th>
                                    <th>IP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Rempli par JS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include("components.footer")
    </div>
</div>
@endsection

@push("styles")
<link href="assets/libs/simple-datatables/style.css" rel="stylesheet" type="text/css" />
@endpush
@push("scripts")
<script src="assets/libs/simple-datatables/umd/simple-datatables.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    fetch("{{ route('logs.json') }}")
        .then(response => response.json())
        .then(data => {
            const tbody = document.querySelector("#datatable_logs tbody");
            data.forEach(log => {
                const tr = document.createElement("tr");
                tr.innerHTML = `
                    <td>${log.timestamp ?? '-'}</td>
                    <td>${log.user_name ?? '-'}</td>
                    <td>${log.description ?? '-'}</td>
                    <td>${log.ip ?? '-'}</td>
                `;
                tbody.appendChild(tr);
            });

            // Activer SimpleDatatables
            new simpleDatatables.DataTable("#datatable_logs", {
                searchable: true,
                fixedHeight: false,
                labels: {
                    placeholder: "Recherche...",
                    perPage: "{select} résultats par page",
                    noRows: "Aucune donnée",
                    info: "Page {start} à {end} sur {rows} entrées"
                }
            });
        })
        .catch(err => console.error("Erreur chargement logs:", err));
});
</script>
@endpush
