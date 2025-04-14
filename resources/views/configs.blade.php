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
                <div class="col-md-6">
                    <div class="card h-full">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Motifs de visite</h4>
                                </div><!--end col-->
                                <div class="col-auto"> 
                                    <button type="button" class="btn btn-sm btn-primary"><i class="icofont-plus fs-9 me-1"></i>Nouveau motif</button>
                                </div><!--end col-->
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <ul class="list-group">
                                @foreach ($visitPurposes as $purpose)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                    <i class="la la-angle-double-right text-info me-2"></i> {{ $purpose->libelle }}
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-light shadow-none"><i class="fa fa-trash-alt"></i></a>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div><!--end card-body--> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Départements</h4>
                                </div><!--end col-->
                                <div class="col-auto"> 
                                    <button type="button" class="btn btn-sm btn-primary"><i class="icofont-plus fs-9 me-1"></i>Nouveau département</button>
                                </div><!--end col-->
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <ul class="list-group">
                                @foreach ($departments as $dept)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                    <i class="la la-angle-double-right text-info me-2"></i> {{ $dept->libelle }}
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-light shadow-none"><i class="fa fa-trash-alt"></i></a>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div><!--end card-body--> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Type de visiteurs</h4>
                                </div><!--end col-->
                                <div class="col-auto"> 
                                    <button type="button" class="btn btn-sm btn-primary"><i class="icofont-plus fs-9 me-1"></i>Nouveau Type de visiteur</button>
                                </div><!--end col-->
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <ul class="list-group">
                                @foreach ($visitorTypes as $vtype)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                    <i class="la la-angle-double-right text-info me-2"></i> {{ $vtype->libelle }}
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-light shadow-none"><i class="fa fa-trash-alt"></i></a>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div><!--end card-body--> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Type de Pièce d'Identité</h4>
                                </div><!--end col-->
                                <div class="col-auto"> 
                                    <button type="button" class="btn btn-sm btn-primary"><i class="icofont-plus fs-9 me-1"></i>Nouveau Type pièce d'ID</button>
                                </div><!--end col-->
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <ul class="list-group">
                                @foreach ($profTypes as $ptype)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                    <i class="la la-angle-double-right text-info me-2"></i> {{ $ptype->libelle }}
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-light shadow-none"><i class="fa fa-trash-alt"></i></a>
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

        

        <!--end Rightbar-->
        <!--Start Footer-->
        @include("components.footer")
        <!--end footer-->
    </div>
    <!-- end page content -->
</div>
@endsection