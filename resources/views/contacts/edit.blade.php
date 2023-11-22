@extends('layouts.main')

@section('content')
<main class="py-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-title">
            <strong>Edit Contact</strong>
          </div>
          <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            @include('contacts._form')
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection