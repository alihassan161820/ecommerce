Hi {{ $username }}

<p>Your registeration is compleated please click the link to get access</p>

{{ route('confirmation',$token) }}