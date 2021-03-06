# public.utm_source

## Description

UTM Source

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('utm_source_id_seq'::regclass) | false | [public.crm_lead](public.crm_lead.md) [public.account_invoice](public.account_invoice.md) [public.sale_order](public.sale_order.md) |  |  |
| name | varchar |  | false |  |  | Source Name |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| utm_source_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| utm_source_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| utm_source_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| utm_source_pkey | CREATE UNIQUE INDEX utm_source_pkey ON public.utm_source USING btree (id) |

## Relations

![er](public.utm_source.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
