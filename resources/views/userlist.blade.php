<div class="min-h-screen flex m-2 mb-2 justify-center font-sans">
      <div class="grid grid-cols-3 pt-2 h-max gap-1">
      @foreach ($userssaved As $key => $value)
          

    <div class="relative flex bg-clip-border rounded-xl bg-white text-gray-700 shadow-md w-max h-36 flex-row">
  <span
    class="relative h-full m-0 overflow-hidden text-gray-700 bg-white rounded-r-none bg-clip-border rounded-xl shrink-0">
    <img
      src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D"
      alt="card-image" class="object-cover w-full h-full" />
  </span>
  <span class="p-6 text-left">

    <h6
      class="block mb-4 font-sans text-base antialiased font-semibold leading-relaxed tracking-normal text-gray-700 uppercase">
      {{$value->username}}
    </h6>
    <h4 class="block mb-2 ml-2 font-sans text-base antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
      miketyson644@gmail.com
    </h4>
    <a href="/usermanagement/{{$value->id}}/edit" class="inline-block items-right"><button
        class="flex gap-2 px-6 py-3 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-gray-900/10 active:bg-gray-900/20"
        type="button">
        EDIT<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
          stroke-width="2" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
        </svg></button></a>
        <a href="/usermanagement/delete/{{$value->id}}" class="inline-block"><button
        class="flex text-right gap-2 px-6 py-3 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-gray-900/10 active:bg-gray-900/20"
        type="button">
        DELETE<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
          stroke-width="2" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
        </svg></button></a>
  </span>
  
</div>  
@endforeach


</div>
    </div>