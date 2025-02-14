<x-guest-layout>
    <!-- Confirm Password Page -->
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="flex justify-center">
                <div class="w-12 h-12 rounded-full bg-black"></div>
            </div>

            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-gray-900">Confirm Password</h2>
                <p class="mt-2 text-sm text-gray-600">
                    This is a secure area of the application. Please confirm your password before continuing.
                </p>
            </div>

            <form class="mt-8 space-y-6" method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                        autocomplete="current-password" />
                    @if ($errors->has('password'))
                        <span class="text-sm text-red-600">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                    Confirm
                </button>
            </form>
        </div>
    </div>

</x-guest-layout>


{{-- <x-guest-layout>
    <!-- Confirm Password Page -->
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="flex justify-center">
                <div class="w-12 h-12 rounded-full bg-black"></div>
            </div>

            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-gray-900">Confirm Password</h2>
                <p class="mt-2 text-sm text-gray-600">
                    This is a secure area of the application. Please confirm your password before continuing.
                </p>
            </div>

            <form class="mt-8 space-y-6" method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"
                        autocomplete="current-password" />
                    @if ($errors->has('password'))
                        <span class="text-sm text-red-600">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                    Confirm
                </button>
            </form>
        </div>
    </div>

</x-guest-layout> --}}
