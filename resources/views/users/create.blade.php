@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
<form class="form" method="post" action="{{ route('user.store') }}">
    @csrf
    @include('users._forms');
</form>
@endsection
