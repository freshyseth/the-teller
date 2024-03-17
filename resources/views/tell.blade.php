<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="md:grid md:grid-cols-2 md:gap-8">
        <div class="p-12">
        @if($isFriendAwake)
            <svg xmlns="http://www.w3.org/2000/svg" class="block mx-auto" viewBox="0 0 512 512" xml:space="preserve">
                <path d="M256 0C114.842 0 0 114.84 0 256s114.84 256 256 256 256-114.84 256-256S397.158 0 256 0zm0 474.537c-120.501 0-218.537-98.036-218.537-218.537S135.499 37.463 256 37.463 474.537 135.499 474.537 256 376.501 474.537 256 474.537z" />
                <path d="m437.071 235.309-20.59 2.053c-.618.061-62.837 6.15-160.481 6.15s-159.863-6.089-160.477-6.151l-20.596-2.059V256c0 99.844 81.228 181.073 181.073 181.073S437.073 355.844 437.073 256l-.002-20.691zM256 399.61c-46.321 0-87.589-22.046-113.866-56.195h227.734C343.588 377.564 302.321 399.61 256 399.61zm134.642-93.659H121.359a142.354 142.354 0 0 1-7.52-29.521c26.615 1.876 76.093 4.546 142.161 4.546 66.067 0 115.545-2.67 142.161-4.546a142.494 142.494 0 0 1-7.519 29.521zM199.805 156.098c-13.772 0-24.976 11.204-24.976 24.976s11.204 24.976 24.976 24.976c13.767 0 24.971-11.202 24.976-24.976 0-13.772-11.202-24.976-24.976-24.976zm112.39 0c-13.772 0-24.976 11.204-24.976 24.976s11.203 24.976 24.976 24.976c13.767 0 24.971-11.202 24.976-24.976 0-13.772-11.203-24.976-24.976-24.976z" />
            </svg>
        @else
            <svg xmlns="http://www.w3.org/2000/svg" class="block mx-auto" viewBox="0 0 512 512" xml:space="preserve">
                <path d="M210.16 276.71c-.211.105-21.58 10.51-41.574 10.51-20.07 0-41.4-10.425-41.613-10.53l-16.715 33.527c1.181.592 29.265 14.466 58.328 14.466s57.147-13.874 58.328-14.466L210.16 276.71zm174.829 0c-.21.105-21.58 10.51-41.574 10.51-20.07 0-41.4-10.425-41.613-10.53l-16.715 33.527c1.181.592 29.265 14.466 58.328 14.466 29.063 0 57.147-13.874 58.328-14.466l-16.754-33.507zM256 374.634c-13.772 0-24.976 11.204-24.976 24.976 0 13.772 11.204 24.976 24.976 24.976 13.767 0 24.971-11.202 24.976-24.976 0-13.772-11.202-24.976-24.976-24.976zm31.976-230.265-13.244-31.976h-81.171v37.463h35.949l-42.95 42.949 13.245 31.978h81.171V187.32h-35.949zm106.147-24.978-13.245-31.976h-81.171v37.463h35.949l-42.949 42.951 13.244 31.976h81.171v-37.464h-35.949zm106.146-24.976-13.245-31.976h-81.17v37.463h35.948l-42.949 42.951 13.245 31.976h81.17v-37.463H457.32z" />
                <path d="M508.251 212.293h-38.109A218.784 218.784 0 0 1 474.536 256c0 120.501-98.036 218.537-218.537 218.537S37.463 376.501 37.463 256 135.499 37.463 256 37.463c25.519 0 50.025 4.412 72.811 12.488h39.579v-23.92C334.442 9.372 296.297 0 256 0 114.84 0 0 114.842 0 256s114.84 256 256 256 256-114.842 256-256c0-14.899-1.294-29.5-3.749-43.707z" />
            </svg>
        @endif
        </div>
        <div class="p-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h1 class="text-7xl">The Teller</h1>
                <div class="space-y-12">
                    @if($isFriendAwake)
                        <div class="mt-12 text-3xl">
                            <p>Jesse should be <span class="text-emerald-500 drop-shadow-md">awake</span>: <br/>
                            <span class="text-xl">{{ $yourDateTime->format('l, F j, Y g:i a e') }}</span>.</p>
                            @if($yourDateTime->timezone != 'America/Chicago')
                                <p><span class="text-lg">{{ $yourDateTime->timezone('America/Chicago')->format('l, F j, Y g:i a e') }}</span>.<p>
                            @endif
                        </div>
                    @else
                        <div class="mt-12 text-3xl">
                            <p>Jesse should be <span class="text-red-900 drop-shadow-md">asleep</span>: <br/>
                            <span class="text-xl">{{ $yourDateTime->format('l, F j, Y g:i a e') }}</span>.</p>
                            @if($yourDateTime->timezone != 'America/Chicago')
                                <p><span class="text-lg">{{ $yourDateTime->timezone('America/Chicago')->format('l, F j, Y g:i a e') }}</span>.<p>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
            <div class="mt-6 flex items-center gap-x-6">
                <a href="/" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Check Another Time</a>
            </div>
        </div>
    </div>
</body>
</html>