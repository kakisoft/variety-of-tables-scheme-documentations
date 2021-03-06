# public.res_company_users_rel

## Description

RELATION BETWEEN res_company AND res_users

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| cid | integer |  | false |  | [public.res_company](public.res_company.md) |  |
| user_id | integer |  | false |  | [public.res_users](public.res_users.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| res_company_users_rel_user_id_fkey | FOREIGN KEY | FOREIGN KEY (user_id) REFERENCES res_users(id) ON DELETE CASCADE |
| res_company_users_rel_cid_fkey | FOREIGN KEY | FOREIGN KEY (cid) REFERENCES res_company(id) ON DELETE CASCADE |
| res_company_users_rel_cid_user_id_key | UNIQUE | UNIQUE (cid, user_id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| res_company_users_rel_cid_user_id_key | CREATE UNIQUE INDEX res_company_users_rel_cid_user_id_key ON public.res_company_users_rel USING btree (cid, user_id) |
| res_company_users_rel_cid_idx | CREATE INDEX res_company_users_rel_cid_idx ON public.res_company_users_rel USING btree (cid) |
| res_company_users_rel_user_id_idx | CREATE INDEX res_company_users_rel_user_id_idx ON public.res_company_users_rel USING btree (user_id) |

## Relations

![er](public.res_company_users_rel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
