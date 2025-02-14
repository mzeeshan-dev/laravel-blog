<!-- Verify Page -->
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div class="flex justify-center">
      <div class="w-12 h-12 rounded-full bg-black"></div>
    </div>
    
    <div class="text-center">
      <h2 class="mt-6 text-3xl font-bold text-gray-900">Two-factor authentication</h2>
      <p class="mt-2 text-sm text-gray-600">
        We sent a code to<br/>
        <span class="font-medium text-gray-900">example@email.com</span>
      </p>
    </div>

    <form class="mt-8 space-y-6">
      <div class="flex justify-center space-x-4">
        <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric"
               class="w-12 h-12 text-center text-2xl border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"/>
        <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric"
               class="w-12 h-12 text-center text-2xl border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"/>
        <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric"
               class="w-12 h-12 text-center text-2xl border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"/>
        <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric"
               class="w-12 h-12 text-center text-2xl border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"/>
        <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric"
               class="w-12 h-12 text-center text-2xl border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"/>
        <input type="text" maxlength="1" pattern="[0-9]" inputmode="numeric"
               class="w-12 h-12 text-center text-2xl border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500"/>
      </div>

      <button type="submit"
              class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
        Verify
      </button>

      <div class="text-center space-y-2">
        <div class="text-sm">
          <span class="text-gray-600">Didn't receive the code?</span>
          <button type="button" class="font-medium text-purple-600 hover:text-purple-500">
            Click to resend
          </button>
        </div>
        <a href="#" class="block text-sm font-medium text-purple-600 hover:text-purple-500">
          Back to sign in
        </a>
      </div>
    </form>
  </div>
</div>