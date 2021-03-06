# public.calendar_alarm

## Description

Event Alarm

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('calendar_alarm_id_seq'::regclass) | false | [public.calendar_alarm_calendar_event_rel](public.calendar_alarm_calendar_event_rel.md) |  |  |
| name | varchar |  | false |  |  | Name |
| type | varchar |  | false |  |  | Type |
| duration | integer |  | false |  |  | Remind Before |
| interval | varchar |  | false |  |  | Unit |
| duration_minutes | integer |  | true |  |  | Duration in minutes |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| calendar_alarm_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| calendar_alarm_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| calendar_alarm_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| calendar_alarm_pkey | CREATE UNIQUE INDEX calendar_alarm_pkey ON public.calendar_alarm USING btree (id) |

## Relations

![er](public.calendar_alarm.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
