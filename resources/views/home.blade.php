@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>


        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum repellendus dolores, error? Cumque ipsam magnam doloremque commodi molestiae placeat, quas tempore totam est repudiandae mollitia optio hic autem officiis officia!</p>
                </div>
            </div>
        </div>
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
