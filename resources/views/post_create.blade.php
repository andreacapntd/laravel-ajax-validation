@extends('layouts.main_layout')

@section('content')

  <form action=" {{ route('post_store') }}" method="post">

    @csrf
    @method('POST')

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="title">TITLE</label>
        <input type="text" name="title" class="@error ('title') is-invalid @enderror form-control" id="title" value="{{ old('title')}}">
        @error('title')
          <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
          </span>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="text">TEXT</label>
        <input type="text" name="text" class="@error ('text') is-invalid @enderror form-control" id="text" value="{{ old('text')}}">
        @error('text')
          <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
          </span>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="category">CATEGORY</label>
        <input type="text" name="category" class="@error ('category') is-invalid @enderror form-control" id="category" value="{{ old('category')}}">
        @error('category')
          <span class="invalid-feedback" role="alert">
            <strong> {{ $message }} </strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-group">
      <label for="like">LIKE</label>
      <input type="number" name="like" class="@error ('like') is-invalid @enderror form-control" id="like" value="{{ old('like'), 0}}">
      @error('like')
        <span class="invalid-feedback" role="alert">
          <strong> {{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group">
      <label for="dislike">DISLIKE</label>
      <input type="number" name="dislike" class="@error ('dislike') is-invalid @enderror form-control" id="dislike" value="{{ old('dislike'), 0}}">
      @error('dislike')
        <span class="invalid-feedback" role="alert">
          <strong> {{ $message }}</strong>
        </span>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">CREATE</button>

  </form>
@endsection
