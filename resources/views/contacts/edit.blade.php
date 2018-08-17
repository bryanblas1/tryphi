@extends('layouts.default')

@section('content')
<h3 class="page-title">Update Contact</h3>
<div>
    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
    @csrf
    @method('PUT')
        <div>
            <label for="name" class="control-label">Name*</label>
            <input type="text" name="name" value="{{ $contact->name or old('name') }}" placeholder='Name' />
            @if($errors->has('name'))
                <p>
                    {{ $errors->first('name') }}
                </p>
            @endif
        </div>
        <div>
            <label for="name" class="control-label">Email*</label>
            <input type="text" name="email" value="{{ $contact->email or old('email') }}" placeholder='Email' />
            @if($errors->has('email'))
                <p>
                    {{ $errors->first('email') }}
                </p>
            @endif
        </div>
        <div>
            <label for="name" class="control-label">Phone*</label>
            <input type="text" name="phone" value="{{ $contact->phone or old('phone') }}" placeholder='Phone' />
            @if($errors->has('phone'))
                <p>
                    {{ $errors->first('phone') }}
                </p>
            @endif
        </div>
        <div>
            <label for="name" class="control-label">Country</label>
            <input type="text" name="country" value="{{ $contact->country or old('country') }}" placeholder='Country' />
        </div>
        <div>
            <label for="name" class="control-label">City</label>
            <input type="text" name="city" value="{{ $contact->city or old('city') }}" placeholder='City' />
        </div>
        <div>
            <label for="name" class="control-label">State</label>
            <input type="text" name="state" value="{{ $contact->state or old('state') }}" placeholder='State' />
            @if($errors->has('state'))
                <p>
                    {{ $errors->first('state') }}
                </p>
            @endif
        </div>
        <div>
            <label for="name" class="control-label">Zip Code</label>
            <input type="text" name="zip" value="{{ $contact->zip or old('zip') }}" placeholder='Zip' />
        </div>
        <div>
            <input type="submit" name="Update" value="Update">
        </div>
    </form>
</div>
@endsection