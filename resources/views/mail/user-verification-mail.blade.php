<x-mail::message>
<h1>Welcome to {{$company->business_name}}</h1>

<p>Hello {{ $user->name }},</p>

<p>We're excited to have you on board! Please take a moment to verify your
email address to complete your registration and set your password to get started.</p>

<p><strong>Email Address:</strong> {{ $user->email }}</p>

<x-mail::button :url="$url">
        Verify Email and Set Password
</x-mail::button>

<p>If you didn't create an account, no further action is required.</p>

<p>Best regards,<br>{{$company->business_name}}</p>
</x-mail::message>
