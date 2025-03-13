@extends('layouts.app')
@section('content')
<h1>Students List</h1>
<form class="max-w-md mx-auto">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
        <button type="submit" id="ajaxStudentsButton" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </div>
</form>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#ajaxStudentsButton').click(function() {
                $.ajax({
                    url: '{{ route('ajax.request') }}',  // Route URL
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',  // CSRF token
                    },
                    success: function(response) {
                        $output = "<ul>";
                        foreach ($students as $student) {
                        $output .= "<li>{$student['name']} ({$student['age']})</li>";
                        }
                        $output .= "</ul>";
                        return $output;
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: " + error);
                    }
                });
            });
        });
    </script>
@endsection