# public.base_language_import

## Description

Language Import

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('base_language_import_id_seq'::regclass) | false |  |  |  |
| name | varchar |  | false |  |  | Language Name |
| code | varchar(6) |  | false |  |  | ISO Code |
| data | bytea |  | false |  |  | File |
| filename | varchar |  | false |  |  | File Name |
| overwrite | boolean |  | true |  |  | Overwrite Existing Terms |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| base_language_import_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| base_language_import_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| base_language_import_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| base_language_import_pkey | CREATE UNIQUE INDEX base_language_import_pkey ON public.base_language_import USING btree (id) |

## Relations

![er](public.base_language_import.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
