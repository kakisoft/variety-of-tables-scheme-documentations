# public.base_module_upgrade

## Description

Upgrade Module

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('base_module_upgrade_id_seq'::regclass) | false |  |  |  |
| module_info | text |  | true |  |  | Apps to Update |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| base_module_upgrade_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| base_module_upgrade_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| base_module_upgrade_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| base_module_upgrade_pkey | CREATE UNIQUE INDEX base_module_upgrade_pkey ON public.base_module_upgrade USING btree (id) |

## Relations

![er](public.base_module_upgrade.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
