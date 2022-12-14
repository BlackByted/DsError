<?php

return [
    '*'=>'Keine Problembeschreibung gefunden.',
    'authentication_required'=>'Die Karte wurde abgelehnt, da diese Transaktion eine Authentifizierung erfordert. Bitte versuchen Sie es erneut und authentifizieren Sie die Karte, wenn Sie während der Transaktion angefordert werden. Wenn der Kartenausweis diesen Ablehnungscode in einer authentifizierten Transaktion sendet, müssen Sie sich an den Kartenausweis wenden, um weitere Informationen zu erhalten.',
    'approve_with_id'=>'Die Zahlung kann nicht autorisiert werden. Reininta die Zahlung. Wenn es immer noch nicht verarbeitet werden kann, müssen Sie sich an den Kartenaussteller wenden.',
    'call_issuer'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Sie müssen sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'card_not_supported'=>'Diese Art von Einkauf wird von der Karte nicht unterstützt. Bitte wenden Sie sich an den Emittenten, um zu bestätigen, ob Ihre Karte verwendet werden kann, um diese Art von Einkäufen zu tätigen.',
    'card_velocity_exceeded'=>'Der/die Kund/in hat das auf seiner/ihrer Karte verfügbare Guthaben oder Kreditlimit überschritten. Bitte Sie müssen sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'currency_not_supported'=>'Die angegebene Währung wird von der Karte nicht unterstützt. Bitte Sie müssen sich an den Emittenten wenden, um zu überprüfen, ob die Karte zum Kauf in der angegebenen Währung verwendet werden kann.',
    'do_not_honor'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Bitte müssen Sie sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'do_not_try_again'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Bitte Sie müssen sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'duplicate_transaction'=>'Eine Transaktion mit identischem Betrag und Kreditkarteninformationen wurde vor Kurzem eingereicht. Überprüfen Sie, ob bereits eine kürzliche Zahlung vorliegt.',
    'expired_card'=>'Die Karte ist abgelaufen. Sie müssen eine andere Karte verwenden.',
    'fraudulent'=>'Die Zahlung wurde abgelehnt, da Stripe sie als potenziell betrügerisch einstuft.',
    'generic_decline'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Bitte müssen Sie sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'incorrect_number'=>'Die Kartennummer ist inkorrekt. Stellen Sie sicher, dass die Kartennummer korrekt ist',
    'incorrect_cvc'=>'Die Prüfziffer ist inkorrekt. Überprüfen Sie, ob der eingeführte CVC korrekt ist',
    'incorrect_pin'=>'Die eingegebene PIN ist falsch. Dieser Ablehnungscode gilt nur für Zahlungen mit einem Kartenlesegerät. Der eingeführte Pin ist falsch. Versuchen Sie, Ihren rechten Pin vorzustellen',
    'incorrect_zip'=>'Die Postleitzahl ist inkorrekt. Bitte geben Sie den richtigen Abrechnungs -CP ein',
    'insufficient_funds'=>'Die Karte ist nicht ausreichend gedeckt, um den Kaufvorgang abzuschließen. Es wird empfohlen, ein anderes Zahlungsmittel zu verwenden',
    'invalid_account'=>'Die Karte oder das dazugehörige Konto sind ungültig. Überprüfen Sie, ob sich die Karte befindet, die aktiv ist',
    'invalid_amount'=>'Der Zahlungsbetrag ist ungültig oder überschreitet den zulässigen Betrag. Stellen Sie sicher, dass die maximale Menge Ihrer Karte größer ist, als Sie machen möchten',
    'invalid_cvc'=>'Die Prüfziffer ist inkorrekt. Überprüfen Sie, ob der CVC korrekt ist, und versuchen Sie es erneut',
    'invalid_expiry_month'=>'Der Ablaufmonat ist ungültig. Überprüfen Sie, ob der Monat des Ablaufs der richtige Ihrer Karte ist',
    'invalid_expiry_year'=>'Das Ablaufjahr ist ungültig. Überprüfen Sie, ob das Ablaufjahr das richtige Ihrer Karte ist',
    'invalid_number'=>'Die Kartennummer ist inkorrekt. Überprüfen Sie Ihre Kartennummer und versuchen Sie es erneut',
    'invalid_pin'=>'Die eingegebene PIN ist falsch. Dieser Ablehnungscode gilt nur für Zahlungen mit einem Kartenlesegerät. Stellen Sie sicher, dass der eingeführte PIN korrekt ist',
    'issuer_not_available'=>'Der Kartenaussteller konnte nicht kontaktiert werden. Somit kann die Zahlung nicht autorisiert werden. Wenden Sie sich an den Kartenausweis, wenn der Fehler anhält, wenn der Fehler anhält',
    'lost_card'=>'Die Zahlung wurde abgelehnt, da die Karte als verloren gemeldet wurde. Der spezifische Grund für die Ablehnung sollte dem Kunden nicht mitteilen. Es muss als generische Ablehnung dargestellt werden.',
    'merchant_blacklist'=>'Die Zahlung wurde abgelehnt, da sie mit einem Wert auf der Sperrliste von Stripe übereinstimmt.',
    'new_account_information_available'=>'Die Karte oder das dazugehörige Konto sind ungültig. Es ist erforderlich, den Kartenaussteller zu kontaktieren, um weitere Informationen zu erhalten',
    'no_action_taken'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Es ist erforderlich, den Kartenaussteller zu kontaktieren, um weitere Informationen zu erhalten',
    'not_permitted'=>'Die Zahlung ist nicht zulässig. Es ist erforderlich, den Kartenaussteller zu kontaktieren, um weitere Informationen zu erhalten',
    'offline_pin_required'=>'Die Karte wurde abgelehnt, da sie eine PIN erfordert. Die Zahlung erfasst und geben Sie Ihre PIN erneut ein',
    'online_or_offline_pin_required'=>'Die Karte wurde abgelehnt, da sie eine PIN erfordert. Wenn der Kartenleser mit der Einführung der Online -PIN kompatibel ist, muss die PIN vom Client angefordert werden, ohne eine neue Transaktion zu erstellen. Wenn der Kartenleser nicht mit der Einführung der Online -PIN kompatibel ist, muss der Kunde erneut versuchen, indem er seine Karte einfügt und die PIN einführt.',
    'pickup_card'=>'Der/die Kund/in kann diese Karte nicht für diese Zahlung verwenden (möglicherweise wurde sie als verloren oder gestohlen gemeldet). Für weitere Informationen sollten Sie sich an den Kartenausweis wenden.',
    'pin_try_exceeded'=>'Die zulässige Anzahl von PIN-Versuchen wurde überschritten. Versuchen Sie ein anderes Zahlungsmittel oder eine andere Falle',
    'processing_error'=>'Bei der Verarbeitung der Karte ist ein Fehler aufgetreten. Es ist notwendig, die Zahlung erneut zu leisten. Wenn Sie immer noch nicht verarbeitet werden können, versuchen Sie es später erneut.',
    'reenter_transaction'=>'Die Zahlung konnte aus unbekanntem Grund nicht vom Aussteller abgewickelt werden. Es ist notwendig, die Zahlung erneut zu leisten. Wenn Sie immer noch nicht verarbeitet werden können, sollten Sie sich an den Kartenausweis wenden.',
    'restricted_card'=>'Der/die Kund/in kann diese Karte nicht für diese Zahlung verwenden (möglicherweise wurde sie als verloren oder gestohlen gemeldet). Sie müssen sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'revocation_of_all_authorizations'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Sie müssen sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'revocation_of_all_authorizations'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Sie müssen sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'security_violation'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Sie müssen sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'service_not_allowed'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Sie müssen sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'stolen_card'=>'Die Zahlung wurde abgelehnt, da die Karte als gestohlen gemeldet wurde. Der spezifische Grund für die Ablehnung sollte dem Kunden nicht mitteilen.',
    'stop_payment_order'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Sie müssen sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'testmode_decline'=>'Eine Stripe-Testkartennummer wurde verwendet. Eine echte Karte, um Zahlungen zu leisten, sollte verwendet werden.',
    'transaction_not_allowed'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Sie müssen sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'try_again_later'=>'Die Karte wurde aus unbekanntem Grund abgelehnt. Fragen Sie es erneut. Wenn aufeinanderfolgende Zahlungen abgelehnt werden, müssen Sie sich an den Kartenaussteller wenden, um weitere Informationen zu erhalten.',
    'withdrawal_count_limit_exceeded'=>'Der/die Kund/in hat das auf seiner/ihrer Karte verfügbare Guthaben oder Kreditlimit überschritten. Versuchen Sie, eine andere Zahlungsmethode zu verwenden.',
    'account_country_invalid_address'=>'Das angelegte Landesadresse entspricht nicht dem Landland. Unternehmen müssen sich im selben Land wie das Konto befinden.',
    'account_error_country_change_requires_additional_steps'=>'Ihr Konto ist bereits als Connect -Plattform eingebaut. Das Ändern Ihres Landes erfordert zusätzliche Schritte. Bitte wenden Sie sich an die Stripe -Unterstützung, um weitere Informationen zu erhalten.',
    'account_information_mismatch'=>'Einige Kontoinformationen nicht übereinstimmen miteinander. Zum Beispiel müssen einige Banken möglicherweise verlangen, dass der name von Business_Profile.name mit dem Namen des Kontoinhabers übereinstimmen muss.',
    'account_invalid'=>'Die Konto-ID als Wert für den Stripe-Account-Header ist ungültig. Überprüfen Sie, ob Ihre Anfragen eine gültige Konto -ID angeben.',
    'account_number_invalid'=>'Die bereitgestellte Bankkontonummer ist ungültig (z. B. fehlende Ziffern). Bankkontoinformationen variieren von Land zu Land. Wir empfehlen, Validierungen in Ihren Anmeldeformularen basierend auf den von uns bereitgestellten Bankkonto -Formaten zu erstellen.',
    'acss_debit_session_incomplete'=>'Die ACSS -Debit -Sitzung ist noch nicht bereit, den Status zu vervollständigen. Bitte versuchen Sie die Anfrage später erneut.',
    'alipay_upgrade_required'=>'Diese Methode zum Erstellen von Alipay -Zahlungen wird nicht mehr unterstützt. Bitte aktualisieren Sie Ihre Integration, um stattdessen Quellen zu verwenden.',
    'amount_too_large'=>'Der angegebene Betrag ist größer als die zulässige maximale Menge. Verwenden Sie eine niedrigere Menge und versuchen Sie es erneut.',
    'amount_too_small'=>'Der angegebene Betrag ist geringer als der zulässige Mindestbetrag. Verwenden Sie einen höheren Betrag und versuchen Sie es erneut.',
    'api_key_expired'=>'Der bereitgestellte API -Schlüssel ist abgelaufen. Holen Sie sich Ihre aktuellen API -Schlüssel aus dem Dashboard und aktualisieren Sie Ihre Integration, um sie zu verwenden.',
    'authentication_required'=>'Die Zahlung erfordert die Authentifizierung, um fortzufahren. Wenn Ihr Kunde von der Sitzung abgeschlossen ist, benachrichtigen Sie Ihren Kunden, zu Ihrer Bewerbung zurückzukehren und die Zahlung abzuschließen. Wenn Sie den Parameter ERROR_ON_REQUIRES_ACTIONEN angegeben haben, sollte Ihr Kunde eine andere Karte ausprobieren, für die keine Authentifizierung erforderlich ist.',
    'balance_insufficient'=>'Die Übertragung oder Auszahlung konnte nicht abgeschlossen werden, da das zugehörige Konto keinen ausreichenden Saldo zur Verfügung stellt. Erstellen Sie eine neue Übertragung oder Auszahlung mit einem Betrag, der weniger als oder gleich dem verfügbaren Kontostand des Kontos entspricht.',
    'bank_account_bad_routing_numbers'=>'Es ist bekannt, dass das Bankkonto die fragliche Währung nicht unterstützt.',
    'bank_account_declined'=>'Das bereitgestellte Bankkonto kann nicht zur Gebühr verwendet werden, entweder weil es noch nicht überprüft wird oder nicht unterstützt wird.',
    'bank_account_exists'=>'Das Bankkonto ist bereits für das angegebene Kundenobjekt vorhanden. Wenn das Bankkonto auch einem anderen Kunden beigefügt sein sollte, geben Sie die richtige Kunden -ID bei, um die Anfrage erneut zu stellen.',
    'bank_account_unusable'=>'Das bereitgestellte Bankkonto kann nicht verwendet werden. Ein anderes Bankkonto muss verwendet werden.',
    'bank_account_unverified'=>'Ihre Connect -Plattform versucht, ein nicht überprüftes Bankkonto mit einem vernetzten Konto zu teilen.',
    'bank_account_verification_failed'=>'Das Bankkonto kann nicht überprüft werden, entweder weil die bereitgestellten Mikrodeposits -Beträge nicht mit den tatsächlichen Beträgen übereinstimmen oder weil die Überprüfung zu oft fehlgeschlagen ist.',
    'billing_invalid_mandate'=>'Das Abonnement oder die Rechnung versuchte die Zahlung für einen Paymentmethod ohne aktives Mandat. Um Abonnement- oder Rechnungszahlungen mit diesem PaymentMethod zu erstellen, muss es zuerst mit einem PaymentIntent oder einem Setupintent bestätigt werden.',
    'bitcoin_upgrade_required'=>'Diese Methode zum Erstellen von Bitcoin -Zahlungen wird nicht mehr unterstützt. Bitte aktualisieren Sie Ihre Integration, um stattdessen Quellen zu verwenden.',
    'card_decline_rate_limit_exceeded'=>'Diese Karte wurde zu oft abgelehnt. Sie können versuchen, diese Karte nach 24 Stunden erneut aufzuladen. Wir empfehlen Ihnen, sich an Ihren Kunden zu wenden, um sicherzustellen, dass er alle ihre Informationen richtig eingegeben hat und dass es keine Probleme mit ihrer Karte gibt.',
    'card_declined'=>'Die Karte wurde abgelehnt. Wenn eine Karte abgelehnt wird, enthält der zurückgegebene Fehler auch das Attribut "Ablehnung_Code" mit dem Grund, warum die Karte abgelehnt wurde. Siehe Dokumentation mit Ablehnungscodes, um mehr zu erfahren.',
    'cardholder_phone_number_required'=>'Sie müssen ein Telefon für die Ausstellung von Karteninhabern haben, die EU -Karten erstellen. Sie können keine EU -Karten ohne Telefon_Number für den Karteninhaber erstellen. Weitere Informationen finden Sie in der 3D Secure Documenierung.',
    'charge_already_captured'=>'Die Anklage, die Sie erfassen möchten, wurde bereits erfasst. Aktualisieren Sie die Anfrage mit einer nicht erfassten Gebühr -ID.',
    'charge_already_refunded'=>'Die Anklage, die Sie mit der Rückerstattung versuchen, wurde bereits erstattet. Aktualisieren Sie die Anfrage zur Verwendung der ID einer Gebühr, die nicht erstattet wurde.',
    'charge_disputed'=>'Die Anklage, die Sie mit der Rückerstattung versuchen, wurde zurückgefordert. Überprüfen Sie die Streit -Dokumentation, um zu erfahren, wie Sie auf den Streit reagieren können.',
    'charge_exceeds_source_limit'=>'Diese Gebühr würde dazu führen, dass Sie Ihr Rolling-Window-Verarbeitungslimit für diesen Quelltyp übertreffen. Bitte versuchen Sie die Gebühr später erneut oder kontaktieren Sie uns, um ein höheres Bearbeitungslimit anzufordern.',
    'charge_expired_for_capture'=>'Die Gebühr kann nicht erfasst werden, wenn die Genehmigung abgelaufen ist. Auth- und Erfassungsgebühren müssen innerhalb einer festgelegten Anzahl von Tagen erfasst werden (7 standardmäßig).',
    'charge_invalid_parameter'=>'Ein oder mehrere bereitgestellte Parameter waren für die angegebene Operation der Gebühr nicht zulässig. Überprüfen Sie unsere API -Referenz oder die zurückgegebene Fehlermeldung, um festzustellen, welche Werte für diese Gebühr nicht korrekt waren.',
    'clearing_code_unsupported'=>'Der bereitgestellte Lösungscode wird nicht unterstützt.',
    'country_code_invalid'=>'Der bereitgestellte Ländercode war ungültig.',
    'country_unsupported'=>'Ihre Plattform hat versucht, ein benutzerdefiniertes Konto in einem Land zu erstellen, das noch nicht unterstützt wird. Stellen Sie sicher, dass sich Benutzer nur in Ländern anmelden können, die von benutzerdefinierten Konten unterstützt werden.',
    'coupon_expired'=>'Der Gutschein für ein Abonnement oder eine Bestellung ist abgelaufen. Erstellen Sie entweder einen neuen Gutschein oder verwenden Sie eine vorhandene, die gültig ist.',
    'customer_max_payment_methods'=>'Die maximale Anzahl von Paymentmethods für diesen Kunden wurde erreicht. Entweder einige Paymentmethods von diesem Kunden abnehmen oder mit einem anderen Kunden fortfahren.',
    'customer_max_subscriptions'=>'Die maximale Anzahl von Abonnements für einen Kunden wurde erreicht. Kontaktieren Sie uns, wenn Sie diesen Fehler erhalten.',
    'debit_not_authorized'=>'Der Kunde hat seine Bank darüber informiert, dass diese Zahlung nicht autorisiert sei.',
    'email_invalid'=>'Die E -Mail -Adresse ist ungültig (z. B. nicht ordnungsgemäß formatiert). Überprüfen Sie, ob die E -Mail -Adresse ordnungsgemäß formatiert ist und nur erlaubte Zeichen enthält.',
    'expired_card'=>'Die Karte ist abgelaufen. Überprüfen Sie das Ablaufdatum oder verwenden Sie eine andere Karte.',
    'idempotency_key_in_use'=>'Der identisch bereitgestellte Taste für Idempotenz wird derzeit in einer anderen Anfrage verwendet. Dies tritt auf, wenn Ihre Integration gleichzeitig doppelte Anfragen stellt.',
    'incorrect_address'=>'Die Adresse der Karte ist falsch. Überprüfen Sie die Adresse der Karte oder verwenden Sie eine andere Karte.',
    'incorrect_cvc'=>'Der Sicherheitscode der Karte ist falsch. Überprüfen Sie den Sicherheitscode der Karte oder verwenden Sie eine andere Karte.',
    'incorrect_number'=>'Die Kartennummer ist falsch. Überprüfen Sie die Nummer der Karte oder verwenden Sie eine andere Karte.',
    'incorrect_zip'=>'Die Postleitzahl der Karte ist falsch. Überprüfen Sie die Postleitzahl der Karte oder verwenden Sie eine andere Karte.',
    'instant_payouts_config_disabled'=>'Dieses verbundene Konto ist nicht für sofortige Auszahlungen berechtigt. Bitten Sie die Plattform, sofortige Auszahlungen zu aktivieren.',
    'instant_payouts_currency_disabled'=>'Dieses angeschlossene Konto kann in dieser Währung nicht sofortige Auszahlungen in Anspruch nehmen. Bitten Sie die Plattform, sofortige Auszahlungen in dieser Währung zu aktivieren.',
    'instant_payouts_limit_exceeded'=>'Sie haben Ihre täglichen Verarbeitungsgrenzen für sofortige Auszahlungen erreicht.',
    'instant_payouts_unsupported'=>'Diese Karte ist nicht für sofortige Auszahlungen berechtigt. Probieren Sie eine Debitkarte einer unterstützten Bank aus.',
    'insufficient_funds'=>'Das Konto des Kunden verfügt über nicht genügend Mittel, um diese Zahlung abzudecken.',
    'intent_invalid_state'=>'Die Absicht ist nicht im Zustand, der für die Durchführung der Operation erforderlich ist.',
    'intent_verification_method_missing'=>'Die Absicht hat keine Überprüfungsmethode in seinem PaymentMethodOptions -Objekt angegeben.',
    'invalid_card_type'=>'Die als externe Konto bereitgestellte Karte wird für Auszahlungen nicht unterstützt. Bieten Sie stattdessen eine nicht erfasste Debitkarte an.',
    'invalid_characters'=>'Dieser dem Feld bereitgestellte Wert enthält Zeichen, die vom Feld nicht unterstützt werden.',
    'invalid_charge_amount'=>'Der angegebene Betrag ist ungültig. Der Ladungsbetrag muss eine positive Ganzzahl in der kleinsten Währungseinheit sein und den Mindest- oder Höchstbetrag nicht überschreiten.',
    'invalid_cvc'=>'Der Sicherheitscode der Karte ist ungültig. Überprüfen Sie den Sicherheitscode der Karte oder verwenden Sie eine andere Karte.',
    'invalid_expiry_month'=>'Der Ablaufmonat der Karte ist falsch. Überprüfen Sie das Ablaufdatum oder verwenden Sie eine andere Karte.',
    'invalid_expiry_year'=>'Das Ablaufjahr der Karte ist falsch. Überprüfen Sie das Ablaufdatum oder verwenden Sie eine andere Karte.',
    'invalid_number'=>'Die Kartennummer ist ungültig. Überprüfen Sie die Kartendetails oder verwenden Sie eine andere Karte.',
    'invalid_source_usage'=>'Die Quelle kann nicht verwendet werden, da sie sich nicht im richtigen Zustand befindet (z. B. versucht eine Gebühranforderung, eine Quelle mit ausstehender, fehlgeschlagener oder konsumierter Quelle zu verwenden). Überprüfen Sie den Status der Quelle, die Sie verwenden möchten.',
    'invoice_no_customer_line_items'=>'Für den angegebenen Kunden kann eine Rechnung nicht generiert werden, da es keine anhängigen Rechnungsgegenstände gibt. Überprüfen Sie, ob der richtige Kunde zuerst angegeben wird, oder erstellen Sie alle erforderlichen Rechnungselemente.',
    'invoice_no_payment_method_types'=>'Eine Rechnung kann nicht fertiggestellt werden, da für die Verarbeitung der Zahlung keine Zahlungsmethodenstypen zur Verfügung stehen. Ihre Rechnungsvorlageneinstellungen oder die Payment_Setings der Rechnung können möglicherweise die Zahlungsmethoden einschränken, oder Sie müssen möglicherweise mehr Zahlungsmethoden im Dashboard aktivieren.',
    'invoice_no_subscription_line_items'=>'Für das angegebene Abonnement kann eine Rechnung nicht generiert werden, da es keine anhängigen Rechnungsgegenstände gibt. Überprüfen Sie, ob das richtige Abonnement angegeben wird, oder erstellen Sie zuerst die erforderlichen Rechnungselemente.',
    'invoice_not_editable'=>'Die angegebene Rechnung kann nicht mehr bearbeitet werden. Erstellen Sie stattdessen zusätzliche Rechnungselemente, die auf die nächste Rechnung angewendet werden. Sie können entweder die nächste Rechnung manuell generieren oder darauf warten, dass er am Ende des Abrechnungszyklus automatisch generiert wird.',
    'invoice_on_behalf_of_not_editable'=>'Sie können die Eigenschaft on_Behalf_of einer Rechnung nicht aktualisieren, nachdem der Rechnung eine Nummer zugewiesen wurde.',
    'invoice_payment_intent_requires_action'=>'Diese Zahlung erfordert zusätzliche Benutzeraktion, bevor sie erfolgreich abgeschlossen werden können. Die Zahlung kann mit dem mit der Rechnung verbundenen PaymentIntent abgeschlossen werden. Weitere Informationen finden Sie auf dieser Seite.',
    'invoice_upcoming_none'=>'Es gibt keine bevorstehende Rechnung für den angegebenen Kunden zur Vorschau. Nur Kunden mit aktiven Abonnements oder ausstehenden Rechnungsartikeln haben Rechnungen, die eine Vorschau aufnehmen können.',
    'livemode_mismatch'=>'API -Schlüssel, Anfragen und Objekte für Test- und Live -Modus sind nur im Modus verfügbar, in dem sie sich befinden.',
    'lock_timeout'=>'Dieses Objekt kann derzeit nicht zugegriffen werden, da derzeit auf eine andere API -Anforderung oder ein Streifenprozess auf sie zugreifen. Wenn Sie diesen Fehler zeitweise sehen, geben Sie die Anfrage erneut ein. Wenn Sie diesen Fehler häufig sehen und mehrere gleichzeitige Anforderungen an ein einzelnes Objekt stellen, stellen Sie Ihre Anfragen seriell oder mit einem niedrigeren Preis ab. Weitere Informationen finden Sie in der Dokumentation zur Ratenlimitdokumentation.',
    'missing'=>'Es wurden sowohl eine Kunden- als auch eine Quell -ID zur Verfügung gestellt, aber die Quelle wurde nicht vor dem Kunden gespeichert. Um eine Gebühr für einen Kunden mit einer bestimmten Quelle zu erstellen, müssen Sie zunächst die Kartendaten speichern.',
    'no_account'=>'Das Bankkonto konnte nicht gefunden werden.',
    'not_allowed_on_standard_account'=>'Übertragungen und Auszahlungen im Namen eines Standardkontos sind nicht zulässig.',
    'out_of_inventory'=>'Ein oder mehrere Werbebuchungen sind nicht vorrätig. Wenn mehr Aktien verfügbar sind, aktualisieren Sie die ordnungsabbare Menge des Inventars und versuchen Sie es erneut.',
    'parameter_invalid_empty'=>'Ein oder mehrere erforderliche Werte wurden nicht bereitgestellt. Stellen Sie sicher, dass Anfragen alle erforderlichen Parameter enthalten.',
    'parameter_invalid_integer'=>'Ein oder mehrere der Parameter erfordert eine Ganzzahl, aber die bereitgestellten Werte waren ein anderer Typ. Stellen Sie sicher, dass für jedes Attribut nur unterstützte Werte bereitgestellt werden. In unserer API -Dokumentation finden Sie die Art der Daten, die jedes Attribut unterstützt.',
    'parameter_invalid_string_blank'=>'Ein oder mehrere Werte enthalten nur Weißespace. Überprüfen Sie die Werte in Ihrer Anfrage und aktualisieren Sie alle, die nur Whitespace enthalten.',
    'parameter_invalid_string_empty'=>'Ein oder mehrere erforderliche Zeichenfolgewerte sind leer. Stellen Sie sicher, dass die Zeichenfolgenwerte mindestens ein Zeichen enthalten.',
    'parameter_missing'=>'Ein oder mehrere erforderliche Werte fehlen. Überprüfen Sie unsere API -Dokumentation, um festzustellen, welche Werte die angegebene Ressource erstellen oder ändern müssen.',
    'parameter_unknown'=>'Die Anforderung enthält eine oder mehrere unerwartete Parameter. Entfernen Sie diese und versuchen Sie es erneut.',
    'parameters_exclusive'=>'Es wurden zwei oder mehr gegenseitig ausschließende Parameter bereitgestellt. Überprüfen Sie unsere API -Dokumentation oder die zurückgegebene Fehlermeldung, um festzustellen, welche Werte beim Erstellen oder Ändern der angegebenen Ressource zulässig sind.',
    'payment_intent_action_required'=>'Die bereitgestellte Zahlungsmethode erfordert Kundenaktionen, um zu vervollständigen, aber es wurde Fehler_on_requires_Action festgelegt. Wenn Sie diese Zahlungsmethode zu Ihrer Integration hinzufügen möchten, empfehlen wir Ihnen, Ihre Integration zuerst auf Aktionen zu verarbeiten.',
    'payment_intent_authentication_failure'=>'Die bereitgestellte Zahlungsmethode hat die Authentifizierung fehlgeschlagen. Stellen Sie eine neue Zahlungsmethode zur Verfügung, um zu versuchen, diesen Zahlungsabschluss erneut zu erfüllen.',
    'payment_intent_incompatible_payment_method'=>'Die Zahlung von PaymentIntent erwartete eine Zahlungsmethode mit unterschiedlichen Eigenschaften als das, was bereitgestellt wurde.',
    'payment_intent_invalid_parameter'=>'Ein oder mehrere bereitgestellte Parameter waren für den angegebenen Betrieb auf dem PaymentIntent nicht zulässig. Überprüfen Sie unsere API -Referenz oder die zurückgegebene Fehlermeldung, um festzustellen, welche Werte für diese Zahlung nicht korrekt waren.',
    'payment_intent_konbini_rejected_confirmation_number'=>'Die in payment_method_options [konbini] bereitgestellte Bestätigung_Number wurde vom Verarbeitungspartner zum Zeitpunkt der Bestätigung von Zahlungspflicht abgelehnt.',
    'payment_intent_mandate_invalid'=>'Das bereitgestellte Mandat ist ungültig und kann nicht für die Zahlungsabsicht verwendet werden.',
    'payment_intent_payment_attempt_expired'=>'Der jüngste Zahlungsversuch für die Zahlung ist abgelaufen. Weitere Informationen finden Sie in der Last_Payment_error -Eigenschaft auf dem PaymentIntent und geben Sie eine neue Zahlungsmethode an, um zu versuchen, diese Zahlung erneut zu erfüllen.',
    'payment_intent_payment_attempt_failed'=>'Der jüngste Zahlungsversuch für den Zahlungsabschluss ist fehlgeschlagen. Weitere Informationen finden Sie in der Last_Payment_error -Eigenschaft auf dem PaymentIntent und geben Sie eine neue Zahlungsmethode an, um zu versuchen, diese Zahlung erneut zu erfüllen.',
    'payment_intent_unexpected_state'=>'Der Staat des PaymentIntent war mit der Operation, die Sie ausführen wollten, unvereinbar.',
    'payment_method_bank_account_already_verified'=>'Dieses Bankkonto wurde bereits überprüft.',
    'payment_method_bank_account_blocked'=>'Dieses Bankkonto ist in der Vergangenheit nicht überprüft und kann nicht verwendet werden. Kontaktieren Sie uns, wenn Sie versuchen möchten, diese Bankkonto -Anmeldeinformationen zu verwenden.',
    'payment_method_billing_details_address_missing'=>'Die Abrechnungsdetails des PaymentMethod fehlen die Adressdetails. Bitte aktualisieren Sie die fehlenden Felder und versuchen Sie es erneut.',
    'payment_method_currency_mismatch'=>'Die angegebene Währung stimmt nicht mit der Währung für die beigefügte Zahlungsmethode überein. Eine Zahlung kann nur für dieselbe Währung erstellt werden wie die entsprechende Zahlungsmethode.',
    'payment_method_invalid_parameter'=>'Im Zahlungsmethodeobjekt wurde ein ungültiger Parameter bereitgestellt. Überprüfen Sie unsere API -Dokumentation oder die zurückgegebene Fehlermeldung für mehr Kontext.',
    'payment_method_invalid_parameter_testmode'=>'Der für die Zahlungsmethode vorgesehene Parameter darf in TestMode nicht verwendet werden. Überprüfen Sie unsere API -Dokumentation oder die zurückgegebene Fehlermeldung für mehr Kontext.',
    'payment_method_microdeposit_failed'=>'Mikrodepositionen wurden nicht auf das Bankkonto des Kunden eingelagert. Bitte überprüfen Sie das Konto, die Instituts- und Transitnummern sowie das Währungstyp.',
    'payment_method_microdeposit_verification_amounts_invalid'=>'Sie müssen genau zwei Mikrodeposit -Mengen bereitstellen.',
    'payment_method_microdeposit_verification_amounts_mismatch'=>'Die bereitgestellten Beträge stimmen nicht mit den Beträgen überein, die an das Bankkonto gesendet wurden.',
    'payment_method_microdeposit_verification_attempts_exceeded'=>'Sie haben die Anzahl der zulässigen Überprüfungsversuche überschritten.',
    'payment_method_microdeposit_verification_descriptor_code_mismatch'=>'Der bereitgestellte Bestätigungscode stimmt nicht mit dem an das Bankkonto gesendete.',
    'payment_method_microdeposit_verification_timeout'=>'Die Zahlungsmethode sollte innerhalb des erforderlichen Zeitraums mit Mikrodepositionen überprüft werden.',
    'payment_method_provider_decline'=>'Die Zahlung wurde vom Emittenten oder Kunden abgelehnt. Weitere Informationen finden Sie in der Last_Payment_error -Eigenschaft auf dem PaymentIntent und geben Sie eine neue Zahlungsmethode an, um zu versuchen, diese Zahlung erneut zu erfüllen.',
    'payment_method_provider_timeout'=>'Die Zahlungsmethode schlug aufgrund eines Auszeitsfehlers fehl. Weitere Informationen finden Sie in der Last_Payment_error -Eigenschaft auf dem PaymentIntent und geben Sie eine neue Zahlungsmethode an, um zu versuchen, diese Zahlung erneut zu erfüllen.',
    'payment_method_unactivated'=>'Der Vorgang kann nicht durchgeführt werden, da die verwendete Zahlungsmethode nicht aktiviert wurde. Aktivieren Sie die Zahlungsmethode im Dashboard und versuchen Sie es erneut.',
    'payment_method_unexpected_state'=>'Der Staat der bereitgestellten Zahlungsmethode war mit dem Betrieb, den Sie ausführen wollten, unvereinbar. Bestätigen Sie, dass sich die Zahlungsmethode in einem zulässigen Zustand für die angegebene Operation befindet, bevor Sie versuchen, sie auszuführen.',
    'payment_method_unsupported_type'=>'Die API unterstützt nur Zahlungsmethoden bestimmter Typen.',
    'payouts_not_allowed'=>'Auszahlungen wurden auf dem angeschlossenen Konto deaktiviert. Überprüfen Sie den Status des verbundenen Kontos, um festzustellen, ob zusätzliche Informationen bereitgestellt werden müssen oder ob die Auszahlungen aus einem anderen Grund deaktiviert wurden.',
    'platform_account_required'=>'Nur Stripe Connect -Plattformen können mit anderen Konten arbeiten. Wenn Sie eine Stripe Connect -Plattform einrichten müssen, können Sie dies im Dashboard tun.',
    'platform_api_key_expired'=>'Der von Ihrer Connect -Plattform bereitgestellte API -Schlüssel ist abgelaufen. Dies geschieht, wenn Ihre Plattform entweder einen neuen Schlüssel generiert hat oder das angeschlossene Konto von der Plattform getrennt wurde. Rufen Sie Ihre aktuellen API -Schlüssel aus dem Dashboard ein, aktualisieren Sie Ihre Integration oder wenden Sie sich an den Benutzer und verbinden Sie das Konto wieder.',
    'postal_code_invalid'=>'Die bereitgestellte Postleitzahl war falsch.',
    'processing_error'=>'Bei der Verarbeitung der Karte trat ein Fehler auf. Versuchen Sie es später oder mit einer anderen Zahlungsmethode erneut.',
    'product_inactive'=>'Das Produkt, zu dem dieses SKU gehört, ist nicht mehr zum Kauf erhältlich.',
    'rate_limit'=>'Zu viele Anfragen trafen sich zu schnell auf die API. Wir empfehlen eine exponentielle Rückseite Ihrer Anfragen.',
    'refer_to_customer'=>'Der Kunde hat die Zahlung mit seiner Bank gestoppt. Kontaktieren Sie sie für Details und um die Zahlung zu arrangieren.',
    'refund_disputed_payment'=>'Sie können keine umstrittene Zahlung zurückerstatten.',
    'resource_already_exists'=>'Es gibt bereits eine Ressource mit einer benutzerdefinierten ID (z. B. Plan oder Gutschein). Verwenden Sie einen anderen, eindeutigen Wert für ID und versuchen Sie es erneut.',
    'resource_missing'=>'Die bereitgestellte ID ist nicht gültig. Entweder existiert die Ressource nicht oder es wurde eine ID für eine andere Ressource bereitgestellt.',
    'return_intent_already_processed'=>'Sie können diese Rückerstattung nicht bestätigen, wie sie bereits verarbeitet wurde.',
    'routing_number_invalid'=>'Die bereitgestellte Bank -Routing -Nummer ist ungültig.',
    'secret_key_required'=>'Der bereitgestellte API -Schlüssel ist ein veröffentlichter Schlüssel, aber ein geheimer Schlüssel ist erforderlich. Holen Sie sich Ihre aktuellen API -Schlüssel aus dem Dashboard und aktualisieren Sie Ihre Integration, um sie zu verwenden.',
    'sepa_unsupported_account'=>'Ihr Konto unterstützt keine SEPA -Zahlungen.',
    'setup_attempt_failed'=>'Der neueste Setup -Versuch für den Setupentent ist gescheitert. Weitere Informationen finden Sie in der Last_setup_error -Eigenschaft auf dem Setupentent und geben Sie eine neue Zahlungsmethode an, um sie erneut einzurichten.',
    'setup_intent_authentication_failure'=>'Die bereitgestellte Zahlungsmethode hat die Authentifizierung fehlgeschlagen. Stellen Sie eine neue Zahlungsmethode zur Verfügung, um zu versuchen, dieses Setupent erneut zu erfüllen.',
    'setup_intent_invalid_parameter'=>'Ein oder mehrere bereitgestellte Parameter waren für die angegebene Operation auf dem Setupent nicht zulässig. Überprüfen Sie unsere API -Referenz oder die zurückgegebene Fehlermeldung, um festzustellen, welche Werte für diesen Setupent nicht korrekt waren.',
    'setup_intent_setup_attempt_expired'=>'Der neueste Setup -Versuch für den Setupentent ist abgelaufen. Weitere Informationen finden Sie in der Last_setup_error -Eigenschaft auf dem Setupentent und geben Sie eine neue Zahlungsmethode an, um diese Setupentent erneut abzuschließen.',
    'setup_intent_unexpected_state'=>'Der Staat des Setupintent war mit der Operation, die Sie ausführen versuchten, unvereinbar.',
    'shipping_calculation_failed'=>'Die Versandberechnung ist fehlgeschlagen, da die angegebenen Informationen entweder falsch waren oder nicht überprüft werden konnten.',
    'sku_inactive'=>'Die SKU ist inaktiv und nicht mehr zum Kauf erhältlich. Verwenden Sie eine andere SKU oder machen Sie den aktuellen SKU erneut aktiv.',
    'state_unsupported'=>'Tritt bei der Bereitstellung der Legal_Entity -Informationen für ein US -kundenspezifischer Konto auf, wenn der bereitgestellte Staat nicht unterstützt wird. (Dies ist hauptsächlich assoziierte Zustände und Gebiete.)',
    'status_transition_invalid'=>'Der angeforderte Statusübergang ist nicht gültig.',
    'tax_id_invalid'=>'Die bereitgestellte Steuer -ID -Nummer ist ungültig (z. B. fehlende Ziffern). Steuer -ID -Informationen variieren von Land zu Land, müssen jedoch mindestens neun Ziffern betragen.',
    'taxes_calculation_failed'=>'Steuerberechnung für die Bestellung fehlgeschlagen.',
    'terminal_location_country_unsupported'=>'Das Terminal ist derzeit nur in einigen Ländern erhältlich. Standorte in Ihrem Land können nicht in Livemode erstellt werden.',
    'testmode_charges_only'=>'Ihr Konto wurde nicht aktiviert und kann nur Testgebühren erstellen. Aktivieren Sie Ihr Konto im Dashboard, um mit der Verarbeitung von Live -Gebühren zu beginnen.',
    'tls_version_unsupported'=>'Ihre Integration verwendet eine ältere Version von TLS, die nicht unterstützt wird. Sie müssen TLS 1.2 oder höher verwenden.',
    'token_already_used'=>'Der bereitgestellte Token wurde bereits verwendet. Sie müssen ein neues Token erstellen, bevor Sie diese Anfrage wiederholen können.',
    'token_in_use'=>'Der bereitgestellte Token wird derzeit in einer anderen Anfrage verwendet. Dies tritt auf, wenn Ihre Integration gleichzeitig doppelte Anfragen stellt.',
    'transfer_source_balance_parameters_mismatch'=>'Beim Erstellen einer Übertragung sollte der Zahlungsparameter in Source_Balance nicht eingegeben werden, wenn der Saldo -Typ auf die Ausgabe festgelegt ist.',
    'transfers_not_allowed'=>'Die angeforderte Übertragung kann nicht erstellt werden. Kontaktieren Sie uns, wenn Sie diesen Fehler erhalten.',
    'url_invalid'=>'Die bereitgestellte URL ist ungültig. '
];