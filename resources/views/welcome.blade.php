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
        <svg xmlns="http://www.w3.org/2000/svg" class="block mx-auto" viewBox="0 0 512 512" xml:space="preserve">
            <path d="M210.16 276.71c-.211.105-21.58 10.51-41.574 10.51-20.07 0-41.4-10.425-41.613-10.53l-16.715 33.527c1.181.592 29.265 14.466 58.328 14.466s57.147-13.874 58.328-14.466L210.16 276.71zm174.829 0c-.21.105-21.58 10.51-41.574 10.51-20.07 0-41.4-10.425-41.613-10.53l-16.715 33.527c1.181.592 29.265 14.466 58.328 14.466 29.063 0 57.147-13.874 58.328-14.466l-16.754-33.507zM256 374.634c-13.772 0-24.976 11.204-24.976 24.976 0 13.772 11.204 24.976 24.976 24.976 13.767 0 24.971-11.202 24.976-24.976 0-13.772-11.202-24.976-24.976-24.976zm31.976-230.265-13.244-31.976h-81.171v37.463h35.949l-42.95 42.949 13.245 31.978h81.171V187.32h-35.949zm106.147-24.978-13.245-31.976h-81.171v37.463h35.949l-42.949 42.951 13.244 31.976h81.171v-37.464h-35.949zm106.146-24.976-13.245-31.976h-81.17v37.463h35.948l-42.949 42.951 13.245 31.976h81.17v-37.463H457.32z" />
            <path d="M508.251 212.293h-38.109A218.784 218.784 0 0 1 474.536 256c0 120.501-98.036 218.537-218.537 218.537S37.463 376.501 37.463 256 135.499 37.463 256 37.463c25.519 0 50.025 4.412 72.811 12.488h39.579v-23.92C334.442 9.372 296.297 0 256 0 114.84 0 0 114.842 0 256s114.84 256 256 256 256-114.842 256-256c0-14.899-1.294-29.5-3.749-43.707z" />
        </svg>
        </div>
        <div class="p-12">
            <h1 class="text-7xl">The Teller</h1>
            <form action="/tell">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10">
                            <label for="datetime" class="block pb-2 text-lg font-medium leading-6 text-gray-900">Date and Time to Check</label>
                            <input type="text" id="datetime" name="datetime" autocomplete="datetime-name" placeholder="Type in a date and time..." class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" />
                            <label for="timezone" class="block py-2 text-lg font-medium leading-6 text-gray-900">Timezone</label>
                            <select id="timezone" name="timezone" autocomplete="timezone-name" placeholder="Type in timezone..." class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="America/Los_Angeles">(PST) America/Los_Angeles</option>
                                <option value="America/Phoenix">(MST) America/Phoenix</option>
                                <option value="America/Chicago" selected>(CST) America/Chicago</option>
                                <option value="America/New_York">(EST) America/New_York</option>
                            </select>
                            
                            {{-- <div class="mt-5">
                                <label for="Month" class="block text-md font-medium leading-6 text-gray-900">Month</label>
                                <div class="mt-2">
                                    <select id="month" name="month" autocomplete="month-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option {{ (date('F') == 'January') ? 'selected':'' }} value="1">January</option>
                                        <option {{ (date('F') == 'February') ? 'selected':'' }} value="2">February</option>
                                        <option {{ (date('F') == 'March') ? 'selected':'' }} value="3">March</option>
                                        <option {{ (date('F') == 'April') ? 'selected':'' }} value="4">April</option>
                                        <option {{ (date('F') == 'May') ? 'selected':'' }} value="5">May</option>
                                        <option {{ (date('F') == 'June') ? 'selected':'' }} value="6">June</option>
                                        <option {{ (date('F') == 'July') ? 'selected':'' }} value="7">July</option>
                                        <option {{ (date('F') == 'August') ? 'selected':'' }} value="8">August</option>
                                        <option {{ (date('F') == 'September') ? 'selected':'' }} value="9">September</option>
                                        <option {{ (date('F') == 'October') ? 'selected':'' }} value="10">October</option>
                                        <option {{ (date('F') == 'November') ? 'selected':'' }} value="11">November</option>
                                        <option {{ (date('F') == 'December') ? 'selected':'' }} value="12">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-5">
                                <label for="Month" class="block text-md font-medium leading-6 text-gray-900">Day</label>
                                <div class="mt-2">
                                    <select id="day" name="day" autocomplete="day-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option {{ (date('j') == '2') ? 'selected':'' }}>2</option>
                                        <option {{ (date('j') == '1') ? 'selected':'' }}>1</option>
                                        <option {{ (date('j') == '3') ? 'selected':'' }}>3</option>
                                        <option {{ (date('j') == '4') ? 'selected':'' }}>4</option>
                                        <option {{ (date('j') == '5') ? 'selected':'' }}>5</option>
                                        <option {{ (date('j') == '6') ? 'selected':'' }}>6</option>
                                        <option {{ (date('j') == '7') ? 'selected':'' }}>7</option>
                                        <option {{ (date('j') == '8') ? 'selected':'' }}>8</option>
                                        <option {{ (date('j') == '9') ? 'selected':'' }}>9</option>
                                        <option {{ (date('j') == '10') ? 'selected':'' }}>10</option>
                                        <option {{ (date('j') == '11') ? 'selected':'' }}>11</option>
                                        <option {{ (date('j') == '12') ? 'selected':'' }}>12</option>
                                        <option {{ (date('j') == '13') ? 'selected':'' }}>13</option>
                                        <option {{ (date('j') == '14') ? 'selected':'' }}>14</option>
                                        <option {{ (date('j') == '15') ? 'selected':'' }}>15</option>
                                        <option {{ (date('j') == '16') ? 'selected':'' }}>16</option>
                                        <option {{ (date('j') == '17') ? 'selected':'' }}>17</option>
                                        <option {{ (date('j') == '18') ? 'selected':'' }}>18</option>
                                        <option {{ (date('j') == '19') ? 'selected':'' }}>19</option>
                                        <option {{ (date('j') == '20') ? 'selected':'' }}>20</option>
                                        <option {{ (date('j') == '21') ? 'selected':'' }}>21</option>
                                        <option {{ (date('j') == '22') ? 'selected':'' }}>22</option>
                                        <option {{ (date('j') == '23') ? 'selected':'' }}>23</option>
                                        <option {{ (date('j') == '24') ? 'selected':'' }}>24</option>
                                        <option {{ (date('j') == '25') ? 'selected':'' }}>25</option>
                                        <option {{ (date('j') == '26') ? 'selected':'' }}>26</option>
                                        <option {{ (date('j') == '27') ? 'selected':'' }}>27</option>
                                        <option {{ (date('j') == '28') ? 'selected':'' }}>28</option>
                                        <option {{ (date('j') == '29') ? 'selected':'' }}>29</option>
                                        <option {{ (date('j') == '30') ? 'selected':'' }}>30</option>
                                        <option {{ (date('j') == '31') ? 'selected':'' }}>31</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-5">
                                <label for="Year" class="block text-md font-medium leading-6 text-gray-900">Year</label>
                                <div class="mt-2">
                                    <select id="year" name="year" autocomplete="year-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option {{ (date('Y') == '2024') ? 'selected':'' }}>2024</option>
                                        <option {{ (date('Y') == '2025') ? 'selected':'' }}>2025</option>
                                        <option {{ (date('Y') == '2026') ? 'selected':'' }}>2026</option>
                                        <option {{ (date('Y') == '2027') ? 'selected':'' }}>2027</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-5">
                                <label for="Time" class="block text-md font-medium leading-6 text-gray-900">Time</label>
                                <div class="mt-2">
                                    <input type="text" id="time" name="time" placeholder="Enter time like: 8:00 AM" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" />
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center gap-x-6">
                    {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let&rsquo;s Check!</button>
                </div>
            </form>


        </div>
    </div>
</body>
</html>