<div class="min-h-screen bg-gray-100 flex items-center justify-center font-sans">
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
    <h1 class="text-2xl font-bold text-center mb-6">Login</h1>
    <form action="/login" method="post">
      <div class="mb-4">
        @csrf <label for="email" class="block text-gray-700 mb-2 font-medium">Username</label>
        <input type="username" id="username" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500" required>
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-700 mb-2 font-medium">Password</label>
        <input type="password" id="password" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500" required>
      </div>
      <div class="flex items-center justify-between mb-6">
        <!-- <div class="flex items-center">
          <input type="checkbox" id="remember" class="w-4 h-4 mr-2 text-blue-600 focus:ring-none rounded" checked>
          <label for="remember" class="text-gray-700 text-sm font-medium">Remember Me</label>
        </div> -->
        <a href="/forgotpassword" class="text-blue-500 hover:underline text-sm font-medium">Forgot Password?</a>
      </div>
      <button type="submit" class="w-full py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">Login</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  </div>
</div>
