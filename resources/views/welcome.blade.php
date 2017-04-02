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
              <li class="breadcrumb-item"><a href="/">Home</a></li>
            </ol>
        </div>

{{-- Mainbody --}}
        <div class="col-sm-9">
          <div class="panel panel-default">
                <div class="panel-heading">Home</div>
                <div class="panel-body">
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quia amet nisi voluptates veniam sit ducimus debitis, odio accusamus, minima in quibusdam, praesentium consequatur. Eaque tempora facere, sint itaque aliquam.</p>
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
