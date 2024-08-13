@extends('layouts')

@section('contant')
    <div class="col-md-6 mx-auto">
        <h3 class="mb-3 mt-3">Update Contact </h3>

        @if (session('sucess'))
            <div class="alert alert-success">
                {{ session('sucess') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card card-body">
            <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- Name --}}
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" class="form-control" placeholder="Enter Name" name="name"
                        aria-describedby="basic-addon1" value="{{ $contact->name }}">
                </div>
                {{-- Name --}}
                {{-- Email --}}
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Email</span>
                    <input type="email" class="form-control" placeholder="Enter Email Address" name="email"
                        aria-describedby="basic-addon2" value="{{ $contact->email }}">
                </div>
                {{-- Email --}}
                {{-- Phone --}}
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Phone</span>
                    <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone"
                        aria-describedby="basic-addon3" value="{{ $contact->phone }}">
                </div>
                {{-- Phone --}}
                {{-- Address --}}
                <div class="input-group mb-3">
                    <span class="input-group-text">Address</span>
                    <textarea class="form-control" rows="4" name="address" aria-label="With textarea">{{ $contact->address }}</textarea>
                </div>
                {{-- Address --}}
                <button type="submit" class="btn btn-primary mt-2 w-100">Update Contact</button>
                <a href="{{ route('contacts.index') }}" class="btn btn-danger mt-2 w-100">Back To All Contacts</a>

            </form>
        </div>
    </div>
@endsection
