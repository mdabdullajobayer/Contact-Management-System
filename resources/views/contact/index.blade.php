@extends('layouts')

@section('contant')
    <div class="card mt-5 p-0">
        <div class="row">
            {{-- Notification --}}
            <div class="col-md-6 mx-auto">
                @if (session('sucess'))
                    <div class="alert alert-success m-2">
                        {{ session('sucess') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="m-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            {{-- Notification --}}
        </div>
        <div class="row p-2">
            <div class="col-md-3">
                <a href="{{ route('contacts.create') }}" class="btn btn-primary">Add New Contact</a>
            </div>

            <div class="col-md-5 mx-auto">
                <form method="GET" action="{{ route('contacts.index') }}" class="d-flex gap-2">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by name or email"
                            value="{{ request('search') }}">
                    </div>
                    <button type="submit" class="btn btn-secondary">Search</button>
                </form>
            </div>
            <div class="col-md-4">
                {{-- sort --}}
                <form method="GET" action="{{ route('contacts.index') }}" class="mb-3">
                    <div class="d-flex gap-2">
                        <select name="sort_by" class="form-select">
                            <option value="name_asc"
                                {{ request('sort_by') == 'name' && request('sort_order') == 'asc' ? 'selected' : '' }}>
                                Sort by Name
                            </option>
                            <option value="created_at_desc"
                                {{ request('sort_by') == 'created_at' && request('sort_order') == 'desc' ? 'selected' : '' }}>
                                Sort by Date
                            </option>
                        </select>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Apply</button>
                        </div>
                    </div>
                </form>
                {{-- Sort --}}
            </div>
        </div>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <td>SI No.</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Create</td>
                    <td>Action</td>
                <tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>{{ date('F jS, Y h:i:s', strtotime($contact->created_at)) }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{ route('contacts.show', $contact->id) }}"
                                    class="btn btn-warning btn-sm">Show</a>
                                <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>

                            </div>
                        </td>
                    <tr>
                @endforeach
            </tbody>
        </table>
        <div class="mx-auto">
            <style>
                .page-item.active .page-link {
                    background-color: #212529 !important;
                    border-color: #212529 !important;
                    color: #ffffff !important;
                }

                .page-link {
                    color: #212529 !important;
                }
            </style>
            {{ $contacts->links() }}
        </div>
    </div>
@endsection
