<x-layout>
  <div class="h-full flex flex-col justify-center bg-slate-200 md:bg-transparent text-gray-800 md:p-4">
    <div class="max-w-md w-full mx-auto bg-slate-200 border md:border-gray-300 md:rounded-2xl p-8">
      <div class="text-center mb-16 md:mb-12">
        <h1 class="font-bold text-2xl ">Create Accouunt</h1>
      </div>

      <form action="/register" method="POST">
        @csrf
        <div class="space-y-6">
          <div>
            <label class=" text-sm mb-2 block">Name</label>
            <div class="relative flex items-center">
              <input name="name" type="text" required
                class="w-full  text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600"
                placeholder="Enter name" />
              <svg class="w-6 h-6 text-gray-400 absolute right-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                  d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
          </div>

          <div>
            <label class=" text-sm mb-2 block">Email</label>
            <div class="relative flex items-center">
              <input name="email" type="text" required
                class="w-full  text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600"
                placeholder="Enter email" />
              <svg class="w-6 h-6 text-gray-400 absolute right-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z" />
                <path
                  d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z" />
              </svg>

            </div>
          </div>

          <div>
            <label class=" text-sm mb-2 block">Password</label>
            <div class="relative flex items-center">
              <input name="password" type="password" required
                class="w-full  text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600"
                placeholder="Enter password" />
              <svg class="w-6 h-6 text-gray-400 absolute right-4 cursor-pointer" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="m4 15.6 3.055-3.056A4.913 4.913 0 0 1 7 12.012a5.006 5.006 0 0 1 5-5c.178.009.356.027.532.054l1.744-1.744A8.973 8.973 0 0 0 12 5.012c-5.388 0-10 5.336-10 7A6.49 6.49 0 0 0 4 15.6Z" />
                <path
                  d="m14.7 10.726 4.995-5.007A.998.998 0 0 0 18.99 4a1 1 0 0 0-.71.305l-4.995 5.007a2.98 2.98 0 0 0-.588-.21l-.035-.01a2.981 2.981 0 0 0-3.584 3.583c0 .012.008.022.01.033.05.204.12.402.211.59l-4.995 4.983a1 1 0 1 0 1.414 1.414l4.995-4.983c.189.091.386.162.59.211.011 0 .021.007.033.01a2.982 2.982 0 0 0 3.584-3.584c0-.012-.008-.023-.011-.035a3.05 3.05 0 0 0-.21-.588Z" />
                <path
                  d="m19.821 8.605-2.857 2.857a4.952 4.952 0 0 1-5.514 5.514l-1.785 1.785c.767.166 1.55.25 2.335.251 6.453 0 10-5.258 10-7 0-1.166-1.637-2.874-2.179-3.407Z" />
              </svg>
            </div>
          </div>

          <div>
            <label class=" text-sm mb-2 block">Confirm Password</label>
            <div class="relative flex items-center">
              <input name="cpassword" type="password" required
                class="w-full  text-sm border border-gray-300 px-4 py-3 rounded-md outline-blue-600"
                placeholder="Re-enter password" />
              <svg class="w-6 h-6 text-gray-400 absolute right-4 cursor-pointer" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="m4 15.6 3.055-3.056A4.913 4.913 0 0 1 7 12.012a5.006 5.006 0 0 1 5-5c.178.009.356.027.532.054l1.744-1.744A8.973 8.973 0 0 0 12 5.012c-5.388 0-10 5.336-10 7A6.49 6.49 0 0 0 4 15.6Z" />
                <path
                  d="m14.7 10.726 4.995-5.007A.998.998 0 0 0 18.99 4a1 1 0 0 0-.71.305l-4.995 5.007a2.98 2.98 0 0 0-.588-.21l-.035-.01a2.981 2.981 0 0 0-3.584 3.583c0 .012.008.022.01.033.05.204.12.402.211.59l-4.995 4.983a1 1 0 1 0 1.414 1.414l4.995-4.983c.189.091.386.162.59.211.011 0 .021.007.033.01a2.982 2.982 0 0 0 3.584-3.584c0-.012-.008-.023-.011-.035a3.05 3.05 0 0 0-.21-.588Z" />
                <path
                  d="m19.821 8.605-2.857 2.857a4.952 4.952 0 0 1-5.514 5.514l-1.785 1.785c.767.166 1.55.25 2.335.251 6.453 0 10-5.258 10-7 0-1.166-1.637-2.874-2.179-3.407Z" />
              </svg>
            </div>
          </div>

          <p class="">Choose type of user</p>
          <div class="flex gap-x-8 items-center">
            <div class="flex items-center px-2">
              <input id="admin" name="user-type" type="radio"
                class="h-6 w-6 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded cursor-pointer" />
              <label for="admin" class=" ml-3 block text-sm cursor-pointer">
                Admin
              </label>
            </div>
            <div class="flex items-center px-2">
              <input id="staff" name="user-type" type="radio"
                class="h-6 w-6 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded cursor-pointer" />
              <label for="staff" class=" ml-3 block text-sm cursor-pointer">
                Staff
              </label>
            </div>
          </div>
        </div>

        <div class="!mt-12">
          <button type="submit"
            class="w-full py-3 px-4 text-sm tracking-wider font-semibold rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
            Create an account
          </button>
        </div>
      </form>
    </div>
  </div>
</x-layout>