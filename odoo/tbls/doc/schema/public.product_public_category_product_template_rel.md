# public.product_public_category_product_template_rel

## Description

RELATION BETWEEN product_template AND product_public_category

## Columns

| Name | Type | Default | Nullable | Children | Parents | Comment |
| ---- | ---- | ------- | -------- | -------- | ------- | ------- |
| product_template_id | integer |  | false |  | [public.product_template](public.product_template.md) |  |
| product_public_category_id | integer |  | false |  | [public.product_public_category](public.product_public_category.md) |  |

## Constraints

| Name | Type | Definition |
| ---- | ---- | ---------- |
| product_public_category_product_templa_product_template_id_fkey | FOREIGN KEY | FOREIGN KEY (product_template_id) REFERENCES product_template(id) ON DELETE CASCADE |
| product_public_category_product_product_public_category_id_fkey | FOREIGN KEY | FOREIGN KEY (product_public_category_id) REFERENCES product_public_category(id) ON DELETE CASCADE |
| product_public_category_produ_product_template_id_product_p_key | UNIQUE | UNIQUE (product_template_id, product_public_category_id) |

## Indexes

| Name | Definition |
| ---- | ---------- |
| product_public_category_produ_product_template_id_product_p_key | CREATE UNIQUE INDEX product_public_category_produ_product_template_id_product_p_key ON public.product_public_category_product_template_rel USING btree (product_template_id, product_public_category_id) |
| product_public_category_product_templat_product_template_id_idx | CREATE INDEX product_public_category_product_templat_product_template_id_idx ON public.product_public_category_product_template_rel USING btree (product_template_id) |
| product_public_category_product__product_public_category_id_idx | CREATE INDEX product_public_category_product__product_public_category_id_idx ON public.product_public_category_product_template_rel USING btree (product_public_category_id) |

## Relations

![er](public.product_public_category_product_template_rel.svg)

---

> Generated by [tbls](https://github.com/k1LoW/tbls)
