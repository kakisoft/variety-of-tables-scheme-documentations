# public.web_editor_converter_test_sub

## Description

Web Editor Converter Subtest

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('web_editor_converter_test_sub_id_seq'::regclass) | false | [public.web_editor_converter_test](public.web_editor_converter_test.md) |  |  |
| name | varchar |  | true |  |  | Name |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| web_editor_converter_test_sub_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| web_editor_converter_test_sub_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| web_editor_converter_test_sub_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| web_editor_converter_test_sub_pkey | CREATE UNIQUE INDEX web_editor_converter_test_sub_pkey ON public.web_editor_converter_test_sub USING btree (id) |

## Relations

![er](public.web_editor_converter_test_sub.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
