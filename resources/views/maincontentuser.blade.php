@if (1==1)
  @include('userlist')
  @else
    <div class="min-h-screen bg-gray-100 flex flex-col items-center justify-center font-sans">
    @if(session('status'))
    <div class="alert alert-success p-4 bg-red-800 text-white">
        {{ session('status') }}
    </div>
  @endif
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
    <h1 class="text-2xl font-bold text-center mb-6">User Registration</h1>
    <form name="add-user-registration-post-form" id="add-user-registration-post-form" method="post" action="{{url('user-registration-store-form')}}">
      <div class="mb-4">
        @csrf
         <label for="username" class="block text-gray-700 mb-2 font-medium">Username</label>
        <input type="username" name="username" id="username" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500" required>
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-700 mb-2 font-medium">Password</label>
        <input type="password" name="password" id="password" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500" required>
      </div>
      <div class="mb-6">
        <label for="userrole" class="block text-gray-700 mb-2 font-medium">Choose a role:</label>
        <select type="text" name="userrole" id="userrole" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer" required>
          <option value="Company">Company</option>
          <option value="Client">Client</option>
          <!-- @foreach ($userssaved As $key => $value)
          <option value="{{$value->id}}">{{$value->username}}</option>
          @endforeach -->
        </select>
      </div>
      <button type="submit" class="w-full py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">Registration</button>
    </form>
  </div>
  </div>
    @endif
    
