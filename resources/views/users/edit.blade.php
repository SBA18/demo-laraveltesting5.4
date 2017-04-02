@extends('layouts.app')

@section('style')

@endsection


@section('content')
<div class="container">
{{-- Carousel --}}



{{-- Bread --}}
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('user.profile', $user->id) }}">Profile</a></li>
              <li class="breadcrumb-item active">Profile Editing</li>
            </ol>
        </div>

{{-- Mainbody --}}
        <div class="col-sm-9">
          <div class="panel panel-default">
                <div class="panel-heading">Home</div>
                <div class="panel-body">
                    <form action="/profile" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                        </div>
                        
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required>
                        </div>

                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                        </div>

                        <button type="submit" class="btn btn-default">Update</button>
                    </form>

                </div>
            </div>
        </div>

{{-- Sidebar --}}
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">Sidebar</div>
                <div class="panel-body">
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quia amet nisi voluptates veniam sit ducimus debitis, odio accusamus, minima in quibusdam, praesentium consequatur. Eaque tempora facere, sint itaque aliquam.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection













