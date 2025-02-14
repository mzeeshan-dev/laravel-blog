<!-- Forgot Password Page -->
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div class="flex justify-center">
      <div class="w-12 h-12 rounded-full bg-black"></div>
    </div>
    
    <div class="text-center">
      <h2 class="mt-6 text-3xl font-bold text-gray-900">Forgot password?</h2>
      <p class="mt-2 text-sm text-gray-600">
        No worries, we'll send you reset instructions.
      </p>
    </div>

    <form class="mt-8 space-y-6">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
        <input id="email" name="email" type="email" required
               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"/>
      </div>

      <button type="submit"
              class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
        Reset password
      </button>

      <div class="text-center">
        <a href="#" class="font-medium text-purple-600 hover:text-purple-500">
          Back to sign in
        </a>
      </div>
    </form>
  </div>
</div>