# public.stock_overprocessed_transfer

## Description

Transfer Over Processed Stock

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('stock_overprocessed_transfer_id_seq'::regclass) | false |  |  |  |
| picking_id | integer |  | true |  | [public.stock_picking](public.stock_picking.md) | Picking |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| stock_overprocessed_transfer_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| stock_overprocessed_transfer_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| stock_overprocessed_transfer_picking_id_fkey | FOREIGN KEY | FOREIGN KEY (picking_id) REFERENCES stock_picking(id) ON DELETE SET NULL |
| stock_overprocessed_transfer_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| stock_overprocessed_transfer_pkey | CREATE UNIQUE INDEX stock_overprocessed_transfer_pkey ON public.stock_overprocessed_transfer USING btree (id) |

## Relations

![er](public.stock_overprocessed_transfer.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
