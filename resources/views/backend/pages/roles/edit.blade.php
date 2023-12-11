






@extends('layouts.admin')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Role</h2>
        <form action={{ route('dashboard.roles.update', $role->id) }} method="post" >
            @csrf
            @method('PUT')
            @include('backend.pages.roles._form',['button_name'=>'Update'])


        </form>
    </div>
  </section>
@endsection
