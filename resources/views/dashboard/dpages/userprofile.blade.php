@extends('layouts.maindashboard')
@section('content')


<head>
    <link rel="stylesheet" href="{{ asset('userprofile.css') }}">
    <link rel="stylesheet" href="{{ asset('sidebar.css') }}">
    @section('title', 'User Profile')
</head>

<section class="">
    <div class="flex flex-col items-center justify-center" id="ipadpromarginleft" data-aos="fade-right">
        <div class="bg-[#18A14D] w-full p-6 rounded-lg shadow md:mt-0 max-w-3xl max-[1024px]:max-w-xl
           sm:p-8">
            <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                User Profile
            </h2>
            @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-0.5">
                {{session('success')}}
            </div>
            @endif
            <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5">
                <div>
                    <label class="block mb-2 text-sm font-medium text-white">Name</label>
                    <input type="text" name="name" id="name" value="{{ $name }}"
                        class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="" required disabled>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-white">Email
                        Address</label>
                    <input type="email" name="email" id="email" value="{{ $email }}"
                        class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="" required disabled>
                </div>
            </form>
            <div class="updateform">
                <h2 class="mt-5 mb-1 text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                    Edit User Profile
                </h2>
                @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-0.5">
                    {{session('error')}}</div>
                @endif
                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" method="post" action="{{route('edituserprofile')}}">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-white">Name</label>
                        <input type="text" name="name" id="name" placeholder="{{ $name }}"
                            class="bg-white border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                            required />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                        <input type="email" name="email" id="email" placeholder="{{ $email }}"
                            class="bg-white border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                            required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-white">Confirm Password</label>
                        <input type="password" name="password" id="password"
                            class="bg-white border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                            placeholder="" required />
                        <button type="submit"
                            class="mt-5 text-white bg-green-700 hover:bg-green-800 focus:ring-2 focus:outline-none focus:ring-white font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 border-2 border-white">Save
                            Changes</button>
                        <button type="button" id="clearbutton"
                            class="mt-5 text-white bg-green-700 hover:bg-green-800 focus:ring-2 focus:outline-none focus:ring-white font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 border-2 border-white">
                            Clear Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<script>
    document.getElementById("clearbutton").addEventListener("click", function() {
  const inputFields = document.querySelectorAll('.updateform input');
  inputFields.forEach(inputField => {
    inputField.value = '';
  });
});
</script>
@endsection