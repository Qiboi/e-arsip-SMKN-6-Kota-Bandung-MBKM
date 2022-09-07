<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/custom.css">
    <title>Surat Masuk</title>
</head>
<body>
    <div x-data="setup()" :class="{ 'dark': isDark }">
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
    
          <!-- Header -->
          <div class="fixed w-full flex items-center justify-between h-14 text-black z-10 dark:text-white">
            <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-grey-100 dark:bg-gray-800 border-none">
              <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
              <span class="hidden md:block">ADMIN</span>
            </div>
            <div class="flex justify-between items-center h-14 bg-grey-100 dark:bg-gray-800 header-right">
              <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-400">
                <button class="outline-none focus:outline-none">
                  <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
                <input type="search" name="" id="" placeholder="Search" class=" w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
              </div>
              <ul class="flex items-center">
                <li>
                  <button
                    aria-hidden="true"
                    @click="toggleTheme"
                    class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-yellow-400 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none"
                  >
                    <svg
                      x-show="isDark"
                      width="24"
                      height="24"
                      class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke=""
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                      />
                    </svg>
                    <svg
                      x-show="!isDark"
                      width="24"
                      height="24"
                      class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke=""
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                      />
                    </svg>
                  </button>
                </li>
                <li>
                  <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                </li>
                <li>
                  <a href="#" class="flex items-center mr-4 hover:text-blue-100">
                    <span class="inline-flex mr-1">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    </span>
                    Logout
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- ./Header -->
        
          <!-- Sidebar -->
          <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-gradient-to-b from-cyan-500 to-blue-700 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
              <ul class="flex flex-col py-4 space-y-1">
                <li class="px-5 hidden md:block">
                  <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-white uppercase">Main</div>
                  </div>
                </li>
                <li>
                  <a href="/dashboard" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gradient-to-r from-blue-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                  </a>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gradient-to-r from-blue-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Document</span>
                        <svg sidebar-toggle-item class="w-6 h-6 ml-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>    
                    </a>
                    <ul id="dropdown-example" class="hidden bg-sky-700 dark:bg-gray-800">
                      <li>
                        <a href="/suratmasuk"
                          class="flex items-center p-2 text-sm font-normal text-white-600 transition duration-75 group hover:bg-gradient-to-r from-blue-700 dark:text-white dark:hover:bg-gray-700 pl-12">Surat Masuk</a>
                      </li>
                      <li>
                        <a href="/suratkeluar"
                          class="flex items-center p-2 text-sm font-normal text-white-600 transition duration-75 group hover:bg-gradient-to-r from-blue-700 dark:text-white dark:hover:bg-gray-700 pl-12">Surat Keluar</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gradient-to-r from-blue-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6" aria-controls="report" data-collapse-toggle="report">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" /></svg>                            
                          </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Report</span>
                        <svg sidebar-toggle-item class="w-6 h-6 ml-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>    
                    </a>
                    <ul id="report" class="hidden bg-sky-700 dark:bg-gray-800">
                      <li>
                        <a href="#"
                          class="flex items-center p-2 text-sm font-normal text-white-600 transition duration-75 group hover:bg-gradient-to-r from-blue-700 dark:text-white dark:hover:bg-gray-700 pl-12"> Report Surat Masuk</a>
                      </li>
                      <li>
                        <a href="#"
                          class="flex items-center p-2 text-sm font-normal text-white-600 transition duration-75 group hover:bg-gradient-to-r from-blue-700 dark:text-white dark:hover:bg-gray-700 pl-12">Report Surat Keluar</a>
                      </li>
                    </ul>
                  </li>
                <li class="px-5 hidden md:block">
                  <div class="flex flex-row items-center mt-5 h-8">
                    <div class="text-sm font-light tracking-wide text-white uppercase">Settings</div>
                  </div>
                </li>
                <li>
                  <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gradient-to-r from-blue-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gradient-to-r from-blue-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                  </a>
                </li>
              </ul>
              <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
            </div>
          </div>
          <!-- ./Sidebar -->
        
          <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        
            <!-- Client Table -->
            <div class="inline-flex md:col-span-2 xl:col-span-3 mt-4 mx-4 pl-4 rounded-lg shadow-lg border-b-4 border-blue-600 bg-blue-500 text-white w-48 h-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 m-1.5 mr-1 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                  </svg>                  
                <h3 class="py-1 px-0.5 text-lg font-semibold uppercase">Surat Masuk</h3>
            </div>
            <div class="mt-10 mx-4">
              <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto bg-blue-200">
                    <div class="relative m-2 p-2 text-left">
                        <button class="inline-flex bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-700 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" data-modal-toggle="tambahdataModal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            <span class="py-1">Tambah Data</span>
                        </button>
                    </div>
                    <div id="tambahdataModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                      <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                          <!-- Modal content -->
                          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                              <!-- Modal header -->
                              <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                      Terms of Service
                                  </h3>
                                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                      <span class="sr-only">Close modal</span>
                                  </button>
                              </div>
                              <!-- Modal body -->
                              <div class="p-6 space-y-6">
                                  <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                      With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                                  </p>
                                  <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                      The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                                  </p>
                              </div>
                              <!-- Modal footer -->
                              <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                  <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                  <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <table class="w-full">
                    <thead>
                      <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nomor Surat</th>
                        <th class="px-4 py-3">Judul Surat</th>
                        <th class="px-4 py-3">Indeks Surat</th>
                        <th class="px-4 py-3">Asal Surat</th>
                        <th class="px-4 py-3">Tanggal Masuk</th>
                        <th class="px-4 py-3">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                          <td class="px-4 py-3 text-sm">1</td>
                          <td class="px-4 py-3 text-sm">$855.85</td>
                          <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                          </td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>  
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                          <td class="px-4 py-3">2</td>
                          <td class="px-4 py-3 text-sm">$369.75</td>
                          <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full"> Pending </span>
                          </td>
                          <td class="px-4 py-3 text-sm">23-03-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                          <td class="px-4 py-3">3</td>
                          <td class="px-4 py-3 text-sm">$775.45</td>
                          <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"> Expired </span>
                          </td>
                          <td class="px-4 py-3 text-sm">09-02-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                          <td class="px-4 py-3">4</td>
                          <td class="px-4 py-3 text-sm">$1276.75</td>
                          <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                          </td>
                          <td class="px-4 py-3 text-sm">17-04-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                          <td class="px-4 py-3">5</td>
                          <td class="px-4 py-3 text-sm">$863.45</td>
                          <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"> Denied </span>
                          </td>
                          <td class="px-4 py-3 text-sm">11-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                          <td class="px-4 py-3 text-sm">15-01-2021</td>
                        </tr>
                      </tbody>
                  </table>
                </div>
                <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                  <span class="flex items-center col-span-3"> Showing 21-30 of 100 </span>
                  <span class="col-span-2"></span>
                  <!-- Pagination -->
                  <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                      <ul class="inline-flex items-center">
                        <li>
                          <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                              <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                        </li>
                        <li>
                          <button class="px-3 py-1 text-white dark:text-gray-800 transition-colors duration-150 bg-blue-600 dark:bg-gray-100 border border-r-0 border-blue-600 dark:border-gray-100 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                        </li>
                        <li>
                          <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                              <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                          </button>
                        </li>
                      </ul>
                    </nav>
                  </span>
                </div>
              </div>
            </div>
            <!-- ./Client Table -->
        </div>
      </div>

</body>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  <script>
    const setup = () => {
      const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
          return JSON.parse(window.localStorage.getItem('dark'))
        }
        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
      }

      const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
      }

      return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
        },
      }
    }
  </script>
  <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>

</html>