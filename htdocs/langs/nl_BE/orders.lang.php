<?php
/* Copyright (C) 2012	Regis Houssin	<regis@dolibarr.fr>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$orders = array(
		'CHARSET' => 'UTF-8',
		'OrdersArea' => 'Bestellings gebied',
		'SuppliersOrdersArea' => 'Leveranciers bestellingen gebied',
		'OrderCard' => 'Bestellingskaart',
		'OrderId' => 'Order Id',
		'Order' => 'Bestelling',
		'Orders' => 'Bestellingen',
		'OrderLine' => 'Order line',
		'OrderLines' => 'Order lines',
		'OrderFollow' => 'Opvolging',
		'OrderDate' => 'Bestellingsdatum',
		'OrderToProcess' => 'Order to process',
		'NewOrder' => 'Nieuwe bestelling',
		'ToOrder' => 'Naar bestelling',
		'MakeOrder' => 'Maak bestelling',
		'SupplierOrder' => 'Leverenaciersbestelling',
		'SuppliersOrders' => 'Leverenaciersbestellingen',
		'SuppliersOrdersRunning' => 'Huidige leverenaciersbestellingen',
		'CustomerOrder' => 'Klantenbestelling',
		'CustomersOrders' => 'Klantenbestellingen',
		'CustomersOrdersRunning' => 'Huidige klantenbestellingen',
		'CustomersOrdersAndOrdersLines' => 'Klant bestelling en bestellingen\' lijnen',
		'OrdersToValid' => 'Bestellingen te valideren',
		'OrdersToBill' => 'Betellingen te factureren',
		'OrdersInProcess' => 'Bestellingen in uitvoering',
		'OrdersToProcess' => 'Bestellingen af te handelen',
		'SuppliersOrdersToProcess' => 'Supplier\'s orders to process',
		'StatusOrderCanceledShort' => 'Geannuleerd',
		'StatusOrderDraftShort' => 'Klad',
		'StatusOrderValidatedShort' => 'Gevalideerd',
		'StatusOrderSentShort' => 'In process',
		'StatusOrderSent' => 'Shipment in process',
		'StatusOrderOnProcessShort' => 'In uitvoering',
		'StatusOrderProcessedShort' => 'Afgehandeld',
		'StatusOrderToBillShort' => 'Te factureren',
		'StatusOrderToBill2Short' => 'To bill',
		'StatusOrderApprovedShort' => 'Goedgekeurd',
		'StatusOrderRefusedShort' => 'Geweigerd',
		'StatusOrderToProcessShort' => 'Te verwerken',
		'StatusOrderReceivedPartiallyShort' => 'Gedeeltelijk ontvangen',
		'StatusOrderReceivedAllShort' => 'Ontvangen',
		'StatusOrderCanceled' => 'Geannuleerd',
		'StatusOrderDraft' => 'Klad (moet gevalideerd worden)',
		'StatusOrderValidated' => 'Gevalideerd',
		'StatusOrderOnProcess' => 'In uitvoering',
		'StatusOrderProcessed' => 'Afgehandeld',
		'StatusOrderToBill' => 'Te factureren',
		'StatusOrderToBill2' => 'To bill',
		'StatusOrderApproved' => 'Goedgekeurd',
		'StatusOrderRefused' => 'Geweigerd',
		'StatusOrderReceivedPartially' => 'Gedeeltelijk ontvangen',
		'StatusOrderReceivedAll' => 'Volledig ontvangen',
		'ShippingExist' => 'A shipment exists',
		'DraftOrWaitingApproved' => 'Klad of nog niet goedgekeurd',
		'DraftOrWaitingShipped' => 'Ontwerp of gevalideerd nog niet verzonden',
		'MenuOrdersToBill' => 'Bestellingen te factureren',
		'MenuOrdersToBill2' => 'Orders to bill',
		'SearchOrder' => 'Zoek bestelling',
		'Sending' => 'Verzending',
		'Sendings' => 'Verzendingen',
		'ShipProduct' => 'Verzend product',
		'Discount' => 'Korting',
		'CreateOrder' => 'Creëer bestelling',
		'RefuseOrder' => 'Weiger bestelling',
		'ApproveOrder' => 'Accepteer bestelling',
		'ValidateOrder' => 'Valideer bestelling',
		'UnvalidateOrder' => 'Unvalidate order',
		'DeleteOrder' => 'Verwijder bestelling',
		'CancelOrder' => 'Annuleer bestelling',
		'AddOrder' => 'Voeg bestelling toe',
		'AddToMyOrders' => 'Voeg toe aan mijn bestellingen',
		'AddToOtherOrders' => 'Voeg toe aan andere bestellingen',
		'ShowOrder' => 'Toon bestelling',
		'NoOpenedOrders' => 'Geen geopende bestellingen',
		'NoOtherOpenedOrders' => 'Geen andere geopende bestellingen',
		'OtherOrders' => 'Andere bestellingen',
		'LastOrders' => 'Laatste %s bestellingen',
		'LastModifiedOrders' => 'Laatste %s gewijzigde bestellingen',
		'LastClosedOrders' => 'Laatste %s afgesloten bestellingen',
		'AllOrders' => 'Alle bestellingen',
		'NbOfOrders' => 'Aantal bestellingen',
		'OrdersStatistics' => 'Bestellingstatistieken',
		'OrdersStatisticsSuppliers' => 'Leverancier bestellingen\' statistieken',
		'NumberOfOrdersByMonth' => 'Aantal bestellingen per maand',
		'AmountOfOrdersByMonthHT' => 'bedrag van de bestellingen per maand (exclusief BTW)',
		'ListOfOrders' => 'Lijst van bestellingen',
		'CloseOrder' => 'Afsluiten bestelling',
		'ConfirmCloseOrder' => 'Bent u zeker dat u deze bestelling wil afsluiten? Eens een bestelling is afgesloten, kan deze enkel nog gefactureerd worden.',
		'ConfirmCloseOrderIfSending' => 'Bent u zeker dat u deze bestelling wil afsluiten? Sluit een bestelling enkel af als alle verzendingen gedaan zijn.',
		'ConfirmDeleteOrder' => 'Bent u zeker dat u deze bestelling wil verwijderen ?',
		'ConfirmValidateOrder' => 'Bent u zeker dat u deze bestelling onder naam <b>%ss</b> wil valideren?',
		'ConfirmUnvalidateOrder' => 'Are you sure you want to restore order <b>%s</b> to draft status ?',
		'ConfirmCancelOrder' => 'Bent u zeker dat u deze bestelling wil annuleren?',
		'ConfirmMakeOrder' => 'Bent u zeker dat u deze bestelling gemaakt op <b>%ss</b> wil bevestigen?',
		'GenerateBill' => 'Genereer factuur',
		'ClassifyShipped' => 'Classify delivered',
		'ClassifyBilled' => 'Classify "Billed"',
		'ComptaCard' => 'Accountancy card',
		'DraftOrders' => 'Klad bestellingen',
		'RelatedOrders' => 'Gerelateerde bestellingen',
		'OnProcessOrders' => 'Bestellingen in uitvoering',
		'RefOrder' => 'Ref. bestelling',
		'RefCustomerOrder' => 'Ref. klant bestelling',
		'CustomerOrder' => 'Klantenbestelling',
		'RefCustomerOrderShort' => 'Ref. klant bestelling',
		'SendOrderByMail' => 'Verzend bestelling via mail',
		'ActionsOnOrder' => 'Acties op bestelling',
		'NoArticleOfTypeProduct' => 'Geen artikel van het type \'product\' dus geen verzendbaar artikel voor deze bestelling',
		'OrderMode' => 'Bestellingswijze',
		'AuthorRequest' => 'Verzoek auteur',
		'UseCustomerContactAsOrderRecipientIfExist' => 'Gebruik de klant zijn contactadres indien ingesteld, in de plaats van het adres van derde partijen voor ontvangst',
		'RunningOrders' => 'Lopende bestellingen',
		'UserWithApproveOrderGrant' => 'Gebruikers gemachtigd om "bestellingen goed te keuren".',
		'PaymentOrderRef' => 'Payment of order %s',
		'CloneOrder' => 'Clone order',
		'ConfirmCloneOrder' => 'Are you sure you want to clone this order <b>%s</b> ?',
		'DispatchSupplierOrder' => 'Receiving supplier order %s',
		////////// Types de contacts //////////
		'TypeContact_commande_internal_SALESREPFOLL' => 'Representative following-up customer order',
		'TypeContact_commande_internal_SHIPPING' => 'Representative following-up shipping',
		'TypeContact_commande_external_BILLING' => 'Customer invoice contact',
		'TypeContact_commande_external_SHIPPING' => 'Customer shipping contact',
		'TypeContact_commande_external_CUSTOMER' => 'Customer contact following-up order',
		'TypeContact_order_supplier_internal_SALESREPFOLL' => 'Representative following-up supplier order',
		'TypeContact_order_supplier_internal_SHIPPING' => 'Representative following-up shipping',
		'TypeContact_order_supplier_external_BILLING' => 'Supplier invoice contact',
		'TypeContact_order_supplier_external_SHIPPING' => 'Supplier shipping contact',
		'TypeContact_order_supplier_external_CUSTOMER' => 'Supplier contact following-up order',
		'Error_COMMANDE_SUPPLIER_ADDON_NotDefined' => 'Constante COMMANDE_SUPPLIER_ADDON niet gedefinieerd',
		'Error_COMMANDE_ADDON_NotDefined' => 'Constante COMMANDE_ADDON niet gedefinieerd',
		'Error_FailedToLoad_COMMANDE_SUPPLIER_ADDON_File' => 'Kan module file \'%ss\' niet laden',
		'Error_FailedToLoad_COMMANDE_ADDON_File' => 'Kan module file \'%ss\' niet laden',
		'Error_OrderNotChecked' => 'No orders to invoice selected',
		// Sources
		'OrderSource0' => 'Commercieel voorstel',
		'OrderSource1' => 'Internet',
		'OrderSource2' => 'Mail campagne',
		'OrderSource3' => 'Telefoon compagne',
		'OrderSource4' => 'Fax campagne',
		'OrderSource5' => 'Commerciëel',
		'OrderSource6' => 'Winkel',
		'QtyOrdered' => 'Hoeveelheid besteld',
		'AddDeliveryCostLine' => 'Voeg een lijn \'Leveringskost\' toe, duidend op het gewicht van de bestelling',
		// Documents models
		'PDFEinsteinDescription' => 'Een compleet bestel document (logo. ..)',
		'PDFEdisonDescription' => 'A simple order model',
		// Orders modes
		'OrderByMail' => 'Mail',
		'OrderByFax' => 'Fax',
		'OrderByEMail' => 'EMail',
		'OrderByWWW' => 'Online',
		'OrderByPhone' => 'Phone',
		'CreateInvoiceForThisCustomer' => 'Bill orders',
		'NoOrdersToInvoice' => 'No orders billable',
		'CloseProcessedOrdersAutomatically' => 'Classify "Processed" all selected orders.',
		'MenuOrdersToBill2' => 'Orders to bill',
		'LinkedInvoices' => 'Linked invoices',
		'LinkedProposals' => 'Linked proposals'
);
?>