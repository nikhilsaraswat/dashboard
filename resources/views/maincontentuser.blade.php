<div class="grid grid-cols-12">
    <div class="col-span-2 p-4 bg-slate-200 items-center">
        <ul class=" p-4 h-screen ">
        <li class="bg-white rounded-lg p-4 mb-2 cursor-pointer"><i class="fa-solid fa-list"></i>User List</li>
        <li class="bg-white rounded-lg p-4 mb-2 cursor-pointer">Create User</li>
        <li class="bg-white rounded-lg p-4 mb-2 cursor-pointer">Profile</li>
        <li class="bg-white rounded-lg p-4 mb-2 cursor-pointer">Setting</li>
        <li class="bg-white rounded-lg p-4 cursor-pointer ">Logout</li>
        </ul>
    </div>
    <div class="col-span-10">
    <div class="min-h-screen bg-gray-100 flex items-center justify-center font-sans">
    @if(session('status'))
    <div class="alert alert-success">
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
        <select type="text" name="userrole" id="userrole" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500" required>
        <option value="Super Admin">Super Admin</option>
          <option value="Users">Users</option>
          <option value="Company">Company</option>
          <option value="Client">Client</option>
        </select>
      </div>
      <button type="submit" class="w-full py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">Registration</button>
    </form>
  </div>
</div>
</div>
