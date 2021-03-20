@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Contacts <strong>--> {{ $contact->Nombre }}</strong></div>
                    <div class="card-body">

                        <a href="{{ url('/contacts') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/contacts/' . $contact->id . '/edit') }}" title="Edit Contact"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('contacts' . '/' . $contact->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                   <tr><th>Nombre</th>
                                    <td>{{ $contact->Nombre }}</td></tr>
                                    <tr><th>Apellido </th>
                                    <td> {{ $contact->Apellido }} </td>
                                    </tr><tr><th> Sexo</th>
                                    <td> {{ $contact->Sexo }} </td></tr>
                                    <tr><th>Telefono</th>
                                        <td>{{ $contact->Telefono }}</td>
                                    </tr>
                                    <tr><th>Correo</th>
                                        <td>{{ $contact->Correo }}</td>
                                    </tr>
                                    <tr><th>Casado</th>
                                        <td>{{ $contact->Casado }}</td>
                                    </tr>
                                    <tr><th>Fecha de Nacimiento</th>
                                        <td>{{ $contact->FechaNacimiento }}</td>
                                    </tr>
                                    </tr>
                                    <tr><th>Fecha de Creacion</th>
                                        <td>{{ $contact->created_at }}</td>
                                    </tr>
                                    <tr><th>Fecha de actulizacion</th>
                                        <td>{{ $contact->updated_at }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
