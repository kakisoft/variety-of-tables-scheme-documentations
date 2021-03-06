# public.account_fiscal_position_res_country_state_rel

## Description

RELATION BETWEEN account_fiscal_position AND res_country_state

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| account_fiscal_position_id | integer |  | false |  | [public.account_fiscal_position](public.account_fiscal_position.md) |  |
| res_country_state_id | integer |  | false |  | [public.res_country_state](public.res_country_state.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| account_fiscal_position_res_country_s_res_country_state_id_fkey | FOREIGN KEY | FOREIGN KEY (res_country_state_id) REFERENCES res_country_state(id) ON DELETE CASCADE |
| account_fiscal_position_res_cou_account_fiscal_position_id_fkey | FOREIGN KEY | FOREIGN KEY (account_fiscal_position_id) REFERENCES account_fiscal_position(id) ON DELETE CASCADE |
| account_fiscal_position_res_c_account_fiscal_position_id_re_key | UNIQUE | UNIQUE (account_fiscal_position_id, res_country_state_id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| account_fiscal_position_res_c_account_fiscal_position_id_re_key | CREATE UNIQUE INDEX account_fiscal_position_res_c_account_fiscal_position_id_re_key ON public.account_fiscal_position_res_country_state_rel USING btree (account_fiscal_position_id, res_country_state_id) |
| account_fiscal_position_res_coun_account_fiscal_position_id_idx | CREATE INDEX account_fiscal_position_res_coun_account_fiscal_position_id_idx ON public.account_fiscal_position_res_country_state_rel USING btree (account_fiscal_position_id) |
| account_fiscal_position_res_country_st_res_country_state_id_idx | CREATE INDEX account_fiscal_position_res_country_st_res_country_state_id_idx ON public.account_fiscal_position_res_country_state_rel USING btree (res_country_state_id) |

## Relations

![er](public.account_fiscal_position_res_country_state_rel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
