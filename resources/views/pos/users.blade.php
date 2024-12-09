@extends('pos.layout')
@section('title')
    Users
@endsection
@section('content')


    <div class="w-full pt-10 min-h-[88vh] gradient-border  rounded-xl">
        <div class="flex justify-between px-5">
            <h1 class="text-3xl font-bold ">Users</h1>
        
        </div>
        @php
            $headers = ['Sr.' , 'Image', 'Name', 'Email', 'Phone No', 'Status' , 'Type'];
        @endphp

        <x-table :headers="$headers">
            <x-slot name="tablebody">
            

            </x-slot>
        </x-table>


    
     
    </div>
@endsection
@section('js')
   <script>
 

        function updateDatafun() {
         
        }



        // Listen for the custom form submission response event
        $(document).on("formSubmissionResponse", function(event, response, Alert, SuccessAlert, WarningAlert) {
            // console.log(response);
            if (response.success) {

                $('.modalCloseBtn').click();
            } else {}
        });
    </script>
@endsection
