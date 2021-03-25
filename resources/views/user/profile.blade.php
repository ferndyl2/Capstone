@extends('templates.main')

@section('content')
    <h1>Update Profile</h1>
    <form method="post" action="{{ route('user-profile-information.update')}}">
        @csrf
        @method("PUT")
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name" value="{{ auth()->user()->name}}">
            @error('name')
            <span class="invalid-feedback" role="alert">
                {{$message}}
            </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ auth()->user()->email}}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                {{$message}}
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection 