# public.mail_moderation

## Description

Channel black/white list

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('mail_moderation_id_seq'::regclass) | false |  |  |  |
| email | varchar |  | false |  |  | Email |
| status | varchar |  | false |  |  | Status |
| channel_id | integer |  | false |  | [public.mail_channel](public.mail_channel.md) | Channel |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition | Comment |
| ---- | ---- | ---------- | ------- |
| mail_moderation_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |  |
| mail_moderation_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |  |
| mail_moderation_pkey | PRIMARY KEY | PRIMARY KEY (id) |  |
| mail_moderation_channel_email_uniq | UNIQUE | UNIQUE (email, channel_id) | unique (email,channel_id) |
| mail_moderation_channel_id_fkey | FOREIGN KEY | FOREIGN KEY (channel_id) REFERENCES mail_channel(id) ON DELETE SET NULL |  |

## Indexes

| Name | Definition |
| ---- | ---------- |
| mail_moderation_pkey | CREATE UNIQUE INDEX mail_moderation_pkey ON public.mail_moderation USING btree (id) |
| mail_moderation_email_index | CREATE INDEX mail_moderation_email_index ON public.mail_moderation USING btree (email) |
| mail_moderation_channel_id_index | CREATE INDEX mail_moderation_channel_id_index ON public.mail_moderation USING btree (channel_id) |
| mail_moderation_channel_email_uniq | CREATE UNIQUE INDEX mail_moderation_channel_email_uniq ON public.mail_moderation USING btree (email, channel_id) |

## Relations

![er](public.mail_moderation.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
