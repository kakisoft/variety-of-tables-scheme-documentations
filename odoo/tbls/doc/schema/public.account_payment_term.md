# public.account_payment_term

## Description

Payment Terms

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('account_payment_term_id_seq'::regclass) | false | [public.account_invoice](public.account_invoice.md) [public.account_payment_term_line](public.account_payment_term_line.md) [public.sale_order](public.sale_order.md) [public.purchase_order](public.purchase_order.md) |  |  |
| name | varchar |  | false |  |  | Payment Terms |
| active | boolean |  | true |  |  | Active |
| note | text |  | true |  |  | Description on the Invoice |
| company_id | integer |  | false |  | [public.res_company](public.res_company.md) | Company |
| sequence | integer |  | false |  |  | Sequence |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| account_payment_term_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| account_payment_term_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| account_payment_term_company_id_fkey | FOREIGN KEY | FOREIGN KEY (company_id) REFERENCES res_company(id) ON DELETE SET NULL |
| account_payment_term_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| account_payment_term_pkey | CREATE UNIQUE INDEX account_payment_term_pkey ON public.account_payment_term USING btree (id) |

## Relations

![er](public.account_payment_term.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
