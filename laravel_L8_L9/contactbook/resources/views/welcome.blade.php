@extends('layout.master')

@section('contacts')
    <h2>Contacts</h2>
    <div class="contacts">
        @foreach($contacts as $contact)
            <x-contact :contact="$contact"></x-contact>
            {{-- If we use ":" it will be variable if we don't use It will not be var --}}
        @endforeach
    </div>
@endsection

