                            <form method="POST" action="{{ $action }}">
                                @csrf
                                <x-dropdown-link ::href="{{ $href }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="block px-4 py-2 mt-2
                                                    text-sm
                                                    text-yellow-400
                                                    focus:text-yellow-200
                                                    font-semibold
                                                    md:block
                                                    bg-slate-900
                                                    focus:bg-slate-600
                                                    hover:bg-slate-600
                                                    focus:shadow-outline
                                                    rounded-lg
                                                    border-2
                                                    focus:border-4
                                                    focus:border-slate-800
                                                    border-slate-600">
                                    {{ __($title) }}
                                </x-dropdown-link>
                            </form>
