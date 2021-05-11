# public.payment_token

## Description

Payment Token

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('payment_token_id_seq'::regclass) | false | [public.account_payment](public.account_payment.md) [public.payment_transaction](public.payment_transaction.md) |  |  |
| name | varchar |  | true |  |  | Name |
| partner_id | integer |  | false |  | [public.res_partner](public.res_partner.md) | Partner |
| acquirer_id | integer |  | false |  | [public.payment_acquirer](public.payment_acquirer.md) | Acquirer Account |
| acquirer_ref | varchar |  | false |  |  | Acquirer Ref. |
| active | boolean |  | true |  |  | Active |
| verified | boolean |  | true |  |  | Verified |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| payment_token_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| payment_token_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| payment_token_partner_id_fkey | FOREIGN KEY | FOREIGN KEY (partner_id) REFERENCES res_partner(id) ON DELETE SET NULL |
| payment_token_acquirer_id_fkey | FOREIGN KEY | FOREIGN KEY (acquirer_id) REFERENCES payment_acquirer(id) ON DELETE SET NULL |
| payment_token_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| payment_token_pkey | CREATE UNIQUE INDEX payment_token_pkey ON public.payment_token USING btree (id) |

## Relations

![er](public.payment_token.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)