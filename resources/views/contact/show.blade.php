@extends('layouts')

@section('contant')
    <div class="col-md-6 mx-auto">
        <div class="card card-body mt-5">
            <h5>Contact Name : {{ $contact->name }}<h5>
                    <h5>Contact Email : {{ $contact->email }}<h5>
                            <h5>Contact Phone : {{ $contact->phone }}<h5>
                                    <h5>Contact address : {{ $contact->address }}<h5>
                                            <h5>Created at: {{ $contact->created_at }}<h5>
                                                    <a href="{{ route('contacts.index') }}"
                                                        class="btn btn-danger mt-2 w-100">Back To All Contacts</a>

        </div>
    </div>
@endsection
