# public.crm_merge_opportunity

## Description

Merge Opportunities

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| id | integer | nextval('crm_merge_opportunity_id_seq'::regclass) | false | [public.merge_opportunity_rel](public.merge_opportunity_rel.md) |  |  |
| user_id | integer |  | true |  | [public.res_users](public.res_users.md) | Salesperson |
| team_id | integer |  | true |  | [public.crm_team](public.crm_team.md) | Sales Team |
| create_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Created by |
| create_date | timestamp without time zone |  | true |  |  | Created on |
| write_uid | integer |  | true |  | [public.res_users](public.res_users.md) | Last Updated by |
| write_date | timestamp without time zone |  | true |  |  | Last Updated on |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| crm_merge_opportunity_create_uid_fkey | FOREIGN KEY | FOREIGN KEY (create_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| crm_merge_opportunity_user_id_fkey | FOREIGN KEY | FOREIGN KEY (user_id) REFERENCES res_users(id) ON DELETE SET NULL |
| crm_merge_opportunity_write_uid_fkey | FOREIGN KEY | FOREIGN KEY (write_uid) REFERENCES res_users(id) ON DELETE SET NULL |
| crm_merge_opportunity_team_id_fkey | FOREIGN KEY | FOREIGN KEY (team_id) REFERENCES crm_team(id) ON DELETE SET NULL |
| crm_merge_opportunity_pkey | PRIMARY KEY | PRIMARY KEY (id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| crm_merge_opportunity_pkey | CREATE UNIQUE INDEX crm_merge_opportunity_pkey ON public.crm_merge_opportunity USING btree (id) |
| crm_merge_opportunity_user_id_index | CREATE INDEX crm_merge_opportunity_user_id_index ON public.crm_merge_opportunity USING btree (user_id) |
| crm_merge_opportunity_team_id_index | CREATE INDEX crm_merge_opportunity_team_id_index ON public.crm_merge_opportunity USING btree (team_id) |

## Relations

![er](public.crm_merge_opportunity.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
