@component('mail::message')
# Introduction

Dear Mr. {{$user->name}}

@component('mail::button', ['url' => '']) 
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
