    <!-- Bottom Navigation for mobile -->
  <nav class="fixed bottom-0 left-0 right-0 md:hidden bg-slate-900 border-t border-gray-700 flex justify-around items-center text-white shadow-inner h-16">
    <a href="#" class="flex flex-col gap-1.5 items-center group active:text-sky-400 text-gray-300 hover:text-sky-400">
      <i class="fa-solid fa-house text-xl"></i>
      <span class="text-xs">Home</span>
    </a>
    <a href="#" class="flex flex-col gap-1.5 items-center group active:text-sky-400 text-gray-300 hover:text-sky-400">
      <i class="fa-solid fa-calendar text-xl"></i>
      <span class="text-xs">Calendar</span>
    </a>
    @role('staff')
    <a href="#" class="flex flex-col gap-1.5 items-center group active:text-sky-400 text-gray-300 hover:text-sky-400">
      <i class="fa-solid fa-rocket text-xl"></i>
      <span class="text-xs">Upload</span>
    </a>
    @endrole
    {{-- @role('superadmin') --}}
    <a href="#" class="flex flex-col gap-1.5 items-center group active:text-sky-400 text-gray-300 hover:text-sky-400">
      <i class="fa-solid fa-user-group text-xl"></i>
      <span class="text-xs">User</span>
    </a>
    {{-- @endrole --}}
    <a href="#" class="flex flex-col gap-1.5 items-center group active:text-sky-400 text-gray-300 hover:text-sky-400">
      <i class="fa-solid fa-user text-xl"></i>
      <span class="text-xs">Profile</span>
    </a>
  </nav>