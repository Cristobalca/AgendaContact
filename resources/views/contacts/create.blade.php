@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            {{-- @include('admin.sidebar') --}}
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Contact</div>
                    <div class="card-body">
                        <a href="{{ url('/contacts') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/contacts') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('contacts.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
