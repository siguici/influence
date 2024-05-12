@extends('layouts.marque')

@section('title', 'Resultat de recherche')

@section('content')
     <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Resultat</h5>
            <p class="mb-0"></p>
            
            <div class="row">
                @forelse($resultats as $resultat)
                    <div class="col-sm-6 col-xl-3">
                        <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href="javascript:void(0)"><img src="/assets/images/profile/user-1.png" class="card-img-top rounded-0" alt="..."></a>
                            <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
                        <div class="card-body pt-3 p-4">
                            <h6 class="fw-semibold fs-4">{{ $resultat->firstname.' '.$resultat->lastname }} <br> <span class="badge bg-primary text-sm mt-2">{{ $resultat->category }}</span></h6>
                            <div class="d-flex align-items-center justify-content-between">
                                
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                @if($resultat->category === 'Nano-influenceur')
                                          <li><a class="me-1" href=""><i class="bi bi-star-fill text-warning"></i></a></li>
                                    @elseif($resultat->category === 'Micro-influenceur')
                                          <li><a class="me-1" href=""><i class="bi bi-star-fill text-warning"></i></a></li>
                                          <li><a class="me-1" href=""><i class="bi bi-star-fill text-warning"></i></a></li>
                                    @elseif($resultat->category === 'Macro-influenceur')
                                          <li><a class="me-1" href=""><i class="bi bi-star-fill text-warning"></i></a></li>
                                          <li><a class="me-1" href=""><i class="bi bi-star-fill text-warning"></i></a></li>
                                          <li><a class="me-1" href=""><i class="bi bi-star-fill text-warning"></i></a></li>
                                    @elseif($resultat->category === 'Influenceur star')
                                        <li><a class="me-1" href=""><i class="bi bi-star-fill text-warning"></i></a></li>
                                        <li><a class="me-1" href=""><i class="bi bi-star-fill text-warning"></i></a></li>
                                        <li><a class="me-1" href=""><i class="bi bi-star-fill text-warning"></i></a></li>
                                        <li><a class="me-1" href=""><i class="bi bi-star-fill text-warning"></i></a></li>
                                        
                                    @endif
                                </ul>
                              
                            </div>
                        </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-primary">Aucun résultat trouvé (0)</div>
                @endforelse
            </div>
           
        </div>

        {{ $resultats->links() }}
    </div>
@endsection