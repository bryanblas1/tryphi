@extends('layouts.default')

@section('content')
    <h3 class="page-title">Contacts</h3>
    <a href="{{ route('contacts.create') }}">Add Contacts</a>
    <div>
        <form >
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Country</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Action</th>
            </tr>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->country }}</td>
                <td>{{ $contact->city }}</td>
                <td>{{ $contact->state }}</td>
                <td>{{ $contact->zip }}</td>
                <td>
                    <a href="{{ route('contacts.edit',[$contact->id]) }}" >Edit
                    <input type="button" name="delete" value="Delete">
                </td>
            </tr>
            @endforeach
        </table>
    </div>
 @endsection
