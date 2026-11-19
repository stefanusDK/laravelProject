<aside
  class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
  aria-label="Sidenav"
  id="drawer-navigation"
>
  <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
    <ul class="space-y-2">
      <!-- Menu Dashboard -->
      <x-admin.menu-item
        label="Dashboard"
        href="/admin/dashboard"
        icon='<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4"/>'
      />

      <!-- Menu About -->
      <x-admin.menu-item
        label="About"
        href="/admin/about"
        icon='<path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 .087.586l2.977-7.937A1 1 0 0 1 6 10h12V9a2 2 0 0 0-2-2h-4.532l-1.9-2.28A2 2 0 0 0 8.032 4H4Zm2.693 8H6.5l-3 8H18l3-8H6.693Z" clip-rule="evenodd"/>'
      />

      <!-- Menu Classroom -->
      <x-admin.menu-item
        label="Classroom"
        href="/admin/classroom"
        icon='<path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 .087.586l2.977-7.937A1 1 0 0 1 6 10h12V9a2 2 0 0 0-2-2h-4.532l-1.9-2.28A2 2 0 0 0 8.032 4H4Zm2.693 8H6.5l-3 8H18l3-8H6.693Z" clip-rule="evenodd"/>'
      />

      <!-- Menu Student -->
      <x-admin.menu-item
        label="Student"
        href="/admin/student"
        icon='<path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>'
      />

      <!-- Menu Teachers (Baru) -->
      <x-admin.menu-item
        label="Teachers"
        href="/teachers"
        icon='<path fill-rule="evenodd" d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-7 9a7 7 0 1 1 14 0H3Z" clip-rule="evenodd"/>'
      />

      <!-- Menu Subjects (Baru) -->
      <x-admin.menu-item
        label="Subjects"
        href="/subjects"
        icon='<path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 1 3-3h12a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2H6Zm0 15a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h12v-3H6Z" clip-rule="evenodd"/>'
      />
    </ul>
  </div>
</aside>
