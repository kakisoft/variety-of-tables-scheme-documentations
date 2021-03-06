# public.change_production_qty

## Description

Change Production Qty

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('change_production_qty_id_seq'::regclass) | false |  |  |  |
| mo_id | integer |  | false |  | [public.mrp_production](public.mrp_production.md) | Manufacturing Order |
| product_qty | numeric |  | false |  |  | Quantity To Produce |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| change_production_qty_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| change_production_qty_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| change_production_qty_mo_id_fkey | FOREIGN KEY | FOREIGN KEY (mo_id) REFERENCES mrp_production(id) ON DELETE SET NULL |
| change_production_qty_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| change_production_qty_pkey | CREATE UNIQUE INDEX change_production_qty_pkey ON public.change_production_qty USING btree (id) |

## Relations

![er](public.change_production_qty.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
