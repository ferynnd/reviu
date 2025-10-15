<x-layouts.app>
  <div class="flex min-h-screen items-center justify-center">
    <div class="mx-auto max-w-5xl h-screen w-full px-4 sm:px-6 lg:px-8 flex">
      <x-sidebar class="fixed left-0 top-0 h-screen"></x-sidebar>
      <main class="flex-1 overflow-y-auto ml-10">
        {{ $slot }}
      </main>
      <x-bottom-navigation class="fixed bottom-0 left-0 right-0 h-screen"></x-bottom-navigation>
    </div>
  </div>
</x-layouts.app>
