<?php

namespace Kdyby\Money;


class CurrencyTable
{

	const VERSION = '2013-04-09';

    private static $records = array(
        "AFN" => array(
			"code" => "AFN",
			"number" => "971",
			"name" => "Afghani",
			"decimals" => "2",
			"countries" => array(
				'AFGHANISTAN',
			),
		),
		"EUR" => array(
			"code" => "EUR",
			"number" => "978",
			"name" => "Euro",
			"decimals" => "2",
			"countries" => array(
				'ÅLAND ISLANDS',
				'ANDORRA',
				'AUSTRIA',
				'BELGIUM',
				'CYPRUS',
				'ESTONIA',
				'EUROPEAN UNION',
				'FINLAND',
				'FRANCE',
				'FRENCH GUIANA',
				'FRENCH SOUTHERN TERRITORIES',
				'GERMANY',
				'GREECE',
				'GUADELOUPE',
				'HOLY SEE (VATICAN CITY STATE)',
				'IRELAND',
				'ITALY',
				'LUXEMBOURG',
				'MALTA',
				'MARTINIQUE',
				'MAYOTTE',
				'MONACO',
				'MONTENEGRO',
				'NETHERLANDS',
				'PORTUGAL',
				'RÉUNION',
				'SAINT BARTHÉLEMY',
				'SAINT MARTIN (FRENCH PART)',
				'SAINT PIERRE AND MIQUELON',
				'SAN MARINO',
				'SLOVAKIA',
				'SLOVENIA',
				'SPAIN',
				'Vatican City State (HOLY SEE)',
			),
		),
		"ALL" => array(
			"code" => "ALL",
			"number" => "008",
			"name" => "Lek",
			"decimals" => "2",
			"countries" => array(
				'ALBANIA',
			),
		),
		"DZD" => array(
			"code" => "DZD",
			"number" => "012",
			"name" => "Algerian Dinar",
			"decimals" => "2",
			"countries" => array(
				'ALGERIA',
			),
		),
		"USD" => array(
			"code" => "USD",
			"number" => "840",
			"name" => "US Dollar",
			"decimals" => "2",
			"countries" => array(
				'AMERICAN SAMOA',
				'BONAIRE, SINT EUSTATIUS AND SABA',
				'BRITISH INDIAN OCEAN TERRITORY',
				'ECUADOR',
				'EL SALVADOR',
				'GUAM',
				'HAITI',
				'MARSHALL ISLANDS',
				'MICRONESIA, FEDERATED STATES OF',
				'NORTHERN MARIANA ISLANDS',
				'PALAU',
				'PANAMA',
				'PUERTO RICO',
				'TIMOR-LESTE',
				'TURKS AND CAICOS ISLANDS',
				'UNITED STATES',
				'UNITED STATES MINOR OUTLYING ISLANDS',
				'VIRGIN ISLANDS (BRITISH)',
				'VIRGIN ISLANDS (US)',
			),
		),
		"AOA" => array(
			"code" => "AOA",
			"number" => "973",
			"name" => "Kwanza",
			"decimals" => "2",
			"countries" => array(
				'ANGOLA',
			),
		),
		"XCD" => array(
			"code" => "XCD",
			"number" => "951",
			"name" => "East Caribbean Dollar",
			"decimals" => "2",
			"countries" => array(
				'ANGUILLA',
				'ANTIGUA AND BARBUDA',
				'DOMINICA',
				'GRENADA',
				'MONTSERRAT',
				'SAINT KITTS AND NEVIS',
				'SAINT LUCIA',
				'SAINT VINCENT AND THE GRENADINES',
			),
		),
		"ARS" => array(
			"code" => "ARS",
			"number" => "032",
			"name" => "Argentine Peso",
			"decimals" => "2",
			"countries" => array(
				'ARGENTINA',
			),
		),
		"AMD" => array(
			"code" => "AMD",
			"number" => "051",
			"name" => "Armenian Dram",
			"decimals" => "2",
			"countries" => array(
				'ARMENIA',
			),
		),
		"AWG" => array(
			"code" => "AWG",
			"number" => "533",
			"name" => "Aruban Florin",
			"decimals" => "2",
			"countries" => array(
				'ARUBA',
			),
		),
		"AUD" => array(
			"code" => "AUD",
			"number" => "036",
			"name" => "Australian Dollar",
			"decimals" => "2",
			"countries" => array(
				'AUSTRALIA',
				'CHRISTMAS ISLAND',
				'COCOS (KEELING) ISLANDS',
				'HEARD ISLAND AND McDONALD ISLANDS',
				'KIRIBATI',
				'NAURU',
				'NORFOLK ISLAND',
				'TUVALU',
			),
		),
		"AZN" => array(
			"code" => "AZN",
			"number" => "944",
			"name" => "Azerbaijanian Manat",
			"decimals" => "2",
			"countries" => array(
				'AZERBAIJAN',
			),
		),
		"BSD" => array(
			"code" => "BSD",
			"number" => "044",
			"name" => "Bahamian Dollar",
			"decimals" => "2",
			"countries" => array(
				'BAHAMAS',
			),
		),
		"BHD" => array(
			"code" => "BHD",
			"number" => "048",
			"name" => "Bahraini Dinar",
			"decimals" => "3",
			"countries" => array(
				'BAHRAIN',
			),
		),
		"BDT" => array(
			"code" => "BDT",
			"number" => "050",
			"name" => "Taka",
			"decimals" => "2",
			"countries" => array(
				'BANGLADESH',
			),
		),
		"BBD" => array(
			"code" => "BBD",
			"number" => "052",
			"name" => "Barbados Dollar",
			"decimals" => "2",
			"countries" => array(
				'BARBADOS',
			),
		),
		"BYR" => array(
			"code" => "BYR",
			"number" => "974",
			"name" => "Belarussian Ruble",
			"decimals" => "0",
			"countries" => array(
				'BELARUS',
			),
		),
		"BZD" => array(
			"code" => "BZD",
			"number" => "084",
			"name" => "Belize Dollar",
			"decimals" => "2",
			"countries" => array(
				'BELIZE',
			),
		),
		"XOF" => array(
			"code" => "XOF",
			"number" => "952",
			"name" => "CFA Franc BCEAO",
			"decimals" => "0",
			"countries" => array(
				'BENIN',
				'BURKINA FASO',
				'CÔTE D\'IVOIRE',
				'GUINEA-BISSAU',
				'MALI',
				'NIGER',
				'SENEGAL',
				'TOGO',
			),
		),
		"BMD" => array(
			"code" => "BMD",
			"number" => "060",
			"name" => "Bermudian Dollar",
			"decimals" => "2",
			"countries" => array(
				'BERMUDA',
			),
		),
		"BTN" => array(
			"code" => "BTN",
			"number" => "064",
			"name" => "Ngultrum",
			"decimals" => "2",
			"countries" => array(
				'BHUTAN',
			),
		),
		"INR" => array(
			"code" => "INR",
			"number" => "356",
			"name" => "Indian Rupee",
			"decimals" => "2",
			"countries" => array(
				'BHUTAN',
				'INDIA',
			),
		),
		"BOB" => array(
			"code" => "BOB",
			"number" => "068",
			"name" => "Boliviano",
			"decimals" => "2",
			"countries" => array(
				'BOLIVIA, PLURINATIONAL STATE OF',
			),
		),
		"BOV" => array(
			"code" => "BOV",
			"number" => "984",
			"name" => "Mvdol",
			"decimals" => "2",
			"countries" => array(
				'BOLIVIA, PLURINATIONAL STATE OF',
			),
		),
		"BAM" => array(
			"code" => "BAM",
			"number" => "977",
			"name" => "Convertible Mark",
			"decimals" => "2",
			"countries" => array(
				'BOSNIA AND HERZEGOVINA',
			),
		),
		"BWP" => array(
			"code" => "BWP",
			"number" => "072",
			"name" => "Pula",
			"decimals" => "2",
			"countries" => array(
				'BOTSWANA',
			),
		),
		"NOK" => array(
			"code" => "NOK",
			"number" => "578",
			"name" => "Norwegian Krone",
			"decimals" => "2",
			"countries" => array(
				'BOUVET ISLAND',
				'NORWAY',
				'SVALBARD AND JAN MAYEN',
			),
		),
		"BRL" => array(
			"code" => "BRL",
			"number" => "986",
			"name" => "Brazilian Real",
			"decimals" => "2",
			"countries" => array(
				'BRAZIL',
			),
		),
		"BND" => array(
			"code" => "BND",
			"number" => "096",
			"name" => "Brunei Dollar",
			"decimals" => "2",
			"countries" => array(
				'BRUNEI DARUSSALAM',
			),
		),
		"BGN" => array(
			"code" => "BGN",
			"number" => "975",
			"name" => "Bulgarian Lev",
			"decimals" => "2",
			"countries" => array(
				'BULGARIA',
			),
		),
		"BIF" => array(
			"code" => "BIF",
			"number" => "108",
			"name" => "Burundi Franc",
			"decimals" => "0",
			"countries" => array(
				'BURUNDI',
			),
		),
		"KHR" => array(
			"code" => "KHR",
			"number" => "116",
			"name" => "Riel",
			"decimals" => "2",
			"countries" => array(
				'CAMBODIA',
			),
		),
		"XAF" => array(
			"code" => "XAF",
			"number" => "950",
			"name" => "CFA Franc BEAC",
			"decimals" => "0",
			"countries" => array(
				'CAMEROON',
				'CENTRAL AFRICAN REPUBLIC',
				'CHAD',
				'CONGO',
				'EQUATORIAL GUINEA',
				'GABON',
			),
		),
		"CAD" => array(
			"code" => "CAD",
			"number" => "124",
			"name" => "Canadian Dollar",
			"decimals" => "2",
			"countries" => array(
				'CANADA',
			),
		),
		"CVE" => array(
			"code" => "CVE",
			"number" => "132",
			"name" => "Cape Verde Escudo",
			"decimals" => "2",
			"countries" => array(
				'CAPE VERDE',
			),
		),
		"KYD" => array(
			"code" => "KYD",
			"number" => "136",
			"name" => "Cayman Islands Dollar",
			"decimals" => "2",
			"countries" => array(
				'CAYMAN ISLANDS',
			),
		),
		"CLF" => array(
			"code" => "CLF",
			"number" => "990",
			"name" => "Unidades de fomento",
			"decimals" => "0",
			"countries" => array(
				'CHILE',
			),
		),
		"CLP" => array(
			"code" => "CLP",
			"number" => "152",
			"name" => "Chilean Peso",
			"decimals" => "0",
			"countries" => array(
				'CHILE',
			),
		),
		"CNY" => array(
			"code" => "CNY",
			"number" => "156",
			"name" => "Yuan Renminbi",
			"decimals" => "2",
			"countries" => array(
				'CHINA',
			),
		),
		"COP" => array(
			"code" => "COP",
			"number" => "170",
			"name" => "Colombian Peso",
			"decimals" => "2",
			"countries" => array(
				'COLOMBIA',
			),
		),
		"COU" => array(
			"code" => "COU",
			"number" => "970",
			"name" => "Unidad de Valor Real",
			"decimals" => "2",
			"countries" => array(
				'COLOMBIA',
			),
		),
		"KMF" => array(
			"code" => "KMF",
			"number" => "174",
			"name" => "Comoro Franc",
			"decimals" => "0",
			"countries" => array(
				'COMOROS',
			),
		),
		"CDF" => array(
			"code" => "CDF",
			"number" => "976",
			"name" => "Congolese Franc",
			"decimals" => "2",
			"countries" => array(
				'CONGO, THE DEMOCRATIC REPUBLIC OF',
			),
		),
		"NZD" => array(
			"code" => "NZD",
			"number" => "554",
			"name" => "New Zealand Dollar",
			"decimals" => "2",
			"countries" => array(
				'COOK ISLANDS',
				'NEW ZEALAND',
				'NIUE',
				'PITCAIRN',
				'TOKELAU',
			),
		),
		"CRC" => array(
			"code" => "CRC",
			"number" => "188",
			"name" => "Costa Rican Colon",
			"decimals" => "2",
			"countries" => array(
				'COSTA RICA',
			),
		),
		"HRK" => array(
			"code" => "HRK",
			"number" => "191",
			"name" => "Croatian Kuna",
			"decimals" => "2",
			"countries" => array(
				'CROATIA',
			),
		),
		"CUC" => array(
			"code" => "CUC",
			"number" => "931",
			"name" => "Peso Convertible",
			"decimals" => "2",
			"countries" => array(
				'CUBA',
			),
		),
		"CUP" => array(
			"code" => "CUP",
			"number" => "192",
			"name" => "Cuban Peso",
			"decimals" => "2",
			"countries" => array(
				'CUBA',
			),
		),
		"ANG" => array(
			"code" => "ANG",
			"number" => "532",
			"name" => "Netherlands Antillean Guilder",
			"decimals" => "2",
			"countries" => array(
				'CURAÇAO',
				'SINT MAARTEN (DUTCH PART)',
			),
		),
		"CZK" => array(
			"code" => "CZK",
			"number" => "203",
			"name" => "Czech Koruna",
			"decimals" => "2",
			"countries" => array(
				'CZECH REPUBLIC',
			),
		),
		"DKK" => array(
			"code" => "DKK",
			"number" => "208",
			"name" => "Danish Krone",
			"decimals" => "2",
			"countries" => array(
				'DENMARK',
				'FAROE ISLANDS',
				'GREENLAND',
			),
		),
		"DJF" => array(
			"code" => "DJF",
			"number" => "262",
			"name" => "Djibouti Franc",
			"decimals" => "0",
			"countries" => array(
				'DJIBOUTI',
			),
		),
		"DOP" => array(
			"code" => "DOP",
			"number" => "214",
			"name" => "Dominican Peso",
			"decimals" => "2",
			"countries" => array(
				'DOMINICAN REPUBLIC',
			),
		),
		"EGP" => array(
			"code" => "EGP",
			"number" => "818",
			"name" => "Egyptian Pound",
			"decimals" => "2",
			"countries" => array(
				'EGYPT',
			),
		),
		"SVC" => array(
			"code" => "SVC",
			"number" => "222",
			"name" => "El Salvador Colon",
			"decimals" => "2",
			"countries" => array(
				'EL SALVADOR',
			),
		),
		"ERN" => array(
			"code" => "ERN",
			"number" => "232",
			"name" => "Nakfa",
			"decimals" => "2",
			"countries" => array(
				'ERITREA',
			),
		),
		"ETB" => array(
			"code" => "ETB",
			"number" => "230",
			"name" => "Ethiopian Birr",
			"decimals" => "2",
			"countries" => array(
				'ETHIOPIA',
			),
		),
		"FKP" => array(
			"code" => "FKP",
			"number" => "238",
			"name" => "Falkland Islands Pound",
			"decimals" => "2",
			"countries" => array(
				'FALKLAND ISLANDS (MALVINAS)',
			),
		),
		"FJD" => array(
			"code" => "FJD",
			"number" => "242",
			"name" => "Fiji Dollar",
			"decimals" => "2",
			"countries" => array(
				'FIJI',
			),
		),
		"XPF" => array(
			"code" => "XPF",
			"number" => "953",
			"name" => "CFP Franc",
			"decimals" => "0",
			"countries" => array(
				'FRENCH POLYNESIA',
				'NEW CALEDONIA',
				'WALLIS AND FUTUNA',
			),
		),
		"GMD" => array(
			"code" => "GMD",
			"number" => "270",
			"name" => "Dalasi",
			"decimals" => "2",
			"countries" => array(
				'GAMBIA',
			),
		),
		"GEL" => array(
			"code" => "GEL",
			"number" => "981",
			"name" => "Lari",
			"decimals" => "2",
			"countries" => array(
				'GEORGIA',
			),
		),
		"GHS" => array(
			"code" => "GHS",
			"number" => "936",
			"name" => "Ghana Cedi",
			"decimals" => "2",
			"countries" => array(
				'GHANA',
			),
		),
		"GIP" => array(
			"code" => "GIP",
			"number" => "292",
			"name" => "Gibraltar Pound",
			"decimals" => "2",
			"countries" => array(
				'GIBRALTAR',
			),
		),
		"GTQ" => array(
			"code" => "GTQ",
			"number" => "320",
			"name" => "Quetzal",
			"decimals" => "2",
			"countries" => array(
				'GUATEMALA',
			),
		),
		"GBP" => array(
			"code" => "GBP",
			"number" => "826",
			"name" => "Pound Sterling",
			"decimals" => "2",
			"countries" => array(
				'GUERNSEY',
				'ISLE OF MAN',
				'JERSEY',
				'UNITED KINGDOM',
			),
		),
		"GNF" => array(
			"code" => "GNF",
			"number" => "324",
			"name" => "Guinea Franc",
			"decimals" => "0",
			"countries" => array(
				'GUINEA',
			),
		),
		"GYD" => array(
			"code" => "GYD",
			"number" => "328",
			"name" => "Guyana Dollar",
			"decimals" => "2",
			"countries" => array(
				'GUYANA',
			),
		),
		"HTG" => array(
			"code" => "HTG",
			"number" => "332",
			"name" => "Gourde",
			"decimals" => "2",
			"countries" => array(
				'HAITI',
			),
		),
		"HNL" => array(
			"code" => "HNL",
			"number" => "340",
			"name" => "Lempira",
			"decimals" => "2",
			"countries" => array(
				'HONDURAS',
			),
		),
		"HKD" => array(
			"code" => "HKD",
			"number" => "344",
			"name" => "Hong Kong Dollar",
			"decimals" => "2",
			"countries" => array(
				'HONG KONG',
			),
		),
		"HUF" => array(
			"code" => "HUF",
			"number" => "348",
			"name" => "Forint",
			"decimals" => "2",
			"countries" => array(
				'HUNGARY',
			),
		),
		"ISK" => array(
			"code" => "ISK",
			"number" => "352",
			"name" => "Iceland Krona",
			"decimals" => "0",
			"countries" => array(
				'ICELAND',
			),
		),
		"IDR" => array(
			"code" => "IDR",
			"number" => "360",
			"name" => "Rupiah",
			"decimals" => "2",
			"countries" => array(
				'INDONESIA',
			),
		),
		"XDR" => array(
			"code" => "XDR",
			"number" => "960",
			"name" => "SDR (Special Drawing Right)",
			"decimals" => "0",
			"countries" => array(
				'INTERNATIONAL MONETARY FUND (IMF) ',
			),
		),
		"IRR" => array(
			"code" => "IRR",
			"number" => "364",
			"name" => "Iranian Rial",
			"decimals" => "2",
			"countries" => array(
				'IRAN, ISLAMIC REPUBLIC OF',
			),
		),
		"IQD" => array(
			"code" => "IQD",
			"number" => "368",
			"name" => "Iraqi Dinar",
			"decimals" => "3",
			"countries" => array(
				'IRAQ',
			),
		),
		"ILS" => array(
			"code" => "ILS",
			"number" => "376",
			"name" => "New Israeli Sheqel",
			"decimals" => "2",
			"countries" => array(
				'ISRAEL',
			),
		),
		"JMD" => array(
			"code" => "JMD",
			"number" => "388",
			"name" => "Jamaican Dollar",
			"decimals" => "2",
			"countries" => array(
				'JAMAICA',
			),
		),
		"JPY" => array(
			"code" => "JPY",
			"number" => "392",
			"name" => "Yen",
			"decimals" => "0",
			"countries" => array(
				'JAPAN',
			),
		),
		"JOD" => array(
			"code" => "JOD",
			"number" => "400",
			"name" => "Jordanian Dinar",
			"decimals" => "3",
			"countries" => array(
				'JORDAN',
			),
		),
		"KZT" => array(
			"code" => "KZT",
			"number" => "398",
			"name" => "Tenge",
			"decimals" => "2",
			"countries" => array(
				'KAZAKHSTAN',
			),
		),
		"KES" => array(
			"code" => "KES",
			"number" => "404",
			"name" => "Kenyan Shilling",
			"decimals" => "2",
			"countries" => array(
				'KENYA',
			),
		),
		"KPW" => array(
			"code" => "KPW",
			"number" => "408",
			"name" => "North Korean Won",
			"decimals" => "2",
			"countries" => array(
				'KOREA, DEMOCRATIC PEOPLE’S REPUBLIC OF',
			),
		),
		"KRW" => array(
			"code" => "KRW",
			"number" => "410",
			"name" => "Won",
			"decimals" => "0",
			"countries" => array(
				'KOREA, REPUBLIC OF',
			),
		),
		"KWD" => array(
			"code" => "KWD",
			"number" => "414",
			"name" => "Kuwaiti Dinar",
			"decimals" => "3",
			"countries" => array(
				'KUWAIT',
			),
		),
		"KGS" => array(
			"code" => "KGS",
			"number" => "417",
			"name" => "Som",
			"decimals" => "2",
			"countries" => array(
				'KYRGYZSTAN',
			),
		),
		"LAK" => array(
			"code" => "LAK",
			"number" => "418",
			"name" => "Kip",
			"decimals" => "2",
			"countries" => array(
				'LAO PEOPLE’S DEMOCRATIC REPUBLIC',
			),
		),
		"LVL" => array(
			"code" => "LVL",
			"number" => "428",
			"name" => "Latvian Lats",
			"decimals" => "2",
			"countries" => array(
				'LATVIA',
			),
		),
		"LBP" => array(
			"code" => "LBP",
			"number" => "422",
			"name" => "Lebanese Pound",
			"decimals" => "2",
			"countries" => array(
				'LEBANON',
			),
		),
		"LSL" => array(
			"code" => "LSL",
			"number" => "426",
			"name" => "Loti",
			"decimals" => "2",
			"countries" => array(
				'LESOTHO',
			),
		),
		"ZAR" => array(
			"code" => "ZAR",
			"number" => "710",
			"name" => "Rand",
			"decimals" => "2",
			"countries" => array(
				'LESOTHO',
				'NAMIBIA',
				'SOUTH AFRICA',
			),
		),
		"LRD" => array(
			"code" => "LRD",
			"number" => "430",
			"name" => "Liberian Dollar",
			"decimals" => "2",
			"countries" => array(
				'LIBERIA',
			),
		),
		"LYD" => array(
			"code" => "LYD",
			"number" => "434",
			"name" => "Libyan Dinar",
			"decimals" => "3",
			"countries" => array(
				'LIBYA',
			),
		),
		"CHF" => array(
			"code" => "CHF",
			"number" => "756",
			"name" => "Swiss Franc",
			"decimals" => "2",
			"countries" => array(
				'LIECHTENSTEIN',
				'SWITZERLAND',
			),
		),
		"LTL" => array(
			"code" => "LTL",
			"number" => "440",
			"name" => "Lithuanian Litas",
			"decimals" => "2",
			"countries" => array(
				'LITHUANIA',
			),
		),
		"MOP" => array(
			"code" => "MOP",
			"number" => "446",
			"name" => "Pataca",
			"decimals" => "2",
			"countries" => array(
				'MACAO',
			),
		),
		"MKD" => array(
			"code" => "MKD",
			"number" => "807",
			"name" => "Denar",
			"decimals" => "2",
			"countries" => array(
				'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
			),
		),
		"MGA" => array(
			"code" => "MGA",
			"number" => "969",
			"name" => "Malagasy Ariary",
			"decimals" => "2",
			"countries" => array(
				'MADAGASCAR',
			),
		),
		"MWK" => array(
			"code" => "MWK",
			"number" => "454",
			"name" => "Kwacha",
			"decimals" => "2",
			"countries" => array(
				'MALAWI',
			),
		),
		"MYR" => array(
			"code" => "MYR",
			"number" => "458",
			"name" => "Malaysian Ringgit",
			"decimals" => "2",
			"countries" => array(
				'MALAYSIA',
			),
		),
		"MVR" => array(
			"code" => "MVR",
			"number" => "462",
			"name" => "Rufiyaa",
			"decimals" => "2",
			"countries" => array(
				'MALDIVES',
			),
		),
		"MRO" => array(
			"code" => "MRO",
			"number" => "478",
			"name" => "Ouguiya",
			"decimals" => "2",
			"countries" => array(
				'MAURITANIA',
			),
		),
		"MUR" => array(
			"code" => "MUR",
			"number" => "480",
			"name" => "Mauritius Rupee",
			"decimals" => "2",
			"countries" => array(
				'MAURITIUS',
			),
		),
		"XUA" => array(
			"code" => "XUA",
			"number" => "965",
			"name" => "ADB Unit of Account",
			"decimals" => "0",
			"countries" => array(
				'MEMBER COUNTRIES OF THE AFRICAN DEVELOPMENT BANK GROUP',
			),
		),
		"MXN" => array(
			"code" => "MXN",
			"number" => "484",
			"name" => "Mexican Peso",
			"decimals" => "2",
			"countries" => array(
				'MEXICO',
			),
		),
		"MXV" => array(
			"code" => "MXV",
			"number" => "979",
			"name" => "Mexican Unidad de Inversion (UDI)",
			"decimals" => "2",
			"countries" => array(
				'MEXICO',
			),
		),
		"MDL" => array(
			"code" => "MDL",
			"number" => "498",
			"name" => "Moldovan Leu",
			"decimals" => "2",
			"countries" => array(
				'MOLDOVA, REPUBLIC OF',
			),
		),
		"MNT" => array(
			"code" => "MNT",
			"number" => "496",
			"name" => "Tugrik",
			"decimals" => "2",
			"countries" => array(
				'MONGOLIA',
			),
		),
		"MAD" => array(
			"code" => "MAD",
			"number" => "504",
			"name" => "Moroccan Dirham",
			"decimals" => "2",
			"countries" => array(
				'MOROCCO',
				'WESTERN SAHARA',
			),
		),
		"MZN" => array(
			"code" => "MZN",
			"number" => "943",
			"name" => "Mozambique Metical",
			"decimals" => "2",
			"countries" => array(
				'MOZAMBIQUE',
			),
		),
		"MMK" => array(
			"code" => "MMK",
			"number" => "104",
			"name" => "Kyat",
			"decimals" => "2",
			"countries" => array(
				'MYANMAR',
			),
		),
		"NAD" => array(
			"code" => "NAD",
			"number" => "516",
			"name" => "Namibia Dollar",
			"decimals" => "2",
			"countries" => array(
				'NAMIBIA',
			),
		),
		"NPR" => array(
			"code" => "NPR",
			"number" => "524",
			"name" => "Nepalese Rupee",
			"decimals" => "2",
			"countries" => array(
				'NEPAL',
			),
		),
		"NIO" => array(
			"code" => "NIO",
			"number" => "558",
			"name" => "Cordoba Oro",
			"decimals" => "2",
			"countries" => array(
				'NICARAGUA',
			),
		),
		"NGN" => array(
			"code" => "NGN",
			"number" => "566",
			"name" => "Naira",
			"decimals" => "2",
			"countries" => array(
				'NIGERIA',
			),
		),
		"OMR" => array(
			"code" => "OMR",
			"number" => "512",
			"name" => "Rial Omani",
			"decimals" => "3",
			"countries" => array(
				'OMAN',
			),
		),
		"PKR" => array(
			"code" => "PKR",
			"number" => "586",
			"name" => "Pakistan Rupee",
			"decimals" => "2",
			"countries" => array(
				'PAKISTAN',
			),
		),
		"PAB" => array(
			"code" => "PAB",
			"number" => "590",
			"name" => "Balboa",
			"decimals" => "2",
			"countries" => array(
				'PANAMA',
			),
		),
		"PGK" => array(
			"code" => "PGK",
			"number" => "598",
			"name" => "Kina",
			"decimals" => "2",
			"countries" => array(
				'PAPUA NEW GUINEA',
			),
		),
		"PYG" => array(
			"code" => "PYG",
			"number" => "600",
			"name" => "Guarani",
			"decimals" => "0",
			"countries" => array(
				'PARAGUAY',
			),
		),
		"PEN" => array(
			"code" => "PEN",
			"number" => "604",
			"name" => "Nuevo Sol",
			"decimals" => "2",
			"countries" => array(
				'PERU',
			),
		),
		"PHP" => array(
			"code" => "PHP",
			"number" => "608",
			"name" => "Philippine Peso",
			"decimals" => "2",
			"countries" => array(
				'PHILIPPINES',
			),
		),
		"PLN" => array(
			"code" => "PLN",
			"number" => "985",
			"name" => "Zloty",
			"decimals" => "2",
			"countries" => array(
				'POLAND',
			),
		),
		"QAR" => array(
			"code" => "QAR",
			"number" => "634",
			"name" => "Qatari Rial",
			"decimals" => "2",
			"countries" => array(
				'QATAR',
			),
		),
		"RON" => array(
			"code" => "RON",
			"number" => "946",
			"name" => "New Romanian Leu",
			"decimals" => "2",
			"countries" => array(
				'ROMANIA',
			),
		),
		"RUB" => array(
			"code" => "RUB",
			"number" => "643",
			"name" => "Russian Ruble",
			"decimals" => "2",
			"countries" => array(
				'RUSSIAN FEDERATION',
			),
		),
		"RWF" => array(
			"code" => "RWF",
			"number" => "646",
			"name" => "Rwanda Franc",
			"decimals" => "0",
			"countries" => array(
				'RWANDA',
			),
		),
		"SHP" => array(
			"code" => "SHP",
			"number" => "654",
			"name" => "Saint Helena Pound",
			"decimals" => "2",
			"countries" => array(
				'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA',
			),
		),
		"WST" => array(
			"code" => "WST",
			"number" => "882",
			"name" => "Tala",
			"decimals" => "2",
			"countries" => array(
				'SAMOA',
			),
		),
		"STD" => array(
			"code" => "STD",
			"number" => "678",
			"name" => "Dobra",
			"decimals" => "2",
			"countries" => array(
				'SAO TOME AND PRINCIPE',
			),
		),
		"SAR" => array(
			"code" => "SAR",
			"number" => "682",
			"name" => "Saudi Riyal",
			"decimals" => "2",
			"countries" => array(
				'SAUDI ARABIA',
			),
		),
		"RSD" => array(
			"code" => "RSD",
			"number" => "941",
			"name" => "Serbian Dinar",
			"decimals" => "2",
			"countries" => array(
				'SERBIA',
			),
		),
		"SCR" => array(
			"code" => "SCR",
			"number" => "690",
			"name" => "Seychelles Rupee",
			"decimals" => "2",
			"countries" => array(
				'SEYCHELLES',
			),
		),
		"SLL" => array(
			"code" => "SLL",
			"number" => "694",
			"name" => "Leone",
			"decimals" => "2",
			"countries" => array(
				'SIERRA LEONE',
			),
		),
		"SGD" => array(
			"code" => "SGD",
			"number" => "702",
			"name" => "Singapore Dollar",
			"decimals" => "2",
			"countries" => array(
				'SINGAPORE',
			),
		),
		"XSU" => array(
			"code" => "XSU",
			"number" => "994",
			"name" => "Sucre",
			"decimals" => "0",
			"countries" => array(
				'SISTEMA UNITARIO DE COMPENSACION REGIONAL DE PAGOS "SUCRE"',
			),
		),
		"SBD" => array(
			"code" => "SBD",
			"number" => "090",
			"name" => "Solomon Islands Dollar",
			"decimals" => "2",
			"countries" => array(
				'SOLOMON ISLANDS',
			),
		),
		"SOS" => array(
			"code" => "SOS",
			"number" => "706",
			"name" => "Somali Shilling",
			"decimals" => "2",
			"countries" => array(
				'SOMALIA',
			),
		),
		"SSP" => array(
			"code" => "SSP",
			"number" => "728",
			"name" => "South Sudanese Pound",
			"decimals" => "2",
			"countries" => array(
				'SOUTH SUDAN',
			),
		),
		"LKR" => array(
			"code" => "LKR",
			"number" => "144",
			"name" => "Sri Lanka Rupee",
			"decimals" => "2",
			"countries" => array(
				'SRI LANKA',
			),
		),
		"SDG" => array(
			"code" => "SDG",
			"number" => "938",
			"name" => "Sudanese Pound",
			"decimals" => "2",
			"countries" => array(
				'SUDAN',
			),
		),
		"SRD" => array(
			"code" => "SRD",
			"number" => "968",
			"name" => "Surinam Dollar",
			"decimals" => "2",
			"countries" => array(
				'SURINAME',
			),
		),
		"SZL" => array(
			"code" => "SZL",
			"number" => "748",
			"name" => "Lilangeni",
			"decimals" => "2",
			"countries" => array(
				'SWAZILAND',
			),
		),
		"SEK" => array(
			"code" => "SEK",
			"number" => "752",
			"name" => "Swedish Krona",
			"decimals" => "2",
			"countries" => array(
				'SWEDEN',
			),
		),
		"CHE" => array(
			"code" => "CHE",
			"number" => "947",
			"name" => "WIR Euro",
			"decimals" => "2",
			"countries" => array(
				'SWITZERLAND',
			),
		),
		"CHW" => array(
			"code" => "CHW",
			"number" => "948",
			"name" => "WIR Franc",
			"decimals" => "2",
			"countries" => array(
				'SWITZERLAND',
			),
		),
		"SYP" => array(
			"code" => "SYP",
			"number" => "760",
			"name" => "Syrian Pound",
			"decimals" => "2",
			"countries" => array(
				'SYRIAN ARAB REPUBLIC',
			),
		),
		"TWD" => array(
			"code" => "TWD",
			"number" => "901",
			"name" => "New Taiwan Dollar",
			"decimals" => "2",
			"countries" => array(
				'TAIWAN, PROVINCE OF CHINA',
			),
		),
		"TJS" => array(
			"code" => "TJS",
			"number" => "972",
			"name" => "Somoni",
			"decimals" => "2",
			"countries" => array(
				'TAJIKISTAN',
			),
		),
		"TZS" => array(
			"code" => "TZS",
			"number" => "834",
			"name" => "Tanzanian Shilling",
			"decimals" => "2",
			"countries" => array(
				'TANZANIA, UNITED REPUBLIC OF',
			),
		),
		"THB" => array(
			"code" => "THB",
			"number" => "764",
			"name" => "Baht",
			"decimals" => "2",
			"countries" => array(
				'THAILAND',
			),
		),
		"TOP" => array(
			"code" => "TOP",
			"number" => "776",
			"name" => "Pa’anga",
			"decimals" => "2",
			"countries" => array(
				'TONGA',
			),
		),
		"TTD" => array(
			"code" => "TTD",
			"number" => "780",
			"name" => "Trinidad and Tobago Dollar",
			"decimals" => "2",
			"countries" => array(
				'TRINIDAD AND TOBAGO',
			),
		),
		"TND" => array(
			"code" => "TND",
			"number" => "788",
			"name" => "Tunisian Dinar",
			"decimals" => "3",
			"countries" => array(
				'TUNISIA',
			),
		),
		"TRY" => array(
			"code" => "TRY",
			"number" => "949",
			"name" => "Turkish Lira",
			"decimals" => "2",
			"countries" => array(
				'TURKEY',
			),
		),
		"TMT" => array(
			"code" => "TMT",
			"number" => "934",
			"name" => "Turkmenistan New Manat",
			"decimals" => "2",
			"countries" => array(
				'TURKMENISTAN',
			),
		),
		"UGX" => array(
			"code" => "UGX",
			"number" => "800",
			"name" => "Uganda Shilling",
			"decimals" => "0",
			"countries" => array(
				'UGANDA',
			),
		),
		"UAH" => array(
			"code" => "UAH",
			"number" => "980",
			"name" => "Hryvnia",
			"decimals" => "2",
			"countries" => array(
				'UKRAINE',
			),
		),
		"AED" => array(
			"code" => "AED",
			"number" => "784",
			"name" => "UAE Dirham",
			"decimals" => "2",
			"countries" => array(
				'UNITED ARAB EMIRATES',
			),
		),
		"USN" => array(
			"code" => "USN",
			"number" => "997",
			"name" => "US Dollar (Next day)",
			"decimals" => "2",
			"countries" => array(
				'UNITED STATES',
			),
		),
		"USS" => array(
			"code" => "USS",
			"number" => "998",
			"name" => "US Dollar (Same day)",
			"decimals" => "2",
			"countries" => array(
				'UNITED STATES',
			),
		),
		"UYI" => array(
			"code" => "UYI",
			"number" => "940",
			"name" => "Uruguay Peso en Unidades Indexadas (URUIURUI)",
			"decimals" => "0",
			"countries" => array(
				'URUGUAY',
			),
		),
		"UYU" => array(
			"code" => "UYU",
			"number" => "858",
			"name" => "Peso Uruguayo",
			"decimals" => "2",
			"countries" => array(
				'URUGUAY',
			),
		),
		"UZS" => array(
			"code" => "UZS",
			"number" => "860",
			"name" => "Uzbekistan Sum",
			"decimals" => "2",
			"countries" => array(
				'UZBEKISTAN',
			),
		),
		"VUV" => array(
			"code" => "VUV",
			"number" => "548",
			"name" => "Vatu",
			"decimals" => "0",
			"countries" => array(
				'VANUATU',
			),
		),
		"VEF" => array(
			"code" => "VEF",
			"number" => "937",
			"name" => "Bolivar",
			"decimals" => "2",
			"countries" => array(
				'VENEZUELA, BOLIVARIAN REPUBLIC OF',
			),
		),
		"VND" => array(
			"code" => "VND",
			"number" => "704",
			"name" => "Dong",
			"decimals" => "0",
			"countries" => array(
				'VIET NAM',
			),
		),
		"YER" => array(
			"code" => "YER",
			"number" => "886",
			"name" => "Yemeni Rial",
			"decimals" => "2",
			"countries" => array(
				'YEMEN',
			),
		),
		"ZMW" => array(
			"code" => "ZMW",
			"number" => "967",
			"name" => "Zambian Kwacha",
			"decimals" => "2",
			"countries" => array(
				'ZAMBIA',
			),
		),
		"ZWL" => array(
			"code" => "ZWL",
			"number" => "932",
			"name" => "Zimbabwe Dollar",
			"decimals" => "2",
			"countries" => array(
				'ZIMBABWE',
			),
		),
    );


    /**
     * @param string $code 3 letter ISO 4217 code
     * @return array|NULL
     */
    public static function getRecord($code)
    {
        return isset(self::$records[$code]) ? self::$records[$code] : NULL;
    }


    private function __construct()
    {
        // this class cannot be instantiated
    }

}
