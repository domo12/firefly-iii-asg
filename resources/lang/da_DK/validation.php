<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    'missing_where'                  => 'Array mangler “Where”-sektion',
    'missing_update'                 => 'Array mangler “update”-sektion',
    'invalid_where_key'              => 'JSON indeholder en ugyldig nøgle til "where"-sektionen',
    'invalid_update_key'             => 'JSON indeholder en ugyldig nøgle til "update"-sektionen',
    'invalid_query_data'             => 'Der er ugyldige data i feltet %s:%s i din forespørgsel.',
    'invalid_query_account_type'     => 'Din forespørgsel indeholder konti af forskellige typer, hvilket ikke er tilladt.',
    'invalid_query_currency'         => 'Din forespørgsel indeholder konti, der har forskellige valutaindstillinger, hvilket ikke er tilladt.',
    'iban'                           => 'Dette er ikke et gyldig IBAN.',
    'zero_or_more'                   => 'Denne værdi kan ikke være negativ.',
    'date_or_time'                   => 'Værdien skal være en gyldig dato eller tids værdi (ISO 8601).',
    'source_equals_destination'      => 'Kildekontoen er den samme som modtagerkontoen.',
    'unique_account_number_for_user' => 'Det ser ud som om dette kontonummer allerede er i brug.',
    'unique_iban_for_user'           => 'Det ser ud til denne IBAN allerede er i brug.',
    'deleted_user'                   => 'På grund af sikkerhedspolikker, kan du ikke registrere med denne email adresse.',
    'rule_trigger_value'             => 'Denne værdi er ikke gyldig for den valgte trigger.',
    'rule_action_value'              => 'Denne værdi er ikke gyldig for den valgte handling.',
    'file_already_attached'          => 'Den uploadede fil ":name" er allerede vedhælftet til dette objekt.',
    'file_attached'                  => 'Oploadede succesfuldt filen: ":name".',
    'must_exist'                     => 'ID\'et i feltet :attribute eksisterer ikke i databasen.',
    'all_accounts_equal'             => 'Alle konti i dette felt skal være ens.',
    'group_title_mandatory'          => 'En gruppetitel er påkrævet når der er mere end en overførsel.',
    'transaction_types_equal'        => 'Alle opsplitninger skal være af samme type.',
    'invalid_transaction_type'       => 'Ugyldig overførelsestype.',
    'invalid_selection'              => 'Din markering er ikke gyldig.',
    'belongs_user'                   => 'Denne værdi er ikke gyldig for dette felt.',
    'at_least_one_transaction'       => 'Kræver mindst en overførsel.',
    'recurring_transaction_id'       => 'Need at least one transaction.',
    'need_id_to_match'               => 'You need to submit this entry with an ID for the API to be able to match it.',
    'too_many_unmatched'             => 'Too many submitted transactions cannot be matched to their respective database entries. Make sure existing entries have a valid ID.',
    'id_does_not_match'              => 'Submitted ID #:id does not match expected ID. Make sure it matches or omit the field.',
    'at_least_one_repetition'        => 'Kræver mindst en gentagelse.',
    'require_repeat_until'           => 'Kræver enten et antal af gentagelser, eller en slutdato (repeat_until). Ikke begge.',
    'require_currency_info'          => 'Indholdet af dette felt er ugyldigt uden møntfodsinformation.',
    'not_transfer_account'           => 'Denne konto kan ikke benyttes til overførsler.',
    'require_currency_amount'        => 'Indholdet af dette felt er ugyldigt uden information om det udenlandske beløb.',
    'require_foreign_currency'       => 'This field requires a number',
    'require_foreign_dest'           => 'This field value must match the currency of the destination account.',
    'require_foreign_src'            => 'This field value must match the currency of the source account.',
    'equal_description'              => 'Overførselsbeskrivelse bør ikke være den samme som den generelle beskrivelse.',
    'file_invalid_mime'              => 'Filen ":name" er af typen ":mime", som ikke er gyldig som en ny upload.',
    'file_too_large'                 => 'Filen ":name" er for stor.',
    'belongs_to_user'                => 'Værdien af :attribute er ukendt.',
    'accepted'                       => ':attribute skal accepteres.',
    'bic'                            => 'Dette er ikke et gyldig BIC.',
    'at_least_one_trigger'           => 'Reglen skal have mindst en udløser.',
    'at_least_one_active_trigger'    => 'Reglen skal have mindst en aktivt udløser.',
    'at_least_one_action'            => 'Reglen skal have mindst en aktion.',
    'at_least_one_active_action'     => 'Reglen skal have mindst en aktiv aktion.',
    'base64'                         => 'Dette er ikke gyldig base64 indkodet data.',
    'model_id_invalid'               => 'Dette givne ID virker ugyldigt for denne model.',
    'less'                           => ':attribute skal være mindre end 10.000.000',
    'active_url'                     => ':attribute er ikke en gyldig URL.',
    'after'                          => ':attribute skal være en dato efter :date.',
    'date_after'                     => 'Startdatoen skal være før slutdatoen.',
    'alpha'                          => ':attribute må kun indeholde bogstaver.',
    'alpha_dash'                     => ':attribute må kun indeholde bogstaver, tal og bindestreger.',
    'alpha_num'                      => ':attribute må kun bestå af bogstaver og tal.',
    'array'                          => ':attribute skal være et array.',
    'unique_for_user'                => 'Der findes allerede en værdi med :attribute.',
    'before'                         => ':attribute skal være en dato før :date.',
    'unique_object_for_user'         => 'Navnet er allerede i brug.',
    'unique_account_for_user'        => 'Kontonavnet er allerede i brug.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'between.numeric'            => ':attribute skal være mellem :min og :max.',
    'between.file'               => ':attribute skal være mellem :min og :max kilobytes.',
    'between.string'             => ':attribute skal være imellem :min - :max tegn.',
    'between.array'              => ':attribute skal have mellem :min og :max elementer.',
    'boolean'                    => ':attribute-feltet skal være enten sandt eller falsk.',
    'confirmed'                  => ':attribute bekræftelsen matcher ikke.',
    'date'                       => ':attribute er ikke en gyldig dato.',
    'date_format'                => ':attribute matcher ikke formatet :format.',
    'different'                  => ':attribute og :other skal være forskellige.',
    'digits'                     => ':attribute skal være :digits cifre.',
    'digits_between'             => ':attribute skal være mellem :min og :max cifre.',
    'email'                      => ':attribute skal være en gyldig email-adresse.',
    'filled'                     => ':attribute feltet er påkrævet.',
    'exists'                     => 'Den valgte :attribute er ikke gyldig.',
    'image'                      => ':attribute skal være et billede.',
    'in'                         => 'Den valgte :attribute er ikke gyldig.',
    'integer'                    => ':attribute skal være et heltal.',
    'ip'                         => ':attribute skal være en gyldig IP-adresse.',
    'json'                       => ':attribute skal være en gyldig JSON-streng.',
    'max.numeric'                => ':attribute må ikke overstige :max.',
    'max.file'                   => ':attribute må ikke overstige :max kilobytes.',
    'max.string'                 => ':attribute må ikke overstige :max. tegn.',
    'max.array'                  => ':attribute må ikke have mere end :max elementer.',
    'mimes'                      => ':attribute skal være en fil af typen: :values.',
    'min.numeric'                => ':attribute skal være mindst :min.',
    'lte.numeric'                => ':attribute skal være mindre end eller lig med :value.',
    'min.file'                   => ':attribute skal være mindst :min kilobytes.',
    'min.string'                 => ':attribute skal mindst være :min tegn.',
    'min.array'                  => ':attribute skal have mindst :min elementer.',
    'not_in'                     => 'Den valgte :attribute er ikke gyldig.',
    'numeric'                    => ':attribute skal være et tal.',
    'numeric_native'             => 'Det oprindelige beløb skal være et tal.',
    'numeric_destination'        => 'Bestemmelsesbeløbet skal være et tal.',
    'numeric_source'             => 'Kildebeløbet skal være et tal.',
    'regex'                      => ':attribute formatet er ugylidgt.',
    'required'                   => ':attribute feltet er påkrævet.',
    'required_if'                => ':attribute skal udfyldes når :other er :value.',
    'required_unless'            => ':attribute feltet er påkrævet, medmindre :other er i :values.',
    'required_with'              => ':attribute skal udfyldes når :values er udfyldt.',
    'required_with_all'          => ':attribute skal udfyldes når :values er udfyldt.',
    'required_without'           => 'Attributfeltet :attribute er påkrævet, når :values ikke er udfyldt.',
    'required_without_all'       => 'Attributfeltet :attribute er påkrævet, når ingen af :values er udfyldt.',
    'same'                       => ':attribute og :other skal stemme overens.',
    'size.numeric'               => 'Attributten :attribute skal være af størrelsen :size.',
    'amount_min_over_max'        => 'Minimumsbeløbet kan ikke være større end det maksimale beløb.',
    'size.file'                  => 'Attributten :attribute skal være :size kilobytes.',
    'size.string'                => 'Attributten :attribute skal være :size karakterer.',
    'size.array'                 => 'Attributten :attribute skal indeholde :size elementer.',
    'unique'                     => 'Attributten :attribute er allerede anvendt.',
    'string'                     => 'Attributten :attribute skal være en streng.',
    'url'                        => 'Attributten :attribute er ikke korrekt formateret.',
    'timezone'                   => 'Attributten :attribute skal være en gyldig zone.',
    '2fa_code'                   => 'Attributfeltet :attribute er ygyldigt.',
    'dimensions'                 => 'Attributten :attribute har ugyldige billeddimensioner.',
    'distinct'                   => 'Attributfeltet :attribute har en duplikatværdi.',
    'file'                       => 'Attributten :attribute skal være en fil.',
    'in_array'                   => 'Attributfeltet :attribute findes ikke i :other.',
    'present'                    => 'Attributfeltet :attribute er påkrævet.',
    'amount_zero'                => 'Det samlede beløb kan ikke være nul.',
    'current_target_amount'      => 'Det aktuelle beløb skal være mindre end målbeløbet.',
    'unique_piggy_bank_for_user' => '"Sparebøssens" navn skal være unikt.',
    'unique_object_group'        => 'Gruppenavnet skal være unikt',
    'starts_with'                => 'Værdien skal starte med :values.',
    'unique_webhook'             => 'You already have a webhook with this combination of URL, trigger, response and delivery.',
    'unique_existing_webhook'    => 'You already have another webhook with this combination of URL, trigger, response and delivery.',
    'same_account_type'          => 'Begge konti skal være af samme kontotype',
    'same_account_currency'      => 'Begge konti skal have samme valuta',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'secure_password'             => 'Dette er ikke en sikker adgangskode. Prøv venligst igen. For mere information, besøg https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Ugyldig type gentalgelse for periodiske transaktioner.',
    'valid_recurrence_rep_moment' => 'Ugyldigt øjeblik for denne type gentagelse.',
    'invalid_account_info'        => 'Ugyldig kontoinformation.',
    'attributes'                  => [
        'email'                   => 'e-mail adresse',
        'description'             => 'beskrivelse',
        'amount'                  => 'beløb',
        'transactions.*.amount'   => 'transaktionsbeløb',
        'name'                    => 'navn',
        'piggy_bank_id'           => '"Sparebøsse" ID',
        'targetamount'            => 'målbeløb',
        'opening_balance_date'    => 'dato for startsaldo',
        'opening_balance'         => 'startsaldo',
        'match'                   => 'svarer til',
        'amount_min'              => 'minimumsbeløb',
        'amount_max'              => 'maksimumbeløb',
        'title'                   => 'titel',
        'tag'                     => 'tag',
        'transaction_description' => 'transaktions beskrivelse',
        'rule-action-value.1'     => 'regel værdi #1',
        'rule-action-value.2'     => 'værdi for handlingsregel #2',
        'rule-action-value.3'     => 'værdi for handlingsregel #3',
        'rule-action-value.4'     => 'værdi for handlingsregel #4',
        'rule-action-value.5'     => 'værdi for handlingsregel #5',
        'rule-action.1'           => 'handlingsregel #1',
        'rule-action.2'           => 'handlingsregel #2',
        'rule-action.3'           => 'handlingsregel #3',
        'rule-action.4'           => 'handlingsregel #4',
        'rule-action.5'           => 'handlingsregel #5',
        'rule-trigger-value.1'    => 'værdi for udløserregel #1',
        'rule-trigger-value.2'    => 'værdi for udløserregel #2',
        'rule-trigger-value.3'    => 'værdi for udløserregel #3',
        'rule-trigger-value.4'    => 'værdi for udløserregel #4',
        'rule-trigger-value.5'    => 'værdi for udløserregel #5',
        'rule-trigger.1'          => 'udløserregel #1',
        'rule-trigger.2'          => 'udløserregel #2',
        'rule-trigger.3'          => 'udløserregel #3',
        'rule-trigger.4'          => 'udløserregel #4',
        'rule-trigger.5'          => 'udløserregel #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Det er nødvendigt at have et gyldigt kildekonto ID og/eller gyldigt kildekontonavn for at fortsætte.',
    'withdrawal_source_bad_data'  => '[a] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'   => '[a] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'    => 'Kunne ikke finde en gyldig destinationskonto, ved søgning efter ID ":id" eller navn ":name".',

    'withdrawal_dest_iban_exists' => 'This destination account IBAN is already in use by an asset account or a liability and cannot be used as a withdrawal destination.',
    'deposit_src_iban_exists'     => 'This source account IBAN is already in use by an asset account or a liability and cannot be used as a deposit source.',

    'reconciliation_source_bad_data' => 'Could not find a valid reconciliation account when searching for ID ":id" or name ":name".',

    'generic_source_bad_data' => '[e] Could not find a valid source account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data' => 'Det er nødvendigt at have et gyldigt kildekonto ID og/eller gyldigt kildekontonavn for at fortsætte.',
    'deposit_source_bad_data'  => '[b] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'   => '[b] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'    => 'Kunne ikke finde en gyldig destinationskonto, ved søgning efter ID ":id" eller kontonavn ":name".',
    'deposit_dest_wrong_type'  => 'Den foreslåede destinationskonto er ikke af den rigtige type.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'transfer_source_need_data' => 'Det er nødvendigt at have et gyldigt kildekonto ID og/eller gyldigt kildekontonavn for at fortsætte.',
    'transfer_source_bad_data'  => '[c] Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'   => '[c] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'    => 'Kunne ikke finde en gyldig destinationskonto, ved søgning efter ID ":id" eller kontonavn ":name".',
    'need_id_in_edit'           => 'Hver opdeling skal have et transaction_journal_id (enten gyldigt ID eller 0).',

    'ob_source_need_data'           => 'Det er nødvendigt at have et gyldigt kildekonto ID og/eller gyldigt kildekontonavn for at fortsætte.',
    'lc_source_need_data'           => 'Du skal bruge et gyldigt konto-id for at fortsætte.',
    'ob_dest_need_data'             => '[d] Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'              => 'Kunne ikke finde en gyldig destinationskonto, ved søgning efter ID ":id" eller kontonavn ":name".',
    'reconciliation_either_account' => 'To submit a reconciliation, you must submit either a source or a destination account. Not both, not neither.',

    'generic_invalid_source'      => 'Du kan ikke bruge denne konto som kildekonto.',
    'generic_invalid_destination' => 'Du kan ikke bruge denne konto som destinationskonto.',

    'generic_no_source'      => 'You must submit source account information or submit a transaction journal ID.',
    'generic_no_destination' => 'You must submit destination account information or submit a transaction journal ID.',

    'gte.numeric' => 'Attributten :attribute skal være større end eller lig med :value.',
    'gt.numeric'  => 'Attributten :attribute skal være større end :value.',
    'gte.file'    => 'Attributten :attribute skal være større end eller lig med :value kilobytes.',
    'gte.string'  => 'Attributten :attribute skal være større end eller lig med :value tegn.',
    'gte.array'   => 'Attributten :attribute skal have :value elementer eller flere.',

    'amount_required_for_auto_budget' => 'Beløb påkrævet.',
    'auto_budget_amount_positive'     => 'Beløbet skal være større end 0.',
    'auto_budget_period_mandatory'    => 'Perioden for autobudget skal udfyldes.',

    // no access to administration:
    'no_access_user_group'            => 'You do not have the correct access rights for this administration.',
];

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */
