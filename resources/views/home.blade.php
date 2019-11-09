@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(isset($token))
                      <p> {{$token}} </p>
                    @endif   
                    <form action="{{route('refresh')}}" method="post">
                         {{csrf_field()}}
                        <button type="submit" class="btn btn-primary">Regenerate Token</button>
                     </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
