 <div class="">
     <!-- Head -->
     <button @click="selected != {{ $id }} ? selected = {{ $id }} : selected =null"
         class="flex flex-row items-center w-full  px-4 py-2 mt-2 text-left
                                        text-sm
                                        text-yellow-400
                                        focus:text-yellow-200
                                        font-semibold

                                        bg-slate-900
                                        focus:bg-slate-600
                                        hover:bg-slate-600
                                        focus:shadow-outline
                                        rounded-lg
                                        border-2
                                        focus:border-4
                                        focus:border-slate-800
                                        border-slate-600">
         <span class="mr-2">{{ $title }}</span>
         <svg xmlns="http://www.w3.org/2000/svg"
             x-bind:class="selected == {{ $id }} ? 'transform rotate-180' : ''"
             class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
         </svg>
     </button>
     <!-- Content -->
     <div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="tab2"
         :style="selected == {{ $id }} ? 'max-height: ' + $refs.tab2.scrollHeight + 'px;' : ''">
         <div class="px-2 py-2 rounded-md shadow bg-slate-500 ">
             <a class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                 {{ $slot }}
         </div>
     </div>
 </div>
