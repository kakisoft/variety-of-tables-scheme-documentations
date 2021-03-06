# public.mail_resend_cancel

## Description

Dismiss notification for resend by model

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('mail_resend_cancel_id_seq'::regclass) | false |  |  |  |
| model | varchar |  | true |  |  | Model |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| mail_resend_cancel_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| mail_resend_cancel_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| mail_resend_cancel_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| mail_resend_cancel_pkey | CREATE UNIQUE INDEX mail_resend_cancel_pkey ON public.mail_resend_cancel USING btree (id) |

## Relations

![er](public.mail_resend_cancel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
