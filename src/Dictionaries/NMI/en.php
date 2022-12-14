<?php

return [
    '*'=>'no problem description found.',
    '1001'=>'The specified card in the request has expired',
    '1002'=>'The specified card in the request is not yet effective',
    '1003'=>'The specified card scheme in the request is not supported',
    '1004'=>'The specified card usage in the request has been exceeded',
    '1005'=>'The specified card in the request has been banned',
    '1006'=>'The specified transaction in the request is not allowed',
    '1200'=>'The request does not contain a PAN',
    '1201'=>'The specified PAN in the request is invalid',
    '1202'=>'The specified PAN in the request is too long',
    '1203'=>'The specified PAN in the request is too short',
    '1204'=>'The specified PAN in the request fails the Luhn check',
    '1210'=>'The request does not contain an expiry date',
    '1211'=>'The specified expiry date in the request is invalid',
    '1220'=>'The request does not contain a start date.',
    '1221'=>'The specified start date in the request is invalid',
    '1230'=>'The request does not contain an issue number',
    '1231'=>'The specified issue number in the request is invalid',
    '1235'=>'The specified card reference in the request is not valid',
    '1236'=>'The specified card hash in the request is not valid',
    '1240'=>'The request does not contain an amount',
    '1241'=>'The specified amount in the request is invalid',
    '1242'=>'The specified amount in the request is too small',
    '1243'=>'The specified amount in the request is too large',
    '1250'=>'The request does not contain a message type',
    '1251'=>'The specified message type in the request is invalid',
    '2001'=>'The request does not contain a terminal ID',
    '2002'=>'The specified terminal ID in the request is unknown',
    '2003'=>'The specified terminal ID in the request is invalid',
    '2004'=>'The specified terminal ID in the request is disabled',
    '2005'=>'The specified terminal ID usage in the request has been exceeded',
    '2021'=>'The specified transaction key in the request is missing',
    '2022'=>'The specified transaction key in the request is invalid',
    '2023'=>'The specified transaction key in the request is incorrect',
    '2100'=>'The request does not contain a CardEase Reference',
    '2101'=>'The specified CardEase Reference in the request is invalid',
    '2110'=>'The card details referenced by the Card Reference and Card Hash are unavailable',
    '2111'=>'The card details referenced by the Card Reference and Card Hash could not be found',
    '2200'=>'The specified transaction in the request was not found',
    '2201'=>'The specified transaction in the request has already been settled',
    '2202'=>'The specified transaction in the request has already been voided',
    '2203'=>'The transaction has already been refunded in full',
    '2204'=>'The specified transaction in the request was originally declined',
    '7000'=>'The CardEase platform is temporarily unavailable',
    '8001'=>'The request XML is invalid',
    '8002'=>'The specified request type is invalid',
    '8003'=>'The request does not contain all of the expected XML elements',
    '8004'=>'An invalid piece of information was sent in the request',
    '8005'=>'It is not possible to decrypt the XML'
];