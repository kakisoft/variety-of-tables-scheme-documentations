# public.product_taxes_rel

## Description

RELATION BETWEEN product_template AND account_tax

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| prod_id | integer |  | false |  | [public.product_template](public.product_template.md) |  |
| tax_id | integer |  | false |  | [public.account_tax](public.account_tax.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| product_taxes_rel_prod_id_fkey | FOREIGN KEY | FOREIGN KEY (prod_id) REFERENCES product_template(id) ON DELETE CASCADE |
| product_taxes_rel_tax_id_fkey | FOREIGN KEY | FOREIGN KEY (tax_id) REFERENCES account_tax(id) ON DELETE CASCADE |
| product_taxes_rel_prod_id_tax_id_key | UNIQUE | UNIQUE (prod_id, tax_id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| product_taxes_rel_prod_id_tax_id_key | CREATE UNIQUE INDEX product_taxes_rel_prod_id_tax_id_key ON public.product_taxes_rel USING btree (prod_id, tax_id) |
| product_taxes_rel_prod_id_idx | CREATE INDEX product_taxes_rel_prod_id_idx ON public.product_taxes_rel USING btree (prod_id) |
| product_taxes_rel_tax_id_idx | CREATE INDEX product_taxes_rel_tax_id_idx ON public.product_taxes_rel USING btree (tax_id) |

## Relations

![er](public.product_taxes_rel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
