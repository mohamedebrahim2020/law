@component('mail::message')
    hello {{$passwordReset->email}}
    'you are lately make a request
    for an OTP code as you forget your password on our website
    
    otp Code : {{$passwordReset->otp_token}}
    please copy the code on ittezan website
   
    Thanks,<br>
    Ittezan
@endcomponent
