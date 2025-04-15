@extends("layouts.admin")


@section("content")
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row gap-0">
            <div class="col-sm-12">
                <div class="page-title-content d-sm-flex justify-content-sm-between align-items-center">
                    <h4 class="page-title mt-3 mt-md-0">Paramètres</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Visitors management</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item"><a href="#">Apps</a>
                            </li><!--end nav-item-->
                            <li class="breadcrumb-item active">Configs</li>
                        </ol>
                    </div>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</div><!--end page title-->

<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (session("success"))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div class="d-inline-flex justify-content-center align-items-center thumb-xxs bg-success rounded-circle mx-auto me-1">
                                <i class="fas fa-check align-self-center mb-0 text-white "></i>
                            </div>
                            <strong>Succès !</strong> {{ session("success") }} !
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="card bg-white">
                        <div class="card-header bg-primary">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title text-white">Motifs de visite</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-purpose" class="btn btn-sm btn-light"><i class="icofont-plus fs-9 me-1"></i>Nouveau motif</button>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <ul class="list-group list-group-flush">
                                @foreach ($visitPurposes as $purpose)
                                <li class="list-group-item  d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="la la-angle-double-right text-info me-2"></i> {{ $purpose->libelle }}
                                    </div>
                                    @if (Auth::user()->hasPermission("Delete"))
                                    <form action="{{ route('delete', ['table' => 'visit_purposes', 'val' => $purpose->id]) }}" method="GET" style="display: inline;">
                                        <button type="submit" class="btn btn-outline-danger border-0 btn-sm shadow-none rounded-pill" onclick="return confirm('Confirmer la suppression ?')">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </form>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div><!--end card-body-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-white">
                        <div class="card-header bg-primary">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title text-white">Départements</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-department" class="btn btn-sm btn-light"><i class="icofont-plus fs-9 me-1"></i>Nouveau département</button>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <ul class="list-group list-group-flush">
                                @foreach ($departments as $dept)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="la la-angle-double-right text-info me-2"></i> {{ $dept->libelle }}
                                    </div>
                                    @if (Auth::user()->hasPermission("Delete"))
                                    <form action="{{ route('delete', ['table' => 'departments', 'val' => $dept->id]) }}" method="GET" style="display: inline;">
                                        <button type="submit" class="btn btn-outline-danger border-0 btn-sm shadow-none rounded-pill" onclick="return confirm('Confirmer la suppression ?')">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </form>
                                    @endif
                                </li>
                                @endforeach

                            </ul>
                        </div><!--end card-body-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-white">
                        <div class="card-header bg-primary">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title text-white">Type de visiteurs</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-visitor-type" class="btn btn-sm btn-light"><i class="icofont-plus fs-9 me-1"></i>Nouveau Type de visiteur</button>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <ul class="list-group list-group-flush">
                                @foreach ($visitorTypes as $vtype)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="la la-angle-double-right text-info me-2"></i> {{ $vtype->libelle }}
                                    </div>
                                    @if (Auth::user()->hasPermission("Delete"))
                                    <form action="{{ route('delete', ['table' => 'visitor_types', 'val' => $vtype->id]) }}" method="GET" style="display: inline;">
                                        <button type="submit" class="btn btn-outline-danger border-0 btn-sm shadow-none rounded-pill" onclick="return confirm('Confirmer la suppression ?')">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </form>
                                    @endif
                                </li>
                                @endforeach

                            </ul>
                        </div><!--end card-body-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-white">
                        <div class="card-header bg-primary">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title text-white">Type de Pièce d'Identité</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-idprof" class="btn btn-sm btn-light"><i class="icofont-plus fs-9 me-1"></i>Nouveau Type pièce d'ID</button>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <ul class="list-group list-group-flush">
                                @foreach ($profTypes as $ptype)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="la la-angle-double-right text-info me-2"></i> {{ $ptype->libelle }}
                                    </div>
                                    @if (Auth::user()->hasPermission("Delete"))
                                    <form action="{{ route('delete', ['table' => 'prof_types', 'val' => $ptype->id]) }}" method="GET" style="display: inline;">
                                        <button type="submit" class="btn btn-outline-danger border-0 btn-sm shadow-none rounded-pill" onclick="return confirm('Confirmer la suppression ?')">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </form>
                                    @endif
                                </li>
                                @endforeach

                            </ul>
                        </div><!--end card-body-->
                    </div>
                </div>
            </div> <!-- end row -->
        </div><!-- container -->

        <!--Start Rightbar-->
        <div class="endbar-overlay d-print-none"></div>

        <x-config-modal id="purpose" title="Motif de visite" table="visit_purposes"></x-config-modal>
        <x-config-modal id="department" title="Département" table="departments"></x-config-modal>
        <x-config-modal id="idprof" title="Pièce d'Identité" table="prof_types"></x-config-modal>
        <x-config-modal id="visitor-type" title="Type de visiteur" table="visitor_types"></x-config-modal>

        <!--end Rightbar-->
        <!--Start Footer-->
        @include("components.footer")
        <!--end footer-->
    </div>
    <!-- end page content -->
</div>
@endsection