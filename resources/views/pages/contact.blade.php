@extends('main')
@section('title', 'contact')
@section('content')
    <div class="wrraper">
        <x-heading class="pt-4 semi-bold text-center">Contact Us</x-heading>
        <hr class="h-px my-2" />
        <div class="contact p-10 border-b-[1px]">
          @include("components.contact.contact_form")
        </div>
    </div>
@endsection
