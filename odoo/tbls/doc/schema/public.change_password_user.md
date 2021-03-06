# public.change_password_user

## Description

User, Change Password Wizard

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('change_password_user_id_seq'::regclass) | false |  |  |  |
| wizard_id | integer |  | false |  | [public.change_password_wizard](public.change_password_wizard.md) | Wizard |
| user_id | integer |  | false |  | [public.res_users](public.res_users.md) | User |
| user_login | varchar |  | true |  |  | User Login |
| new_passwd | varchar |  | true |  |  | New Password |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| change_password_user_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| change_password_user_user_id_fkey | FOREIGN KEY | FOREIGN KEY (user_id) REFERENCES res_users(id) ON DELETE CASCADE |
| change_password_user_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| change_password_user_wizard_id_fkey | FOREIGN KEY | FOREIGN KEY (wizard_id) REFERENCES change_password_wizard(id) ON DELETE CASCADE |
| change_password_user_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| change_password_user_pkey | CREATE UNIQUE INDEX change_password_user_pkey ON public.change_password_user USING btree (id) |

## Relations

![er](public.change_password_user.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
