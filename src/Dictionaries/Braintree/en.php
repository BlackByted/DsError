<?php

return [
    '2000'=>'The customer’s bank is unwilling to accept the transaction. The customer will need to contact their bank for more details regarding this generic decline.',
    '2001'=>'The account did not have sufficient funds to cover the transaction amount at the time of the transaction – subsequent attempts at a later date may be successful.',
    '2002'=>'The attempted transaction exceeds the withdrawal limit of the account. The customer will need to contact their bank to change the account limits or use a different payment method.',
    '2003'=>'The attempted transaction exceeds the activity limit of the account. The customer will need to contact their bank to change the account limits or use a different payment method.',
    '2004'=>'Card is expired. The customer will need to use a different payment method.',
    '2005'=>'The customer entered an invalid payment method or made a typo in their credit card information. Have the customer correct their payment information and attempt the transaction again – if the decline persists, they will need to contact their bank.',
    '2006'=>'The customer entered an invalid payment method or made a typo in their card expiration date. Have the customer correct their payment information and attempt the transaction again – if the decline persists, they will need to contact their bank.',
    '2007'=>'The submitted card number is not on file with the card-issuing bank. The customer will need to contact their bank.',
    '2008'=>'The submitted card number does not include the proper number of digits. Have the customer attempt the transaction again – if the decline persists, the customer will need to contact their bank.',
    '2009'=>'This decline code could indicate that the submitted card number does not correlate to an existing card-issuing bank or that there is a connectivity error with the issuer. The customer will need to contact their bank for more information.',
    '2010'=>'The customer entered in an invalid security code or made a typo in their card information. Have the customer attempt the transaction again – if the decline persists, the customer will need to contact their bank.',
    '2011'=>'The customer’s bank is requesting that the merchant (you) call to obtain a special authorization code in order to complete this transaction. This can result in a lengthy process – we recommend obtaining a new payment method instead. Contact us for more details.',
    '2012'=>'The card used has likely been reported as lost. The customer will need to contact their bank for more information.',
    '2013'=>'The card used has likely been reported as stolen. The customer will need to contact their bank for more information.',
    '2014'=>'The customer’s bank suspects fraud – they will need to contact their bank for more information.',
    '2015'=>'The customer’s bank is declining the transaction for unspecified reasons, possibly due to an issue with the card itself. They will need to contact their bank or use a different payment method.',
    '2016'=>'The submitted transaction appears to be a duplicate of a previously submitted transaction and was declined to prevent charging the same card twice for the same service.',
    '2017'=>'The customer requested a cancellation of a single transaction – reach out to them for more information.',
    '2018'=>'The customer requested the cancellation of a recurring transaction or subscription – reach out to them for more information.',
    '2019'=>'The customer’s bank declined the transaction, typically because the card in question does not support this type of transaction – for example, the customer used an FSA debit card for a non-healthcare related purchase. They will need to contact their bank for more information.',
    '2020'=>'The customer will need to contact their bank for more information.',
    '2021'=>'The customer’s bank is declining the transaction, possibly due to a fraud concern. They will need to contact their bank or use a different payment method.',
    '2022'=>'The submitted card has expired or been reported lost and a new card has been issued. Reach out to your customer to obtain updated card information.',
    '2023'=>'Your account can’t process transactions with the intended feature – for example, 3D Secure or Level 2/Level 3 data. If you believe your merchant account should be set up to accept this type of transaction, contact us.',
    '2024'=>'Your account can’t process the attempted card type. If you believe your merchant account should be set up to accept this type of card, contact us for assistance.',
    '2025'=>'Depending on your region, this response could indicate a connectivity or setup issue. Contact us for more information regarding this error message.',
    '2026'=>'The customer’s bank declined the transaction, typically because the card in question does not support this type of transaction. If this response persists across transactions for multiple customers, it could indicate a connectivity or setup issue. Contact us for more information regarding this error message.',
    '2027'=>'This rare decline code indicates an issue with processing the amount of the transaction. The customer will need to contact their bank for more details.',
    '2028'=>'There is a setup issue with your account. Contact us for more information.',
    '2029'=>'This response generally indicates that there is a problem with the submitted card. The customer will need to use a different payment method.',
    '2030'=>'There is a setup issue with your account. Contact us for more information.',
    '2031'=>'The cardholder’s bank does not support $0.00 card verifications. Enable the Retry All Failed $0 option to resolve this error. Contact us with questions.',
    '2032'=>'Surcharge amount not permitted on this card. The customer will need to use a different payment method.',
    '2033'=>'An error occurred when communicating with the processor. The customer will need to contact their bank for more details.',
    '2034'=>'An error occurred and the intended transaction was not completed. Attempt the transaction again.',
    '2035'=>'The customer’s bank approved the transaction for less than the requested amount. Have the customer attempt the transaction again – if the decline persists, the customer will need to use a different payment method.',
    '2036'=>'An error occurred when trying to process the authorization. This response could indicate an issue with the customer’s card or that the processor doesn’t allow this action – contact us for more information.',
    '2037'=>'The indicated authorization has already been reversed. If you believe this to be false, contact us for more information.',
    '2038'=>'The customer’s bank is unwilling to accept the transaction. The reasons for this response can vary – customer will need to contact their bank for more details.',
    '2039'=>'The authorization code was not found or not provided. Have the customer attempt the transaction again – if the decline persists, they will need to contact their bank.',
    '2040'=>'There may be an issue with the configuration of your account. Have the customer attempt the transaction again – if the decline persists, contact us for more information.',
    '2041'=>'The card used for this transaction requires customer approval – they will need to contact their bank.',
    '2042'=>'There may be an issue with the configuration of your account. Have the customer attempt the transaction again – if the decline persists, contact us for more information.',
    '2043'=>'The card-issuing bank will not allow this transaction. The customer will need to contact their bank for more information.',
    '2044'=>'The card-issuing bank has declined this transaction. Have the customer attempt the transaction again – if the decline persists, they will need to contact their bank for more information.',
    '2045'=>'There is a setup issue with your account. Contact us for more information.',
    '2046'=>'The customer’s bank is unwilling to accept the transaction. For credit/debit card transactions, the customer will need to contact their bank for more details regarding this generic decline; if this is a PayPal transaction, the customer will need to contact PayPal.',
    '2047'=>'The customer’s card has been reported as lost or stolen by the cardholder and the card-issuing bank has requested that merchants keep the card and call the number on the back to report it. As an online merchant, you don’t have the physical card and can’t complete this request – obtain a different payment method from the customer.',
    '2048'=>'The authorized amount is set to zero, is unreadable, or exceeds the allowable amount. Make sure the amount is greater than zero and in a suitable format.',
    '2049'=>'A non-numeric value was sent with the attempted transaction. Fix errors and resubmit with the transaction with the proper SKU Number.',
    '2050'=>'There may be an issue with the customer’s card or a temporary issue at the card-issuing bank. The customer will need to contact their bank for more information or use a different payment method.',
    '2051'=>'There may be an issue with the customer’s credit card or a temporary issue at the card-issuing bank. Have the customer attempt the transaction again – if the decline persists, ask for a different card or payment method.',
    '2052'=>'Level III Data is inaccurate or missing.',
    '2053'=>'The card used was reported lost or stolen. The customer will need to contact their bank for more information or use a different payment method.',
    '2054'=>'Either the refund amount is greater than the original transaction or the card-issuing bank does not allow partial refunds. The customer will need to contact their bank for more information or use a different payment method.',
    '2055'=>'Contact us for more information regarding this error message.',
    '2056'=>'Contact us for more information regarding this error message.',
    '2057'=>'The customer will need to contact their issuing bank for more information.',
    '2058'=>'The attempted card can’t be processed without enabling 3D Secure for your account. Contact us for more information regarding this feature or contact the customer for a different payment method.',
    '2059'=>'PayPal was unable to verify that the transaction qualifies for Seller Protection because the address was improperly formatted. The customer should contact PayPal for more information or use a different payment method.',
    '2060'=>'Both the AVS and CVV checks failed for this transaction. The customer should contact PayPal for more information or use a different payment method.',
    '2061'=>'There may be an issue with the customer’s card or a temporary issue at the card-issuing bank. Have the customer attempt the transaction again – if the decline persists, ask for a different card or payment method.',
    '2062'=>'There may be an issue with the customer’s card or a temporary issue at the card-issuing bank. Have the customer attempt the transaction again – if the decline persists, ask for a different card or payment method.',
    '2063'=>'You can’t process this transaction because your account is set to block certain payment types, such as eChecks or foreign currencies. If you believe you have received this decline in error, contact us.',
    '2064'=>'There may be an issue with the configuration of your account for the currency specified. Contact us for more information.',
    '2065'=>'PayPal requires that refunds are issued within 180 days of the sale. This refund can’t be successfully processed.',
    '2066'=>'Contact PayPal’s Support team to resolve this issue with your account. Then, you can attempt the transaction again.',
    '2067'=>'The PayPal authorization is no longer valid.',
    '2068'=>'You’ll need to contact PayPal’s Support team to resolve an issue with your account. Once resolved, you can attempt to process the transaction again.',
    '2069'=>'The submitted PayPal transaction appears to be a duplicate of a previously submitted transaction. This decline code indicates an attempt to prevent charging the same PayPal account twice for the same service.',
    '2070'=>'The customer revoked authorization for this payment method. Reach out to the customer for more information or a different payment method.',
    '2071'=>'Customer has not finalized setup of their PayPal account. Reach out to the customer for more information or a different payment method.',
    '2072'=>'Customer made a typo or is attempting to use an invalid PayPal account.',
    '2073'=>'PayPal can’t validate this transaction. Contact us for more details.',
    '2074'=>'The customer’s payment method associated with their PayPal account was declined. Reach out to the customer for more information or a different payment method.',
    '2075'=>'The customer’s PayPal account can’t be used for transactions at this time. The customer will need to contact PayPal for more information or use a different payment method.',
    '2076'=>'The customer should contact PayPal for more information or use a different payment method. You may also receive this response if you create transactions using the email address registered with your PayPal Business Account.',
    '2077'=>'PayPal has declined this transaction due to risk limitations. You’ll need to contact PayPal’s Support team to resolve this issue.',
    '2078'=>'PIN cryptographic error found during decryption.',
    '2079'=>'You’ll need to contact us to resolve an issue with your account. Once resolved, you can attempt to process the transaction again.',
    '2080'=>'Invalid user credentials.',
    '2081'=>'Braintree received an unsupported Pending Verification response from PayPal. Contact Braintree’s Support team to resolve a potential issue with your account settings. If there is no issue with your account, have the customer reach out to PayPal for more information.',
    '2082'=>'This transaction requires the customer to be a resident of the same country as the merchant. Reach out to the customer for a different payment method.',
    '2083'=>'This transaction requires the payer to provide a valid phone number. The customer should contact PayPal for more information or use a different payment method.',
    '2084'=>'The customer must complete their PayPal account information, including submitting their phone number and all required tax information.',
    '2085'=>'Fraud settings on your PayPal business account are blocking payments from this customer. These can be adjusted in the Block Payments section of your PayPal business account.',
    '2086'=>'The settings on the customer’s account do not allow a transaction amount this large. They will need to contact PayPal to resolve this issue.',
    '2087'=>'PayPal API permissions are not set up to allow reference transactions. You’ll need to contact PayPal’s Support team to resolve an issue with your account. Once resolved, you can attempt to process the transaction again.',
    '2088'=>'This currency is not currently supported by your PayPal account. You can accept additional currencies by updating your PayPal profile.',
    '2089'=>'PayPal API permissions are not set up between your PayPal business accounts. Contact us for more information.',
    '2090'=>'Your PayPal or Venmo account is not set up to refund amounts higher than the original transaction amount. Contact PayPal’s Support team for information on how to enable this for your PayPal account.',
    '2091'=>'Your PayPal account can only process transactions in the currency of your home country. Contact PayPal’s Support team for more information.',
    '2092'=>'The processor is unable to provide a definitive answer about the customer’s bank account. Please try a different US bank account verification method.',
    '2093'=>'The PayPal payment method has either expired or been canceled.',
    '2094'=>'Your integration is likely making PayPal calls out of sequence. Check the error response for more details.',
    '2095'=>'Once a PayPal transaction is partially refunded, all subsequent refunds must also be partial refunds for the remaining amount or less. Full refunds are not allowed after a PayPal transaction has been partially refunded.',
    '2096'=>'PayPal buyer account can’t be the same as the seller account.',
    '2097'=>'PayPal authorization amount is greater than the allowed limit on the order.',
    '2098'=>'The number of PayPal authorizations is greater than the allowed number on the order.',
    '2099'=>'The customer’s bank declined the transaction because a 3D Secure authentication was not performed during checkout. Have the customer authenticate using 3D Secure, then attempt the authorization again.',
    '2100'=>'Your PayPal permissions are not set up to allow channel initiated billing transactions. Contact PayPal’s Support team for information on how to enable this. Once resolved, you can attempt to process the transaction again.',
    '2101'=>'This transaction requires additional customer credentials for authorization. The customer should insert their chip.',
    '2102'=>'The entered PIN was incorrect.',
    '2103'=>'The allowable number of PIN tries has been exceeded.',
    '2104'=>'The transaction was declined offline by the issuer. The customer will need to contact their bank for more information.',
    '2105'=>'The customer’s bank is unwilling to accept the transaction. The customer will need to contact their bank for more details regarding this generic decline.',
    '3000'=>'This response could indicate a problem with the back-end processing network, not necessarily a problem with the payment method. Have the customer attempt the transaction again – if the decline persists, contact us for more information.'
];