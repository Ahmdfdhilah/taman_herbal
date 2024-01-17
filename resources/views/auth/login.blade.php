@extends('layouts.client.app')

@section('content')
    <main class="relative w-full">
        <section class="bg-gray-50 dark:bg-gray-900 pt-8">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                         Login
                        </h1>
                        @error('loginError')
                            <div class="alert alert-danger">
                                <strong>Error</strong>
                                <p>{{ $message }}</p>
                            </div>
                        @enderror

                        <form method="post">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                    <div class="input-group-append">
                                        <div class="input-group-text" style="background-color: #CDA63C;">
                                            <span class="fas fa-envelope" style="color: white;"></span>
                                        </div>
                                    </div>
                                </div>
                                @error('email')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    <div class="input-group-append">
                                        <div class="input-group-text" style="background-color: #CDA63C;">
                                            <span class="fas fa-lock" style="color: white;"></span>
                                        </div>
                                    </div>
                                </div>
                                @error('password')
                                    <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-block"
                                    style="background-color: #CDA63C; color: white">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> 
    </main>
@endsection
