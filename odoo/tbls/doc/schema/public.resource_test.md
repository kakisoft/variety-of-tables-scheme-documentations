# public.resource_test

## Description

Test Resource Model

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('resource_test_id_seq'::regclass) | false |  |  |  |
| resource_id | integer |  | false |  | [public.resource_resource](public.resource_resource.md) | Resource |
| company_id | integer |  | true |  | [public.res_company](public.res_company.md) | Company |
| resource_calendar_id | integer |  | true |  | [public.resource_calendar](public.resource_calendar.md) | Working Hours |
| name | varchar |  | true |  |  | Name |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| resource_test_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| resource_test_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| resource_test_company_id_fkey | FOREIGN KEY | FOREIGN KEY (company_id) REFERENCES res_company(id) ON DELETE SET NULL |
| resource_test_resource_calendar_id_fkey | FOREIGN KEY | FOREIGN KEY (resource_calendar_id) REFERENCES resource_calendar(id) ON DELETE SET NULL |
| resource_test_resource_id_fkey | FOREIGN KEY | FOREIGN KEY (resource_id) REFERENCES resource_resource(id) ON DELETE RESTRICT |
| resource_test_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| resource_test_pkey | CREATE UNIQUE INDEX resource_test_pkey ON public.resource_test USING btree (id) |
| resource_test_resource_id_index | CREATE INDEX resource_test_resource_id_index ON public.resource_test USING btree (resource_id) |
| resource_test_company_id_index | CREATE INDEX resource_test_company_id_index ON public.resource_test USING btree (company_id) |
| resource_test_resource_calendar_id_index | CREATE INDEX resource_test_resource_calendar_id_index ON public.resource_test USING btree (resource_calendar_id) |

## Relations

![er](public.resource_test.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
