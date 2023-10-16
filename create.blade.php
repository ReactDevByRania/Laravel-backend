@extends('admin.admin_dashboard')
@section('content')

<div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <div class="col-sm-7">
                          <h3>Edit Rendez_vous
                            <a href="{{ route('rendu_vous.create') }}" class="btn btn-primary btn-sm text-white float-end">
                                Back
                            </a>    
                          </h3>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-warning">
                              @foreach($errors->all() as $error)
                              <div>{{$error}}</div>
                              @endforeach
                            </div>
                            @endif
                            <form action="{{ route('rendu_vous.store') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <h4 class="nav-link active" id="details-tab" data-toggle="tab" role="tab" aria-controls="Details" aria-selected="true">Details :</h4>
  </li>
  <li class="nav-item">
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="mb-3">
    <label for="name">ID_Rendez_vous</label>
    <input type="text" name="ID_Rendu_vous" id="ID_Rendu_vous" class="form-control">
  </div>
  <div class="mb-3">
    <label for="client_id">Client_ID</label>
    <input type="number" name="client_id" id="client_id" class="form-control">
  </div>
  <div class="mb-3">
    <label for="date">Date</label>
    <input type="date" name="date" id="date" class="form-control">
    @error('date')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
  <div class="mb-3">
    <label for="time">Time</label>
    <input type="time" name="time" id="time" class="form-control">
    @error('time')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
</div>
  
</div>
                          <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                          </form>
                      </div>
                    </div>
                  </div>

@endsection