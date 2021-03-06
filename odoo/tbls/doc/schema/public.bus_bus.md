# public.bus_bus

## Description

Communication Bus

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('bus_bus_id_seq'::regclass) | false |  |  |  |
| channel | varchar |  | true |  |  | Channel |
| message | varchar |  | true |  |  | Message |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| bus_bus_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| bus_bus_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| bus_bus_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| bus_bus_pkey | CREATE UNIQUE INDEX bus_bus_pkey ON public.bus_bus USING btree (id) |

## Relations

![er](public.bus_bus.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
