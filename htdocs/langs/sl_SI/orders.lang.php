<?php
/* Copyright (C) 2012-2013	Regis Houssin	<regis.houssin@capnetworks.com>
 * Copyright (C) 2012-2013	Herve Prot		<herve.prot@symeos.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

$orders = array(
		'CHARSET' => 'UTF-8',
		'OrdersArea' => 'Področje naročil kupcev',
		'SuppliersOrdersArea' => 'Področje naročil pri dobaviteljih',
		'OrderCard' => 'Kartica naročila',
		'OrderId' => 'Order Id',
		'Order' => 'Naročilo',
		'Orders' => 'Naročila',
		'OrderLine' => 'Vrstica naročila',
		'OrderLines' => 'Order lines',
		'OrderFollow' => 'Sledenje naročilu',
		'OrderDate' => 'Datum naročila',
		'OrderToProcess' => 'Naročilo za obdelavo',
		'NewOrder' => 'Novo naročilo',
		'ToOrder' => 'Potrebno naročiti',
		'MakeOrder' => 'Izdelaj naročilo',
		'SupplierOrder' => 'Naročilo pri dobavitelju',
		'SuppliersOrders' => 'Naročila pri dobaviteljih',
		'SuppliersOrdersRunning' => 'Trenutna naročila pri dobaviteljih',
		'CustomerOrder' => 'Naročilo kupca',
		'CustomersOrders' => 'Naročila kupcev',
		'CustomersOrdersRunning' => 'Trenutna naročila kupcev',
		'CustomersOrdersAndOrdersLines' => 'Naročila kupcev in vrstice naročil',
		'OrdersToValid' => 'Naročila za potrditev',
		'OrdersToBill' => 'Naročila za fakturiranje',
		'OrdersInProcess' => 'Naročila v obdelavi',
		'OrdersToProcess' => 'Naročila za obdelavo',
		'SuppliersOrdersToProcess' => 'Naročila pri dobaviteljih za obdelavo',
		'StatusOrderCanceledShort' => 'Preklicano',
		'StatusOrderDraftShort' => 'Osnutek',
		'StatusOrderValidatedShort' => 'Potrjeno',
		'StatusOrderSentShort' => 'V postopku',
		'StatusOrderSent' => 'Shipment in process',
		'StatusOrderOnProcessShort' => 'V obdelavi',
		'StatusOrderProcessedShort' => 'Obdelano',
		'StatusOrderToBillShort' => 'Za fakturiranje',
		'StatusOrderToBill2Short' => 'To bill',
		'StatusOrderApprovedShort' => 'Odobreno',
		'StatusOrderRefusedShort' => 'Zavrnjeno',
		'StatusOrderToProcessShort' => 'Za obdelavo',
		'StatusOrderReceivedPartiallyShort' => 'Delno prejeto',
		'StatusOrderReceivedAllShort' => 'Prejeto v celoti',
		'StatusOrderCanceled' => 'Preklicano',
		'StatusOrderDraft' => 'Osnutek (potrebno potrditi)',
		'StatusOrderNeedQuotes' => 'Draft (needs manual quotes)',
		'StatusOrderNew' => 'New order (needs to be validated)',
		'StatusOrderProcessing' => 'Processing',
		'StatusOrderValidated' => 'Potrjeno',
		'StatusOrderOnProcess' => 'V obdelavi',
		'StatusOrderSending' => 'Sending',
		'StatusOrderClosed' => 'Closed (Shipped)',
		'StatusOrderToBill' => 'Za fakturiranje',
		'StatusOrderToBill2' => 'To bill',
		'StatusOrderApproved' => 'Odobreno',
		'StatusOrderRefused' => 'Zavrnjeno',
		'StatusOrderError' => 'Error',
		'StatusOrderReceivedPartially' => 'Delno prejeto',
		'StatusOrderReceivedAll' => 'Prejeto v celoti',
		'ShippingExist' => 'Pošiljka ne obstaja',
		'DraftOrWaitingApproved' => 'Osnutek ali odobritev, še ne naročen',
		'DraftOrWaitingShipped' => 'Osnutek ali potrditev, še ne odposlan',
		'MenuOrdersToBill' => 'Naročila za fakturiranje',
		'MenuOrdersToBill2' => 'Orders to bill',
		'SearchOrder' => 'Iskanje naročila',
		'Sending' => 'Pošiljka',
		'Sendings' => 'Pošiljke',
		'ShipProduct' => 'Pošlji izdelek',
		'Discount' => 'Popust',
		'CreateOrder' => 'Kreiraj naročilo',
		'RefuseOrder' => 'Zavrni naročilo',
		'ApproveOrder' => 'Odobri naročilo',
		'ValidateOrder' => 'Potrdi naročilo',
		'UnvalidateOrder' => 'Unvalidate red',
		'DeleteOrder' => 'Briši naročilo',
		'CancelOrder' => 'Prekliči naročilo',
		'AddOrder' => 'Dodaj naročilo',
		'AddToMyOrders' => 'Dodaj mojim naročilom',
		'AddToOtherOrders' => 'Dodaj ostalim naročilom',
		'ShowOrder' => 'Prikaži naročilo',
		'NoOpenedOrders' => 'Ni odprtih naročil',
		'NoOtherOpenedOrders' => 'Ni drugih odprtih naročil',
		'OtherOrders' => 'Ostala naročila',
		'LastOrders' => 'Zadnjih %s naročil',
		'LastModifiedOrders' => 'Zadnjih %s spremenjenih naročil',
		'LastClosedOrders' => 'Zadnjih %s zaključenih naročil',
		'AllOrders' => 'Vsa naročila',
		'NbOfOrders' => 'Število naročil',
		'OrdersStatistics' => 'Statistika naročil',
		'OrdersStatisticsSuppliers' => 'Statistika naročil pri dobaviteljih',
		'NumberOfOrdersByMonth' => 'Število naročil po mesecih',
		'AmountOfOrdersByMonthHT' => 'Znesek naročil po mesecih (brez DDV)',
		'ListOfOrders' => 'Seznam naročil',
		'CloseOrder' => 'Zaključi naročilo',
		'ConfirmCloseOrder' => 'Ali zares želite zaključiti to naročilo? Ko je naročilo zaključeno, ga lahko samo še fakturirate.',
		'ConfirmCloseOrderIfSending' => 'Ali zares želite zaključiti to naročilo? Naročilo morate zaključiti šele, ko so odpremljene vse pošiljke.',
		'ConfirmDeleteOrder' => 'Ali zares želite brisati to naročilo ?',
		'ConfirmValidateOrder' => 'Ali zares želite potrditi to naročilo z imenom <b>%s</b> ?',
		'ConfirmUnvalidateOrder' => 'Ali ste prepričani, da želite ponovno vzpostavi red <b>%s</b> na status osnutka?',
		'ConfirmCancelOrder' => 'Ali zares želite preklicati to naročilo ?',
		'ConfirmMakeOrder' => 'Ali zares želite potrditi izdelavo naročila <b>%s</b> ?',
		'GenerateBill' => 'Kreiraj račun',
		'ClassifyShipped' => 'Classify delivered',
		'ClassifyBilled' => 'Označi kot "Fakturiran"',
		'ComptaCard' => 'Računovodska kartica',
		'DraftOrders' => 'Osnutki naročil',
		'RelatedOrders' => 'Odvisna naročila',
		'OnProcessOrders' => 'Naročila v obdelavi',
		'RefOrder' => 'Ref. naročilo',
		'RefCustomerOrder' => 'Ref. naročilo kupca',
		'CustomerOrder' => 'Naročilo kupca',
		'RefCustomerOrderShort' => 'Ref. nar. kupca',
		'SendOrderByMail' => 'Pošlji naročilo po pošti',
		'ActionsOnOrder' => 'Aktivnosti ob naročilu',
		'NoArticleOfTypeProduct' => 'Na tem naročilu ni artiklov tipa \'proizvod\', zato ni potrebna odprema',
		'OrderMode' => 'Način oddaje naročila',
		'AuthorRequest' => 'Zahteva avtorja',
		'UseCustomerContactAsOrderRecipientIfExist' => 'Kot naslov prejemnika naročila uporabi kontaktni naslov kontakta pri kupcu namesto naslova partnerja',
		'RunningOrders' => 'Naročila v obdelavi',
		'UserWithApproveOrderGrant' => 'Uporabniki z dovoljenjem za "odobritev naročil".',
		'PaymentOrderRef' => 'Plačilo naročila %s',
		'CloneOrder' => 'Kloniraj naročilo',
		'ConfirmCloneOrder' => 'Ali zares želite klonirati to naročilo <b>%s</b> ?',
		'DispatchSupplierOrder' => 'Prejem naročila od dobavitelja %s',
		'DateDeliveryPlanned' => 'Date de livraison prévue',
		'SetDemandReason' => 'Définir l\'origine de la commande',
		////////// Types de contacts //////////
		'TypeContact_commande_internal_SALESREPFOLL' => 'Referent za sledenje naročila kupca',
		'TypeContact_commande_internal_SHIPPING' => 'Referent za sledenje odpreme',
		'TypeContact_commande_external_BILLING' => 'Kontakt za račune pri kupcu',
		'TypeContact_commande_external_SHIPPING' => 'Kontakt za dobave pri kupcu',
		'TypeContact_commande_external_CUSTOMER' => 'Kontakt za sledenje naročila pri kupcu',
		'TypeContact_order_supplier_internal_SALESREPFOLL' => 'Referent za sledenje naročila od dobavitelja',
		'TypeContact_order_supplier_internal_SHIPPING' => 'Referent za sledenje odpreme od dobavitelja',
		'TypeContact_order_supplier_external_BILLING' => 'Kontakt za račune pri dobavitelju',
		'TypeContact_order_supplier_external_SHIPPING' => 'Kontakt za odpreme pri dobavitelju',
		'TypeContact_order_supplier_external_CUSTOMER' => 'Kontakt za sledenje naročila pri dobavitelju',
		'Error_COMMANDE_SUPPLIER_ADDON_NotDefined' => 'Konstanta COMMANDE_SUPPLIER_ADDON ni definirana',
		'Error_COMMANDE_ADDON_NotDefined' => 'Konstanta COMMANDE_ADDON ni definirana',
		'Error_FailedToLoad_COMMANDE_SUPPLIER_ADDON_File' => 'Napaka pri nalaganju modulske datoteke \'%s\'',
		'Error_FailedToLoad_COMMANDE_ADDON_File' => 'Napaka pri nalaganju modulske datoteke \'%s\'',
		'Error_OrderNotChecked' => 'No orders to invoice selected',
		// Sources
		'OrderSource0' => 'Komercialna ponudba',
		'OrderSource1' => 'Internet',
		'OrderSource2' => 'Poštna kampanja',
		'OrderSource3' => 'Telefonska kampanja',
		'OrderSource4' => 'Kampanja po faxu',
		'OrderSource5' => 'Reklama',
		'OrderSource6' => 'Trgovina',
		'QtyOrdered' => 'Naročena količina',
		'AddDeliveryCostLine' => 'Dodaj vrstico s stroški dobave in navedeno težo',
		// Documents models
		'PDFEinsteinDescription' => 'Vzorec popolnega naročila (logo...)',
		'PDFEdisonDescription' => 'Vzorec enostavnega naročila',
		// Orders modes
		'OrderByMail' => 'Pošta',
		'OrderByFax' => 'Faks',
		'OrderByEMail' => 'E-pošta',
		'OrderByWWW' => 'Internet',
		'OrderByPhone' => 'Telefon',
		'CreateInvoiceForThisCustomer' => 'Bill orders',
		'NoOrdersToInvoice' => 'No orders billable',
		'CloseProcessedOrdersAutomatically' => 'Classify "Processed" all selected orders.',
		'MenuOrdersToBill2' => 'Orders to bill',
		'LinkedInvoices' => 'Linked invoices',
		'LinkedProposals' => 'Linked proposals',
		'ShippingHT' => 'Shipping cost'
);
?>