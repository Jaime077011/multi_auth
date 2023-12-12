@extends('layouts.admin')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4  max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Admin  Info</h2>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Admin Name</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $user->name }}</p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">email</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $user->email }}</p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">phone</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $user->phone }}</p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">Creatad At</h3>
                <p class="text-gray-500 dark:text-gray-400"> {{ \Carbon\Carbon::parse($user->created_at)->format('Y-m-d') }}</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Address</Address></h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $user->address }}</p>
            </div>

    </div>
  </section>

@endsection
