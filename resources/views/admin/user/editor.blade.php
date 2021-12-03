@extends('layouts.admin.app')

@section('content')
<div class="main-content" style="min-height: 530px;">
    <section class="section">
      <div class="section-header">
        <div class="section-header-back">
          <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>{{ $tittle }}</h1>
      </div>
      <div class="section-body">
        <h2 class="section-title">{{ $tittle }}</h2>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Write Your User</h4>
              </div>
              <form action="{{ $route }}" method="POST">
                @csrf
                @method($method)          
              <div class="card-body">
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="username" name="name" class="form-control" value="{{ @$user->name }}">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="email" name="email" class="form-control" value="{{ @$user->email }}">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="password" name="password" class="form-control" value="{{ @$user->password }}">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">{{ $tittle }}</button>
                  </div>                    
                </div>
              </div>
              </form>
            </div>
    </section>
</div>
@endsection