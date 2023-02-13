@extends('layouts.maindashboard')
@section('content')



<head>
    <link rel="stylesheet" href="{{ asset('userprofile.css') }}">
</head>

<section class="">
    <div class="flex flex-col items-center justify-center" id="ipadpromarginleft">
        <div class="bg-gradient-to-r from-green-200 via-green-400 to-green-600 w-full p-6 rounded-lg shadow md:mt-0 max-w-3xl max-[1024px]:max-w-xl bg-white
             sm:p-8">
            <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                Passsword Form
            </h2>
            @if (session('error'))
            <div class="text-red-500 text-md">
                {{ session('error') }}
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="passwordForm">
                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" method="POST" method="POST"
                    action="{{ route('updatepassword') }}">
                    @csrf
                    <div class="{{ $errors->has('current-password') ? ' has-error' : '' }}">
                        <label for="current-password" class="block mb-2 text-sm font-medium text-white">Current
                            Password</label>
                        <input input type="password" name="current-password" id="current-password"
                            class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required />
                        @if ($errors->has('current-password'))
                        <span class="help-block text-red-500 text-md">
                            <strong>{{ $errors->first('current-password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="{{ $errors->has('new-password') ? ' has-error' : '' }}">
                        <label for="new-password" class="block mb-2 text-sm font-medium text-white">New
                            Password</label>
                        <input type="password" name="new-password" id="new-password"
                            class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required />
                        @if ($errors->has('new-password'))
                        <span class="help-block text-red-500 text-md">
                            <strong>{{ $errors->first('new-password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <label for="new-password-confirm" class="block mb-2 text-sm font-medium text-white">New
                            Password</label>
                        <input type="password" name="new-password_confirmation" id="new-password-confirm"
                            class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required />
                        <div>
                            <button type="submit"
                                class="mt-5 text-white bg-green-700 hover:bg-green-800 focus:ring-2 focus:outline-none focus:ring-white font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700">Change
                                Password</button>
                            <button type="button" id="clearbutton"
                                class="mt-5 text-white bg-green-700 hover:bg-green-800 focus:ring-2 focus:outline-none focus:ring-white font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700">
                                Clear Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById("clearbutton").addEventListener("click", function() {
  const inputFields = document.querySelectorAll('.passwordForm input');
  inputFields.forEach(inputField => {
    inputField.value = '';
  });
  });
</script>

@endsection