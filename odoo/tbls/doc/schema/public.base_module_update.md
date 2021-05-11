# public.base_module_update

## Description

Update Module

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('base_module_update_id_seq'::regclass) | false |  |  |  |
| updated | integer |  | true |  |  | Number of modules updated |
| added | integer |  | true |  |  | Number of modules added |
| state | varchar |  | true |  |  | Status |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| base_module_update_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| base_module_update_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| base_module_update_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| base_module_update_pkey | CREATE UNIQUE INDEX base_module_update_pkey ON public.base_module_update USING btree (id) |

## Relations

![er](public.base_module_update.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)