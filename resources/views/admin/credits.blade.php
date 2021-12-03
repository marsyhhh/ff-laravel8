@extends('layouts.admin.app')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{ $tittle }}</h1>
          </div>
          <div class="section-body">
            <h2 class="section-title">{{ $tittle }}</h2>
            <p class="section-lead">Welcome</p>
            <div class="card">
              <div class="card-header">
                <h4>{{ $tittle }}</h4>
              </div>
              <div class="card-body">
                <p>{{ $body }}</p>
              </div>
              <div class="card-footer bg-whitesmoke">
                Developement by Marsyah Fajar
              </div>
            </div>
          </div>
        </section>
      </div>
    
@endsection