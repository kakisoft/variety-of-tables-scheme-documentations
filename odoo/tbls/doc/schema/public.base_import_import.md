# public.base_import_import

## Description

Base Import

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('base_import_import_id_seq'::regclass) | false |  |  |  |
| res_model | varchar |  | true |  |  | Model |
| file | bytea |  | true |  |  | File |
| file_name | varchar |  | true |  |  | File Name |
| file_type | varchar |  | true |  |  | File Type |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| base_import_import_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| base_import_import_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| base_import_import_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| base_import_import_pkey | CREATE UNIQUE INDEX base_import_import_pkey ON public.base_import_import USING btree (id) |

## Relations

![er](public.base_import_import.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
