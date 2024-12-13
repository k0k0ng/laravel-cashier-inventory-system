<x-layout>
  <div class="w-full h-full flex flex-col gap-4 ">
    <div class="w-full h-full flex gap-4 ">
      <x-admin-sidebar />
      <div class="flex flex-col grow gap-4">
        <x-header />
        <div class="grid grid-cols-1 lg:grid-cols-2 grow gap-4 justify-center items-center text-white">
          <div class="h-full flex justify-center items-center border-2 border-pink-700 rounded-md">Graph 1</div>
          <div class="h-full flex justify-center items-center border-2 border-pink-700 rounded-md">Graph 2</div>
          <div class="h-full flex justify-center items-center border-2 border-pink-700 rounded-md">Graph 3</div>
          <div class="h-full flex justify-center items-center border-2 border-pink-700 rounded-md">Graph 4</div>
        </div>
      </div>
    </div>
    <x-footer />
  </div>

</x-layout>