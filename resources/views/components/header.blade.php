<nav class="flex justify-end items-center gap-4">
  {{-- Notifications --}}
  <button class="relative hover:text-violet-500">
    <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
      fill="currentColor" viewBox="0 0 24 24">
      <path
        d="M11.209 3.816a1 1 0 0 0-1.966.368l.325 1.74a5.338 5.338 0 0 0-2.8 5.762l.276 1.473.055.296c.258 1.374-.228 2.262-.63 2.998-.285.52-.527.964-.437 1.449.11.586.22 1.173.75 1.074l12.7-2.377c.528-.1.418-.685.308-1.27-.103-.564-.636-1.123-1.195-1.711-.606-.636-1.243-1.306-1.404-2.051-.233-1.085-.275-1.387-.303-1.587-.009-.063-.016-.117-.028-.182a5.338 5.338 0 0 0-5.353-4.39l-.298-1.592Z" />
      <path fill-rule="evenodd"
        d="M6.539 4.278a1 1 0 0 1 .07 1.412c-1.115 1.23-1.705 2.605-1.83 4.26a1 1 0 0 1-1.995-.15c.16-2.099.929-3.893 2.342-5.453a1 1 0 0 1 1.413-.069Z"
        clip-rule="evenodd" />
      <path d="M8.95 19.7c.7.8 1.7 1.3 2.8 1.3 1.6 0 2.9-1.1 3.3-2.5l-6.1 1.2Z" />
    </svg>
    <span
      class="absolute top-2 left-5 transform -translate-y-1/2 w-3.5 h-3.5 bg-red-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
  </button>


  {{-- Drop down --}}
  <div class="dropdown" data-dropdown>
    <button type="button" data-dropdown-button
      class="link flex gap-3 px-3 py-2 rounded-md text-gray-950 bg-white hover:bg-violet-800 hover:text-white"
      alt="User dropdown">
      <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd"
          d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
          clip-rule="evenodd" />
      </svg>
      John Doe
    </button>

    <!-- Dropdown menu -->
    <div class="dropdown-menu z-10 divide-y dark:bg-gray-700 dark:divide-gray-600 rounded-lg shadow w-44 ">
      <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
        <div class="font-medium">John Doe</div>
        <div>Admin</div>
      </div>
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Manage
            Accounts</a>
        </li>
        <li>
          <a href="#"
            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
        </li>
      </ul>
      <div class="py-1">
        <a href="#"
          class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
          out</a>
      </div>
    </div>
  </div>

</nav>