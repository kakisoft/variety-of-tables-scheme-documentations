# public.account_reconcile_model_template_res_partner_rel

## Description

RELATION BETWEEN account_reconcile_model_template AND res_partner

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| account_reconcile_model_template_id | integer |  | false |  | [public.account_reconcile_model_template](public.account_reconcile_model_template.md) |  |
| res_partner_id | integer |  | false |  | [public.res_partner](public.res_partner.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| account_reconcile_model_template_res_partne_res_partner_id_fkey | FOREIGN KEY | FOREIGN KEY (res_partner_id) REFERENCES res_partner(id) ON DELETE CASCADE |
| account_reconcile_model_templ_account_reconcile_model_temp_fkey | FOREIGN KEY | FOREIGN KEY (account_reconcile_model_template_id) REFERENCES account_reconcile_model_template(id) ON DELETE CASCADE |
| account_reconcile_model_templ_account_reconcile_model_templ_key | UNIQUE | UNIQUE (account_reconcile_model_template_id, res_partner_id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| account_reconcile_model_templ_account_reconcile_model_templ_key | CREATE UNIQUE INDEX account_reconcile_model_templ_account_reconcile_model_templ_key ON public.account_reconcile_model_template_res_partner_rel USING btree (account_reconcile_model_template_id, res_partner_id) |
| account_reconcile_model_templ_account_reconcile_model_templ_idx | CREATE INDEX account_reconcile_model_templ_account_reconcile_model_templ_idx ON public.account_reconcile_model_template_res_partner_rel USING btree (account_reconcile_model_template_id) |
| account_reconcile_model_template_res_partner_res_partner_id_idx | CREATE INDEX account_reconcile_model_template_res_partner_res_partner_id_idx ON public.account_reconcile_model_template_res_partner_rel USING btree (res_partner_id) |

## Relations

![er](public.account_reconcile_model_template_res_partner_rel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
