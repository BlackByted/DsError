<?php

return [
    '*'=>'No se encontró la descripción del problema.',
    'authentication_required'=>'La tarjeta se rechazó porque la transacción requiere autenticación.',
    'approve_with_id'=>'No se puede autorizar el pago.',
    'call_issuer'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'card_not_supported'=>'La tarjeta no acepta este tipo de compras.',
    'card_velocity_exceeded'=>'El cliente ha excedido el límite del saldo o del crédito disponible en su tarjeta.',
    'currency_not_supported'=>'La tarjeta no acepta la divisa especificada.',
    'do_not_honor'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'do_not_try_again'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'duplicate_transaction'=>'Hace muy poco se realizó otra transacción por el mismo importe con una tarjeta de crédito con los mismos datos.',
    'expired_card'=>'La tarjeta ha caducado.',
    'fraudulent'=>'El pago se ha rechazado porque Stripe sospecha que es fraudulento.',
    'generic_decline'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'incorrect_number'=>'El número de tarjeta no es correcto.',
    'incorrect_cvc'=>'El número de CVC no es correcto.',
    'incorrect_pin'=>'El PIN introducido es incorrecto. Este código de rechazo solo se aplica a los pagos efectuados con un lector de tarjetas.',
    'incorrect_zip'=>'El código postal no es correcto.',
    'insufficient_funds'=>'La tarjeta no tiene fondos suficientes para hacer la compra.',
    'invalid_account'=>'La tarjeta o la cuenta a la que está conectada la tarjeta no es válida.',
    'invalid_amount'=>'El importe del pago no es válido o excede el importe permitido.',
    'invalid_cvc'=>'El número de CVC no es correcto.',
    'invalid_expiry_month'=>'El mes de caducidad no es válido.',
    'invalid_expiry_year'=>'El año de caducidad no es válido.',
    'invalid_number'=>'El número de tarjeta no es correcto.',
    'invalid_pin'=>'El PIN introducido es incorrecto. Este código de rechazo solo se aplica a los pagos efectuados con un lector de tarjetas.',
    'issuer_not_available'=>'No se ha podido establecer contacto con el emisor de la tarjeta, así que no se ha podido autorizar el pago.',
    'lost_card'=>'El pago se ha rechazado porque la tarjeta figura como tarjeta perdida.',
    'merchant_blacklist'=>'El pago se ha rechazado porque coincide con un valor de la lista de bloqueo del usuario de Stripe.',
    'new_account_information_available'=>'La tarjeta o la cuenta a la que está conectada la tarjeta no es válida.',
    'no_action_taken'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'not_permitted'=>'El pago no está permitido.',
    'offline_pin_required'=>'La tarjeta se ha rechazado porque hace falta un PIN.',
    'online_or_offline_pin_required'=>'La tarjeta se ha rechazado porque hace falta un PIN.',
    'pickup_card'=>'El cliente no puede usar esta tarjeta para efectuar este pago. (Es posible que haya sido denunciada por pérdida o robo).',
    'pin_try_exceeded'=>'Se ha superado el número permitido de intentos de introducción del PIN.',
    'processing_error'=>'Ha ocurrido un error mientras se procesaba la tarjeta.',
    'reenter_transaction'=>'El emisor no ha podido procesar el pago por un motivo desconocido.',
    'restricted_card'=>'El cliente no puede usar esta tarjeta para efectuar este pago. (Es posible que haya sido denunciada por pérdida o robo).',
    'revocation_of_all_authorizations'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'revocation_of_all_authorizations'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'security_violation'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'service_not_allowed'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'stolen_card'=>'El pago se ha rechazado porque la tarjeta figura como robada.',
    'stop_payment_order'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'testmode_decline'=>'Se utilizó el número de una tarjeta de prueba de Stripe.',
    'transaction_not_allowed'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'try_again_later'=>'La tarjeta se ha rechazado por un motivo desconocido.',
    'withdrawal_count_limit_exceeded'=>'El cliente ha excedido el límite del saldo o del crédito disponible en su tarjeta.',
    'account_country_invalid_address'=>'El país de la dirección comercial proporcionada no coincide con el país de la cuenta. Las empresas deben ubicarse en el mismo país que la cuenta.',
    'account_error_country_change_requires_additional_steps'=>'Su cuenta ya ha incorporado como plataforma de conexión. Cambiar su país requiere pasos adicionales. Comuníquese con el soporte de rayas para obtener más información.',
    'account_information_mismatch'=>'Algunas información de la cuenta no coinciden entre sí. Por ejemplo, algunos bancos pueden requerir que el nombre de negocios_profile.name debe coincidir con el nombre del titular de la cuenta.',
    'account_invalid'=>'La ID de cuenta proporcionada como un valor para el encabezado Stripe-Account no es válido. Verifique que sus solicitudes estén especificando una ID de cuenta válida.',
    'account_number_invalid'=>'El número de cuenta bancaria proporcionado no es válido (por ejemplo, dígitos faltantes). La información de la cuenta bancaria varía de un país a otro. Recomendamos crear validaciones en sus formularios de inscripción basados ​​en los formatos de cuenta bancaria que proporcionamos.',
    'acss_debit_session_incomplete'=>'La sesión de débito de ACSS aún no está lista para hacer la transición para completar el estado. Intente de nuevo la solicitud más tarde.',
    'alipay_upgrade_required'=>'Este método para crear pagos de Alipay ya no es compatible. Actualice su integración para usar fuentes en su lugar.',
    'amount_too_large'=>'La cantidad especificada es mayor que la cantidad máxima permitida. Use una cantidad más baja y vuelva a intentarlo.',
    'amount_too_small'=>'La cantidad especificada es menor que la cantidad mínima permitida. Use una cantidad más alta e intente nuevamente.',
    'api_key_expired'=>'La clave API proporcionada ha expirado. Obtenga sus claves API actuales del tablero y actualice su integración para usarlas.',
    'authentication_required'=>'El pago requiere que continúe la autenticación. Si su cliente está fuera de sesión, notifique a su cliente que regrese a su solicitud y complete el pago. Si proporcionó el parámetro ERROR_ON_REQUIRES_ACTION, entonces su cliente debe intentar otra tarjeta que no requiere autenticación.',
    'balance_insufficient'=>'La transferencia o el pago no se pudo completar porque la cuenta asociada no tiene un saldo suficiente disponible. Cree una nueva transferencia o pago utilizando un monto menor o igual al saldo disponible de la cuenta.',
    'bank_account_bad_routing_numbers'=>'Se sabe que la cuenta bancaria no respalda la moneda en cuestión.',
    'bank_account_declined'=>'La cuenta bancaria proporcionada no se puede usar para cobrar, ya sea porque aún no está verificada o no es compatible.',
    'bank_account_exists'=>'La cuenta bancaria proporcionada ya existe en el objeto del cliente especificado. Si la cuenta bancaria también debe adjuntarse a un cliente diferente, incluya la ID de cliente correcta al hacer la solicitud nuevamente.',
    'bank_account_unusable'=>'La cuenta bancaria proporcionada no se puede utilizar. Se debe usar una cuenta bancaria diferente.',
    'bank_account_unverified'=>'Su plataforma de conexión está intentando compartir una cuenta bancaria no verificada con una cuenta conectada.',
    'bank_account_verification_failed'=>'La cuenta bancaria no se puede verificar, ya sea porque los montos de MicroDeposit proporcionados no coinciden con las cantidades reales, o porque la verificación ha fallado demasiadas veces.',
    'billing_invalid_mandate'=>'La suscripción o la factura intentaron pagar en un Method de pago sin un mandato activo. Para crear pagos de suscripción o factura con este Method de pago, debe confirmarse en la sesión con un PaymentIntent o Setupintent primero.',
    'bitcoin_upgrade_required'=>'Este método para crear pagos de bitcoin ya no es compatible. Actualice su integración para usar fuentes en su lugar.',
    'card_decline_rate_limit_exceeded'=>'Esta tarjeta ha sido rechazada muchas veces. Puede intentar cobrar esta tarjeta nuevamente después de 24 horas. Sugerimos comunicarse con su cliente para asegurarse de que hayan ingresado toda su información correctamente y que no hay problemas con su tarjeta.',
    'card_declined'=>'La tarjeta ha sido rechazada. Cuando se declina una tarjeta, el error devuelto también incluye el atributo Decline_Code con la razón por la cual se rechazó la tarjeta. Consulte nuestra documentación de códigos de declive para obtener más información.',
    'cardholder_phone_number_required'=>'Debe tener un phone_number en el archivo para emisores titulares de tarjetas que creen tarjetas de la UE. No puede crear tarjetas de la UE sin un phone_number en el archivo para el titular de la tarjeta. Consulte la documentación segura 3D para más detalles.',
    'charge_already_captured'=>'El cargo que intenta capturar ya ha sido capturado. Actualice la solicitud con una identificación de carga sin capturar.',
    'charge_already_refunded'=>'El cargo que intenta reembolsar ya ha sido reembolsado. Actualice la solicitud para usar la identificación de un cargo que no se ha reembolsado',
    'charge_disputed'=>'El cargo que intenta reembolsar ha sido acusado. Verifique la documentación de disputas para aprender cómo responder a la disputa.',
    'charge_exceeds_source_limit'=>'Esta carga haría que exceda su límite de procesamiento de ventana de rodadura para este tipo de fuente. Vuelva a intentar el cargo más tarde, o contáctenos para solicitar un límite de procesamiento más alto.',
    'charge_expired_for_capture'=>'El cargo no puede ser capturado ya que la autorización ha expirado. Los cargos de autenticación y captura deben capturarse dentro de un número establecido de días (7 por defecto).',
    'charge_invalid_parameter'=>'No se permitieron uno o más parámetros proporcionados para la operación dada en la carga. Verifique nuestra referencia de API o el mensaje de error devuelto para ver qué valores no eran correctos para esa carga.',
    'clearing_code_unsupported'=>'El código de compensación proporcionado no es compatible.',
    'country_code_invalid'=>'El código de país proporcionado no era válido',
    'country_unsupported'=>'Su plataforma intentó crear una cuenta personalizada en un país que aún no es compatible. Asegúrese de que los usuarios solo puedan registrarse en países respaldados por cuentas personalizadas.',
    'coupon_expired'=>'El cupón proporcionado para una suscripción u pedido ha expirado. Crea un nuevo cupón o usa uno existente que sea válido.',
    'customer_max_payment_methods'=>'Se ha alcanzado el número máximo de modos de pago para este cliente. Separe algunos modos de pago de este cliente o proceda con un cliente diferente.',
    'customer_max_subscriptions'=>'Se ha alcanzado el número máximo de suscripciones para un cliente. Contáctenos si está recibiendo este error.',
    'debit_not_authorized'=>'El cliente ha notificado a su banco que este pago no estaba autorizado.',
    'email_invalid'=>'La dirección de correo electrónico no es válida (por ejemplo, no está formateada correctamente). Verifique que la dirección de correo electrónico esté formateada correctamente y solo incluya caracteres permitidos.',
    'expired_card'=>'La tarjeta ha expirado. Verifique la fecha de vencimiento o use una tarjeta diferente.',
    'idempotency_key_in_use'=>'La clave de idempotencia proporcionada se está utilizando actualmente en otra solicitud. Esto ocurre si su integración está haciendo solicitudes duplicadas simultáneamente.',
    'incorrect_address'=>'La dirección de la tarjeta es incorrecta. Verifique la dirección de la tarjeta o use una tarjeta diferente.',
    'incorrect_cvc'=>'El código de seguridad de la tarjeta es incorrecto. Verifique el código de seguridad de la tarjeta o use una tarjeta diferente.',
    'incorrect_number'=>'El número de tarjeta es incorrecto. Verifique el número de la tarjeta o use una tarjeta diferente.',
    'incorrect_zip'=>'El código postal de la tarjeta es incorrecto. Verifique el código postal de la tarjeta o use una tarjeta diferente.',
    'instant_payouts_config_disabled'=>'Esta cuenta conectada no es elegible para pagos instantáneos. Solicite a la plataforma que habilite los pagos instantáneos.',
    'instant_payouts_currency_disabled'=>'Esta cuenta conectada no es elegible para pagos instantáneos en esta moneda. Solicite a la plataforma que habilite los pagos instantáneos en esta moneda.',
    'instant_payouts_limit_exceeded'=>'Ha alcanzado sus límites de procesamiento diarios para pagos instantáneos.',
    'instant_payouts_unsupported'=>'Esta tarjeta no es elegible para pagos instantáneos. Pruebe una tarjeta de débito de un banco compatible.',
    'insufficient_funds'=>'La cuenta del cliente no tiene fondos suficientes para cubrir este pago.',
    'intent_invalid_state'=>'La intención no está en el estado que se requiere para realizar la operación.',
    'intent_verification_method_missing'=>'Intención no tiene método de verificación especificado en su objeto de Methodocions de pago.',
    'invalid_card_type'=>'La tarjeta proporcionada como una cuenta externa no es compatible con los pagos. Proporcione una tarjeta de débito no preparada en su lugar.',
    'invalid_characters'=>'Este valor proporcionado al campo contiene caracteres que no están respaldados por el campo.',
    'invalid_charge_amount'=>'La cantidad especificada no es válida. La cantidad de carga debe ser un entero positivo en la unidad de divisas más pequeña y no exceder la cantidad mínima o máxima.',
    'invalid_cvc'=>'El código de seguridad de la tarjeta no es válido. Verifique el código de seguridad de la tarjeta o use una tarjeta diferente.',
    'invalid_expiry_month'=>'El mes de vencimiento de la tarjeta es incorrecto. Verifique la fecha de vencimiento o use una tarjeta diferente.',
    'invalid_expiry_year'=>'El año de vencimiento de la tarjeta es incorrecto. Verifique la fecha de vencimiento o use una tarjeta diferente.',
    'invalid_number'=>'El número de tarjeta no es válido. Verifique los detalles de la tarjeta o use una tarjeta diferente.',
    'invalid_source_usage'=>'La fuente no se puede usar porque no está en el estado correcto (por ejemplo, una solicitud de carga está tratando de usar una fuente con una fuente pendiente, fallida o consumida). Verifique el estado de la fuente que está intentando usar.',
    'invoice_no_customer_line_items'=>'No se puede generar una factura para el cliente especificado ya que no hay elementos de factura pendientes. Verifique que el cliente correcto se esté especificando o cree primero los elementos de factura necesarios.',
    'invoice_no_payment_method_types'=>'No se puede finalizar una factura porque no hay tipos de métodos de pago disponibles para procesar el pago. La configuración de la plantilla de su factura o las medidas de pago de la factura podrían estar restringiendo qué métodos de pago están disponibles, o es posible que necesite activar más métodos de pago en el tablero.',
    'invoice_no_subscription_line_items'=>'No se puede generar una factura para la suscripción especificada ya que no hay elementos de factura pendientes. Verifique que la suscripción correcta se esté especificando o cree primero los elementos de factura necesarios.',
    'invoice_not_editable'=>'La factura especificada ya no se puede editar. En su lugar, considere crear elementos de factura adicionales que se aplicarán a la próxima factura. Puede generar manualmente la próxima factura o esperar a que se genere automáticamente al final del ciclo de facturación.',
    'invoice_on_behalf_of_not_editable'=>'No puede actualizar la propiedad ON_BEHALF_OF de una factura después de que la factura haya sido asignada un número.',
    'invoice_payment_intent_requires_action'=>'Este pago requiere una acción adicional del usuario antes de que pueda completarse con éxito. El pago se puede completar utilizando el PaymentIntent asociado con la factura. Mira esta pagina para mas detalles.',
    'invoice_upcoming_none'=>'No hay una próxima factura en el cliente especificado para obtener una vista previa. Solo los clientes con suscripciones activas o elementos de factura pendientes tienen facturas que se pueden obtener de vista.',
    'livemode_mismatch'=>'Las claves, las solicitudes y los objetos de la API de prueba y el modo en vivo solo están disponibles dentro del modo en el que se encuentran.',
    'lock_timeout'=>'No se puede acceder a este objeto en este momento porque actualmente otra solicitud de API o proceso de franja está accediendo a él. Si ve este error de manera intermitente, vuelva a intentar la solicitud. Si ve este error con frecuencia y está haciendo múltiples solicitudes concurrentes a un solo objeto, realice sus solicitudes en serie o a una tasa más baja. Consulte la documentación del límite de tarifas para obtener más detalles.',
    'missing'=>'Se han proporcionado un cliente y una identificación de origen, pero la fuente no se ha guardado al cliente. Para crear un cargo para un cliente con una fuente específica, primero debe guardar los detalles de la tarjeta.',
    'no_account'=>'La cuenta bancaria no se pudo ubicar.',
    'not_allowed_on_standard_account'=>'No se permiten transferencias y pagos en nombre de una cuenta conectada estándar.',
    'out_of_inventory'=>'Una o más ped (s) de pedidos están agotados. Si hay más existencias disponibles, actualice la cantidad ordenable del inventario y vuelva a intentarlo.',
    'parameter_invalid_empty'=>'No se proporcionaron uno o más valores requeridos. Asegúrese de que las solicitudes incluyan todos los parámetros requeridos.',
    'parameter_invalid_integer'=>'Uno o más de los parámetros requieren un entero, pero los valores proporcionados eran de un tipo diferente. Asegúrese de que solo se proporcionen valores compatibles para cada atributo. Consulte nuestra documentación de API para buscar el tipo de datos que cada atributo admite.',
    'parameter_invalid_string_blank'=>'Uno o más valores proporcionados solo incluyeron espacios en blanco. Verifique los valores en su solicitud y actualice cualquiera que contenga solo espacios en blanco.',
    'parameter_invalid_string_empty'=>'Uno o más valores de cadena requeridos están vacíos. Asegúrese de que los valores de la cadena contengan al menos un carácter.',
    'parameter_missing'=>'Faltan uno o más valores requeridos. Verifique nuestra documentación de API para ver qué valores se requieren para crear o modificar el recurso especificado.',
    'parameter_unknown'=>'La solicitud contiene uno o más parámetros inesperados. Eliminarlos y intentarlo de nuevo.',
    'parameters_exclusive'=>'Se proporcionaron dos o más parámetros mutuamente excluyentes. Verifique nuestra documentación de API o el mensaje de error devuelto para ver qué valores se permiten al crear o modificar el recurso especificado.',
    'payment_intent_action_required'=>'El método de pago proporcionado requiere que las acciones del cliente se completen, pero se estableció ERROR_ON_REQUIRES_ACTION. Si desea agregar este método de pago a su integración, le recomendamos que primero actualice su integración para manejar las acciones.',
    'payment_intent_authentication_failure'=>'El método de pago proporcionado ha fallado en la autenticación. Proporcione un nuevo método de pago para intentar cumplir con este desempeño de pago nuevamente.',
    'payment_intent_incompatible_payment_method'=>'El pago esperaba un método de pago con diferentes propiedades de las que se proporcionó.',
    'payment_intent_invalid_parameter'=>'Uno o más parámetros proporcionados no se permitieron para la operación dada en el PaymentIntent. Verifique nuestra referencia de API o el mensaje de error devuelto para ver qué valores no eran correctos para ese impacto.',
    'payment_intent_konbini_rejected_confirmation_number'=>'La confirmación_number proporcionada en el pago_method_options [konbini] fue rechazado por el socio de procesamiento al momento de la confirmación de la línea de pago.',
    'payment_intent_mandate_invalid'=>'El mandato proporcionado no es válido y no se puede usar para la intención de pago.',
    'payment_intent_payment_attempt_expired'=>'El último intento de pago de PaymentIntent ha expirado. Verifique la propiedad de Last_Payment_Error en el PaymentIntent para obtener más detalles y proporcione un nuevo método de pago para intentar cumplir con este PaymentIntent nuevamente.',
    'payment_intent_payment_attempt_failed'=>'El último intento de pago de PaymentIntent ha fallado. Verifique la propiedad de Last_Payment_Error en el PaymentIntent para obtener más detalles y proporcione un nuevo método de pago para intentar cumplir con este PaymentIntent nuevamente.',
    'payment_intent_unexpected_state'=>'El estado de PaymentIntent era incompatible con la operación que estaba tratando de realizar.',
    'payment_method_bank_account_already_verified'=>'Esta cuenta bancaria ya ha sido verificada.',
    'payment_method_bank_account_blocked'=>'Esta cuenta bancaria ha fallado en la verificación en el pasado y no se puede usar. Contáctenos si desea intentar usar estas credenciales de cuenta bancaria.',
    'payment_method_billing_details_address_missing'=>'Los detalles de facturación del PaymetMethod faltan detalles de la dirección. Actualice los campos faltantes y vuelva a intentarlo.',
    'payment_method_currency_mismatch'=>'La moneda especificada no coincide con la moneda para el método de pago adjunto. Solo se puede crear un pago para la misma moneda que el método de pago correspondiente.',
    'payment_method_invalid_parameter'=>'El parámetro no válido se proporcionó en el objeto del método de pago. Verifique nuestra documentación de API o el mensaje de error devuelto para obtener más contexto.',
    'payment_method_invalid_parameter_testmode'=>'El parámetro proporcionado para el método de pago no puede usarse en TestMode. Verifique nuestra documentación de API o el mensaje de error devuelto para obtener más contexto.',
    'payment_method_microdeposit_failed'=>'Los microdeposits no se depositaron en la cuenta bancaria del cliente. Consulte la cuenta, la institución y los números de tránsito, así como el tipo de moneda.',
    'payment_method_microdeposit_verification_amounts_invalid'=>'Debe proporcionar exactamente dos cantidades de microdposit.',
    'payment_method_microdeposit_verification_amounts_mismatch'=>'Los montos proporcionados no coinciden con los montos que se enviaron a la cuenta bancaria.',
    'payment_method_microdeposit_verification_attempts_exceeded'=>'Ha excedido el número de intentos de verificación permitidos.',
    'payment_method_microdeposit_verification_descriptor_code_mismatch'=>'El código de verificación proporcionado no coincide con el enviado a la cuenta bancaria.',
    'payment_method_microdeposit_verification_timeout'=>'El método de pago debe verificarse con microdepósitos dentro del período requerido.',
    'payment_method_provider_decline'=>'El pago fue rechazado por el emisor o el cliente. Verifique la propiedad de Last_Payment_Error en el PaymentIntent para obtener más detalles y proporcione un nuevo método de pago para intentar cumplir con este PaymentIntent nuevamente.',
    'payment_method_provider_timeout'=>'El método de pago falló debido a un tiempo de espera. Verifique la propiedad de Last_Payment_Error en el PaymentIntent para obtener más detalles y proporcione un nuevo método de pago para intentar cumplir con este PaymentIntent nuevamente.',
    'payment_method_unactivated'=>'La operación no se puede realizar como el método de pago utilizado no se ha activado. Active el método de pago en el tablero, luego intente nuevamente.',
    'payment_method_unexpected_state'=>'El estado del método de pago proporcionado era incompatible con la operación que estaba tratando de realizar. Confirme que el método de pago está en un estado permitido para la operación dada antes de intentar realizarlo.',
    'payment_method_unsupported_type'=>'La API solo admite métodos de pago de ciertos tipos.',
    'payouts_not_allowed'=>'Los pagos se han deshabilitado en la cuenta conectada. Verifique el estado de la cuenta conectada para ver si se debe proporcionar información adicional, o si los pagos se han deshabilitado por otro motivo.',
    'platform_account_required'=>'Solo las plataformas de Stripe Connect pueden funcionar con otras cuentas. Si necesita configurar una plataforma Stripe Connect, puede hacerlo en el tablero.',
    'platform_api_key_expired'=>'La clave API proporcionada por su plataforma Connect ha expirado. Esto ocurre si su plataforma ha generado una nueva clave o la cuenta conectada se ha desconectado de la plataforma. Obtenga sus claves API actuales desde el tablero y actualice su integración, o comuníquese con el usuario y vuelva a conectar la cuenta.',
    'postal_code_invalid'=>'El código postal proporcionado fue incorrecto.',
    'processing_error'=>'Se produjo un error al procesar la tarjeta. Intente nuevamente más tarde o con un método de pago diferente.',
    'product_inactive'=>'El producto al que pertenece este sku ya no está disponible para su compra.',
    'rate_limit'=>'Demasiadas solicitudes llegaron a la API demasiado rápido. Recomendamos un retroceso exponencial de sus solicitudes.',
    'refer_to_customer'=>'El cliente ha detenido el pago con su banco. Póngase en contacto con ellos para obtener más detalles y organizar el pago.',
    'refund_disputed_payment'=>'No puede reembolsar un pago en disputa.',
    'resource_already_exists'=>'Ya existe un recurso con una ID especificada por el usuario (por ejemplo, plan o cupón). Use un valor diferente y único para ID e intente nuevamente.',
    'resource_missing'=>'La identificación proporcionada no es válida. O el recurso no existe, o se ha proporcionado una identificación para un recurso diferente.',
    'return_intent_already_processed'=>'No puede confirmar este reembolso ya que ya está procesado.',
    'routing_number_invalid'=>'El número de enrutamiento bancario proporcionado no es válido.',
    'secret_key_required'=>'La clave API proporcionada es una clave publicable, pero se requiere una clave secreta. Obtenga sus claves API actuales del tablero y actualice su integración para usarlas.',
    'sepa_unsupported_account'=>'Su cuenta no admite los pagos de SEPA.',
    'setup_attempt_failed'=>'El último intento de configuración para SetupItent ha fallado. Verifique la propiedad de Last_Setup_Error en el setUpIntent para obtener más detalles y proporcione un nuevo método de pago para intentar configurarla nuevamente.',
    'setup_intent_authentication_failure'=>'El método de pago proporcionado ha fallado en la autenticación. Proporcione un nuevo método de pago para intentar cumplir con este setupintent nuevamente.',
    'setup_intent_invalid_parameter'=>'No se permitió uno o más parámetros proporcionados para la operación dada en el SetupItent. Verifique nuestra referencia de API o el mensaje de error devuelto para ver qué valores no eran correctos para ese setUpIntent.',
    'setup_intent_setup_attempt_expired'=>'El último intento de configuración para SetupItent ha expirado. Consulte la propiedad de Last_Setup_Error en el setUpIntent para obtener más detalles y proporcione un nuevo método de pago para intentar completar este setupIntent nuevamente.',
    'setup_intent_unexpected_state'=>'El estado del setupintent era incompatible con la operación que estaba tratando de realizar.',
    'shipping_calculation_failed'=>'El cálculo del envío falló ya que la información proporcionada era incorrecta o no podía verificarse.',
    'sku_inactive'=>'El SKU está inactivo y ya no está disponible para su compra. Use un sku diferente o haga que el sku actual activo nuevamente',
    'state_unsupported'=>'Ocurre cuando se proporciona la información legal_entity para una cuenta personalizada de los EE. UU., Si no es compatible con el estado proporcionado. (Estos son principalmente estados y territorios asociados.)',
    'status_transition_invalid'=>'La transición de estado solicitada no es válida',
    'tax_id_invalid'=>'El número de identificación fiscal proporcionado no es válido (por ejemplo, dígitos faltantes). La información de identificación fiscal varía de un país a otro, pero debe ser al menos nueve dígitos.',
    'taxes_calculation_failed'=>'El cálculo de impuestos para la orden fallida.',
    'terminal_location_country_unsupported'=>'Actualmente, la terminal solo está disponible en algunos países. Las ubicaciones en su país no se pueden crear en Livemode.',
    'testmode_charges_only'=>'Su cuenta no ha sido activada y solo puede hacer cargos de prueba. Active su cuenta en el tablero para comenzar a procesar los cargos en vivo.',
    'tls_version_unsupported'=>'Su integración está utilizando una versión anterior de TLS que no es compatible. Debe estar usando TLS 1.2 o superior.',
    'token_already_used'=>'El token proporcionado ya ha sido utilizado. Debe crear un token nuevo antes de poder volver a intentar esta solicitud.',
    'token_in_use'=>'El token proporcionado se está utilizando actualmente en otra solicitud. Esto ocurre si su integración está haciendo solicitudes duplicadas simultáneamente.',
    'transfer_source_balance_parameters_mismatch'=>'Al crear una transferencia, el parámetro de pagos en fuente_balance no debe aprobarse cuando el tipo de saldo se establece en la emisión',
    'transfers_not_allowed'=>'La transferencia solicitada no se puede crear. Contáctenos si está recibiendo este error.',
    'url_invalid'=>'La URL proporcionada no es válida.'
];