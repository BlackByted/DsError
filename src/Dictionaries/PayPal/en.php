<?php

return [
    '*'=>'no problem description found.',
    '400'=>'Request is not well-formed, syntactically incorrect, or violates schema',
    '404'=>'The specified resource does not exist.',
    '405'=>'The server does not implement the requested HTTP method',
    '406'=>'The server does not implement the media type that would be acceptable to the client.',
    '415'=>'The server does not support the request payloads media type.',
    '422'=>'The API cannot complete the requested action, or the request action is semantically incorrect or fails business validation.',
    '429'=>'Too many requests. Blocked due to rate limiting.',
    '500'=>'An internal server error has occurred.',
    '503'=>'Service Unavailable.'
];