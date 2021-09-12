@component('mail::message')
# Here Are the new registered customers

{{-- @component("mail::table")
    
@endcomponent --}}

New Customers Registerd: {{ $data }} 
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
