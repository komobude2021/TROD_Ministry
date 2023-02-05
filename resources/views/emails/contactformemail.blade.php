@component('mail::message')
# Hello, The Root of David

My Name is: <span style="color: #900">{{ $validated['name'] }}</span><br/>
My Email Address is: <span style="color: #900">{{ $validated['email'] }}</span><br/>

{{ $validated['message'] }}


Thanks,<br>
{{ $validated['name'] }}
@endcomponent
