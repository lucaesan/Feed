@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
<form class="form" method="POST" action="{{ route('user.update', $user->id) }}">
    @csrf
    @method('PUT')
    @include('users._forms')
</form>
@endsection