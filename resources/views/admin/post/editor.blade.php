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
                <h4>Write Your Post</h4>
              </div>
              <form action="{{ $route }}" method="POST">
                @csrf
                @method($method)          
              <div class="card-body">
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="tittle" class="form-control" value="{{ @$post->tittle }}">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="slug" class="form-control" value="{{ @$post->slug }}">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Excerpt</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="excerpt" class="form-control" value="{{ @$post->excerpt }}">
                  </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Body</label>
                    <div class="col-sm-12 col-md-7">
                      <textarea name="body" class="summernote-simple">{{ @$post->body }}</textarea>
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