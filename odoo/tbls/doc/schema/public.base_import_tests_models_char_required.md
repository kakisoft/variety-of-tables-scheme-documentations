# public.base_import_tests_models_char_required

## Description

Tests : Base Import Model, Character required

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('base_import_tests_models_char_required_id_seq'::regclass) | false |  |  |  |
| value | varchar |  | false |  |  | Value |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| base_import_tests_models_char_required_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| base_import_tests_models_char_required_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| base_import_tests_models_char_required_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| base_import_tests_models_char_required_pkey | CREATE UNIQUE INDEX base_import_tests_models_char_required_pkey ON public.base_import_tests_models_char_required USING btree (id) |

## Relations

![er](public.base_import_tests_models_char_required.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
