<!-- Sidebar for desktop -->
<aside class="hidden md:flex flex-col justify-between h-screen lg:min-w-2/5 min-w-[45%] text-white px-6 py-8 border-r border-gray-700 ">
  <!-- Logo -->
  <div class="flex flex-col gap-8 w-full lg:w-[90%]">
    <div>
      <img class="h-12 object-contain" src="{{ asset('assets/logo.png') }}" alt="Reviu">
    </div>

    <!-- Navigation -->
    <nav class="flex flex-col gap-2">
      <a href="#" style="padding-block: 0.8rem; padding-inline:1rem;" class="flex items-center gap-3 rounded-sm text-base font-medium text-gray-300 hover:text-sky-400 hover:bg-sky-600/20 group active:text-sky-500 transition">
        <i class="fa-solid fa-house text-white group-hover:text-sky-400 group-active:text-sky-500"></i>
        <span>Home</span>
      </a>

      <a href="#" style="padding-block: 0.8rem; padding-inline:1rem;" class="flex items-center gap-3 rounded-sm text-base font-medium text-gray-300 hover:text-sky-400 hover:bg-sky-600/20 group active:text-sky-500 transition">
        <i class="fa-solid fa-calendar text-white group-hover:text-sky-400 group-active:text-sky-500"></i>
        <span>Calendar</span>
      </a>

      <a href="#" style="padding-block: 0.8rem; padding-inline:1rem;" class="flex items-center gap-3 rounded-sm text-base font-medium text-gray-300 hover:text-sky-400 hover:bg-sky-600/20 group active:text-sky-500 transition">
        <i class="fa-solid fa-user text-white group-hover:text-sky-400 group-active:text-sky-500"></i>
        <span>Profile</span>
      </a>

      @role('superadmin')
      <a href="#" style="padding-block: 0.8rem; padding-inline:1rem;" class="flex items-center gap-3 rounded-sm text-base font-medium text-gray-300 hover:text-sky-400 hover:bg-sky-600/20 group active:text-sky-500 transition">
        <i class="fa-solid fa-user-group text-white group-hover:text-sky-400 group-active:text-sky-500"></i>
        <span>User</span>
      </a>
      @endrole

      @role('staff')
      <!-- Post Button -->
      <button class="mt-6 w-full flex items-center gap-3 justify-center rounded-lg bg-gradient-to-b from-cyan-400 to-sky-500 hover:from-sky-500 hover:to-blue-600 px-4 py-4 font-semibold text-white shadow-md transition">
        <i class="fa-solid fa-rocket text-xl"></i>
        Post Content
      </button>
      @endrole
    </nav>
  </div>

  <!-- User Profile -->
  <div style="padding-top: 1.5rem;" class="border-t border-white/20 w-[90%] flex items-center justify-between">
    <div class="flex items-center gap-3">
      <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="" class="w-10 h-10 rounded-full object-cover">
      <div>
        <p class="text-sm font-semibold">Yola Septia</p>
        <p class="text-xs text-gray-400">@ysaptia</p>
      </div>
    </div>
    <button class="bg-sky-500 hover:bg-sky-600 px-5 py-3 rounded-lg text-white">
      <i class="fa-solid fa-right-from-bracket"></i>
    </button>
  </div>
</aside>