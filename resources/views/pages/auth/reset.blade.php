<!-- Reset Password Page -->
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div class="flex justify-center">
      <div class="w-12 h-12 rounded-full bg-black"></div>
    </div>
    
    <div class="text-center">
      <h2 class="mt-6 text-3xl font-bold text-gray-900">Set new password</h2>
      <p class="mt-2 text-sm text-gray-600">
        Must be at least 8 characters long
      </p>
    </div>

    <form class="mt-8 space-y-6">
      <div class="space-y-4">
        <div>
          <label for="new-password" class="block text-sm font-medium text-gray-700">New password</label>
          <input id="new-password" name="new-password" type="password" required
                 class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"/>
        </div>

        <div>
          <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm password</label>
          <input id="confirm-password" name="confirm-password" type="password" required
                 class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"/>
        </div>
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