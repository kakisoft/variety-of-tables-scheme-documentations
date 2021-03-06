# public.ir_actions_todo

## Description

Configuration Wizards

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('ir_actions_todo_id_seq'::regclass) | false |  |  |  |
| action_id | integer |  | false |  |  | Action |
| sequence | integer |  | true |  |  | Sequence |
| state | varchar |  | false |  |  | Status |
| name | varchar |  | true |  |  | Name |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| ir_actions_todo_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| ir_actions_todo_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| ir_actions_todo_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| ir_actions_todo_pkey | CREATE UNIQUE INDEX ir_actions_todo_pkey ON public.ir_actions_todo USING btree (id) |
| ir_actions_todo_action_id_index | CREATE INDEX ir_actions_todo_action_id_index ON public.ir_actions_todo USING btree (action_id) |

## Relations

![er](public.ir_actions_todo.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
