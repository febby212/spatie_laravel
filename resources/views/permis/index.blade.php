
@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Role Management
                    <div class="float-end">
                        @can('role-create')
                            <a class="btn btn-success" href="{{ route('permis.create') }}"> Create New Role</a>
                        @endcan
                    </div>
                </h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-hover">
        <tr>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($permission as $permis)
            <tr>
                <td>{{ $permis->name }}</td>
                <td>
                    <form action="{{ route('permis.destroy', $permis->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('permis.show', $permis->id) }}">Show</a>
                        @can('permis-edit')
                            <a class="btn btn-primary" href="{{ route('permis.edit', $permis->id) }}">Edit</a>
                        @endcan


                        @csrf
                        @method('DELETE')
                        @can('permis-delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{-- {!! $permission->render() !!} --}}
@endsection
