# public.pos_details_wizard

## Description

Point of Sale Details Report

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('pos_details_wizard_id_seq'::regclass) | false | [public.pos_detail_configs](public.pos_detail_configs.md) |  |  |
| start_date | timestamp without time zone |  | false |  |  | Start Date |
| end_date | timestamp without time zone |  | false |  |  | End Date |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| pos_details_wizard_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| pos_details_wizard_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| pos_details_wizard_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| pos_details_wizard_pkey | CREATE UNIQUE INDEX pos_details_wizard_pkey ON public.pos_details_wizard USING btree (id) |

## Relations

![er](public.pos_details_wizard.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
